var Web;

function WebInterface() {
    /*
     * Main elements
     * */
    this.web_document = null;

    /*
     * Managers
     * */
    this.pages_manager = null;
    this.ajax_manager = null;
    this.notifications_manager = null;
    this.hotel_manager = null;
    this.customforms_manager = null;

    /*
     * Main initiation
     * */
    this.init = function () {
        // Assign main elements
        this.web_document = $("body");

        // Initialize managers
        this.hotel_manager = new WebHotelManagerInterface();
        this.hotel_manager.init();
        this.pages_manager = new WebPagesManagerInterface();
        this.ajax_manager = new WebAjaxManagerInterface();
        this.pages_manager.init();
        this.dialog_manager = new WebDialogManagerInterface();
        this.notifications_manager = new WebNotificationsManagerInterface();

        // Handlers
        this.forms_handler();
        this.links_handler();

    };

    /*
     * Forms
     * */
    this.forms_handler = function () {
        var self = this;
        this.web_document.on("submit", "form:not(.default-prevent)", function (event) {
            event.preventDefault();

            if ($(this).attr("method") !== "get")
                self.ajax_manager.post('/' + $(this).attr("action"), new FormData(this), null, $(this));
            else {
                var href = $(this).attr("action").replace(Site.url + "/", "").replace(Site.url, "");
                self.pages_manager.load(href + "?" + $(this).serialize());
            }
        });
    };

    /*
     * Links
     * */
    this.links_handler = function () {
        var self = this;
        this.web_document.on("click", "a", function (event) {
            if ($(this).attr("href") === "#" || $(this).hasClass("disabled"))
                event.preventDefault();

        }).on("mouseover", "a:not([target])", function () {
            if ($(this).attr("href"))
                if (!$(this).attr("href") && !$(this).attr("href").match(/^#/))
                    $(this).attr("target", "_blank");

        }).on("click", "a:not([target])", function (event) {
            event.preventDefault();
            if ($(this).attr("href") !== "#" && $(this).attr("href") !== "javascript:;" && $(this).attr("href") !== "javascript:void(0)" && $(this).attr("href") !== undefined) {
                var href = $(this).attr("href");
                if (!href)
                    href = "home";
                if (href.match(/^\#([A-z0-9-_]+)$/i))
                    window.location.hash = href;
                else if (window.location.pathname + window.location.search !== "/" + href || window.location.hash)
                    self.pages_manager.load(href);
            }

        }).on("click", ".login-dialog-button", function () {
            $.magnificPopup.open({
                items: {
                    type: "inline",
                    src: "#login-dialog"
                },
                callbacks: {
                    open: function () {
                        $(".rounded-input").keypress(function (e) {
                            if (e.which == 13) {
                                $.magnificPopup.close();
                                $("#login-request").unbind().click();
                            }
                        });
                    }
                },
                mainClass: "my-mfp-zoom-in"
            });
        }).on("click", "#login-request", function (event) {
            event.preventDefault();

            var verification_data = {
                username: $(".login-form [name=username]").val(),
                password: $(".login-form [name=password]").val(),
                remember_me: $(".login-form [name=remember_me]").is(':checked')
            };

            $.magnificPopup.close();

            Web.ajax_manager.post("/home/login/request", verification_data, function (result) {

                if (result.status == "pincode_required") {
                    setTimeout(function () {
                        Web.dialog_manager.create("confirm", "pincode", "twee-staps", null, "pincode", function (result) {
                            verification_data.pincode = result.toString();
                            Web.ajax_manager.post("/home/login/request", verification_data);

                            $.magnificPopup.close();
                        });
                    }, 500);
                }
            });
        }).on("click", "[data-close-popup = 'true']", function () {
            $.magnificPopup.close();

        }).on("click", ".fa-flag", function () {
            if (User.is_logged) {
                var action = $(this).attr("data-report");

                $.magnificPopup.open({
                    items: {
                        type: "inline",
                        src: "#report-item"
                    },
                    removalDelay: 300,
                    mainClass: "my-mfp-zoom-in"
                });

                $("#reportForm").attr('action', 'ajax/report/' + action);
                $('#reportItemid').val($(this).attr("data-id"));
            } else {
                Web.notifications_manager.create("error", "test", "test");
            }
        });
    };

}

$(function () {
    Web = new WebInterface();
    Web.init();
});

function WebPagesManagerInterface() {
    this.current_page_url = null;
    this.current_page_interface = null;
    this.last_page_url = "home";
    this.page_container = null;

    /*
     * Manager initialization
     * */
    this.init = function () {
        var self = this;

        this.page_container = $(".page-container");
        this.current_page_url = window.location.pathname.substr(1) + window.location.search;
      
        this.current_page_interface = new WebPageInterface(this, this.page_container.attr("data-page"));
        this.current_page_interface.assign_interface();

        if (this.current_page_url === "") {
            this.current_page_url = "home";
        }

        if (this.current_page_url.match(/^hotel/) && User.is_logged) {
            Web.hotel_manager.open_hotel(this.current_page_url);
        }

        History.Adapter.bind(window, "statechange", function () {
            var state = History.getState();
            var url = state.url.replace(document.location.origin, "").substring(1);

            if (self.current_page_url !== url) {
                if (url === "/") {
                    self.load("home", null, false, null, false);
                } else {
                    self.load("/" + url, null, false, null, false);
                }
            }
            self.current_page_url = url;
        });
    };

    /*
     * History push
     * */
    this.push = function (url, title, history_replace) {
        url = url.replace(/^\/|\/$/g, "");
        this.current_page_url = url;

        if (!history_replace) {
            History.pushState(null, title ? title : Site.name, "/" + url);
        } else {
            History.replaceState(null, title ? title : Site.name, "/" + url);
        }
    };

    /*
     * Load page
     * */
    this.load = function (url, data, scroll, callback, history_push, history_replace) {

        if (scroll === undefined) {
            scroll = true
        }

        if (history_push === undefined) {
            history_push = true
        }

        if (history_replace === undefined) {
            history_replace = false
        }

        var self = this;
        var body = $("body");

        if (url === "")
            url = "home";

        if (url.charAt(0) !== "/") {
            url = "/" + url;
        }

        this.last_page_url = this.current_page_url;

        if (!url.match(/^\/hotel/)) {
            
            $.ajax({
                type: "get",
                url: url,
                dataType: "json",
                error: function (request, status, error) {
                   console.log(request.responseText)
                    Web.notifications_manager.create("error", error, request.responseText);
                }
            }).done(function (result) {
                // Change full page
                if (result.location) {
                    window.location = result.location;
                    return null;
                }

                // Create notification
                if (!isEmpty(result.status) && !isEmpty(result.message))
                    Web.notifications_manager.create(result.status, result.message, (result.title ? result.title : null), (Number.isInteger(result.timer) ? result.timer : undefined), (result.link ? result.link : null));


                // Create dialog
                if (result.dialog) {
                    Web.dialog_manager.create("default", result.dialog, result.title, null, null);
                    return;
                }


                // Change page
                else if (result.loadpage)
                    self.load(result.loadpage);

                // Replace page
                else if (result.replacepage)
                    self.load(result.replacepage, null, true, null, true, true);

                // Build new page
                else {
                    self.current_page_interface = new WebPageInterface(self, result.id, scroll, result);
                    self.current_page_interface.build();

                    if (typeof callback === "function")
                        callback(result);
                }

                // Hide hotel
                if (body.hasClass("hotel-visible"))
                    body.removeClass("hotel-visible");

                // Push history & change document title
                if (window.location.pathname + window.location.search === "/" + url)
                    return;

                document.title = result.title;
                self.push(url, result.title, false);
            });
        } else if (User.is_logged) {
            Web.hotel_manager.open_hotel(url.replace("hotel?", "").replace("hotel", ""));
            self.push(url, "Hotel - " + Site.name, false);
        }
    };
}

function WebPageInterface(manager, type, scroll, page_data) {
    if (scroll === undefined) {
        scroll = true;
    }

    /*
     * Page configuration
     * */
    this.manager = manager;
    this.type = type;
    this.scroll = scroll;
    this.page_data = page_data;
    this.page_interface = null;

    /*
     * Build page
     * */
    this.build = function () {
        if (this.page_data === null)
            return;

        var self = this;

        // Assign page
        self.manager.page_container.attr("data-page", "dynamic").html(this.page_data.content);

        // Update navigation
        var navigation_container = $(".navigation-container");

        // Set category
        var category = this.type.substr(0, this.type.lastIndexOf("_"));
        if (isEmpty(category))
            category = this.type;

        navigation_container.find(".navigation-item.selected:not([data-category='" + category + "'])").removeClass("selected");
        navigation_container.find(".navigation-item[data-category='" + category + "']").addClass("selected");

        if (this.manager.current_page_url.indexOf("forum") >= 0) {} else {
            if (this.scroll)
                $("html, body").animate({
                    scrollTop: navigation_container.offset().top
                }, 300);
        }

        // Custom page interface
        this.assign_interface();
    };

    /*
     * Custom interface
     * */
    this.assign_interface = function () {
        if (this.type === "home")
            this.page_interface = new WebPageHomeInterface(this);
      
        if (this.page_interface !== null)
            this.page_interface.init();
    };

    /*
     * Get page container
     * */
    this.get_page_container = function () {
        return this.manager.page_container;
    };

    /*
     * Events
     * */
    this.update = function () {};
}

function WebAjaxManagerInterface() {

    this.get = function (url, callback) {
        PageLoading.show();

        // Requests
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            processData: false,
            contentType: false,
            error: function (request, status, error) {
                PageLoading.hide();
                Web.notifications_manager.create("error", error, request.responseText);
            }
        }).done(function (result) {
            PageLoading.hide();

            if (typeof callback === "function")
                callback(result);
        });
    }

    /*
     * Post method
     * */
    this.post = function (url, data, callback, form) {
        // Prepare data
        if (!(data instanceof FormData)) {
            if (!(data instanceof Object))
                return;

            var data_source = data;
            data = new FormData();
            for (var key in data_source) {
                if (!data_source.hasOwnProperty(key))
                    continue;

                data.append(key, data_source[key]);
            }
        }

        // Check form name
        if (form !== undefined) {
            if (form.attr("action") === "login")
                data.append("return_url", window.location.href);
        }

        PageLoading.show();

        if (url.charAt(0) !== "/") {
            url = "/" + url;
        }

        // Requests
        $.ajax({
            type: "post",
            url: url,
            data: data,
            dataType: "json",
            processData: false,
            contentType: false
        }).done(function (result) {
            PageLoading.hide();

            // Change full page
            if (result.location) {
                window.location = result.location;
                return null;
            }

            // Change page
            if (result.pagetime)
                setTimeout(function () {
                    window.location = result.pagetime
                }, 2500);

            // Change page
            if (result.loadpage)
                Web.pages_manager.load(result.loadpage);

            // Replace page
            if (result.replacepage)
                Web.pages_manager.load(result.replacepage, null, true, null, true, true);

            // Build modal
            if (result.modal) {
                $.magnificPopup.open({
                    closeOnBgClick: false,
                    items: [{
                        modal: true,
                        src: "/popup/" + result.modal,
                        type: "ajax"
                    }]
                }, 0);
            }

            // Close popup
            if (result.close_popup)
                $.magnificPopup.close();

            // Check if is form
            if (form !== undefined) {
                if (!result.captcha_error)
                    form.find(".registration-recaptcha").removeClass("registration-recaptcha").removeAttr("data-sitekey").removeAttr("data-callback");
            }

            // Create notification
            if (!isEmpty(result.status) && !isEmpty(result.message))
                Web.notifications_manager.create(result.status, result.message, (result.title ? result.title : null), (Number.isInteger(result.timer) ? result.timer : undefined), (result.link ? result.link : null));

            // Callback if exists
            if (typeof callback === "function")
                callback(result);
        });
    };
}

function WebNotificationsManagerInterface() {
    this.titles_configutation = {
        success: "test",
        error: "test",
        info: "test"
    };
    this.notifications = {};

    this.create = function (type, message, title, timer, link) {
        var notification_id = (new Date().getTime() + Math.floor((Math.random() * 10000) + 1)).toString(16);

        if (timer === undefined)
            timer = 5;

        this.notifications[notification_id] = new WebNotificationInterface(this, notification_id, type, message, title, timer, link);
        this.notifications[notification_id].init();
    };

    this.destroy = function (id) {
        if (!this.notifications.hasOwnProperty(id))
            return null;

        this.notifications[id].notification.remove();
        delete this.notifications[id];
    };
}

function WebNotificationInterface(manager, id, type, message, title, timer, link) {
    this.manager = manager;
    this.id = id;
    this.type = type;
    this.message = message;
    this.title = title;
    this.timer = timer;
    this.link = link;
    this.notification = null;
    this.timeout = null;


    this.init = function () {
        var self = this;
        var template = [
            '<div class="notification-container" data-id="' + this.id + '" data-type="' + this.type + '">\n' +
            '    <a href="#" class="notification-close"></a>\n' +
            '    <div class="notification-title">' + (this.title != null ? this.title : this.manager.titles_configutation[this.type]) + '</div>\n' +
            '    <div class="notification-content">' + this.message + '</div>\n' +
            '</div>'
        ].join("");

        this.notification = $(template).appendTo(".notifications-container");

        this.notification.find(".notification-close").click(function () {
            self.close();
        });

        if (this.link != null) {
            this.notification.click(function () {
                if ($(this).hasClass("notification-close"))
                    return null;

                var href = self.link.replace(Site.url + "/", "").replace(Site.url, "");
                if (!href)
                    href = "home";

                Web.page_container.load(href);
            });
        }

        if (this.timer !== 0) {
            this.notification.hover(function () {
                clearTimeout(self.timeout);
            }, function () {
                self.timeout = setTimeout(function () {
                    self.close();
                }, self.timer * 1000);
            });
        }

        this.show();
    };

    this.show = function () {
        var self = this;

        if (this.timer === 0)
            this.notification.fadeIn();
        else {
            this.notification.fadeIn();
            this.timeout = setTimeout(function () {
                self.close();
            }, this.timer * 1000);
        }
    };

    this.close = function () {
        var self = this;
        this.notification.animate({
            "opacity": 0
        }, 300, function () {
            $(this).slideUp(400, function () {
                self.manager.destroy(self.id);
            });
        });
    };
}

function WebDialogManagerInterface() {
    this.buttons = null;
    this.input = null;
    this.type = null;
    this.title = null;
    this.content = null;
    this.callback = null;

    this.create = function (type, content, title, buttons, input, callback) {
        // Reset default
        this.buttons = {
            cancel: "test",
            confirm: "test"
        };
        this.type = null;
        this.title = null;
        this.content = null;
        this.input = null;
        this.callback = null;

        // Assign new values
        this.type = type;
        this.title = title === undefined ? "test" : title;
        this.content = content;
        this.callback = callback;
        this.input = input;

        if (buttons !== undefined)
            this.assign_buttons(buttons);

        this.build();
    };

    this.build = function () {

        var self = this;

        var template = [
            '<div class="' + this.type + '-popup dialog-popup zoom-anim-dialog">\n' +
            '    <h3>' + this.title + '</h3>\n' +
            '    ' + this.content + '\n' +
            '    <div class="input-container"></div>' +
            '    <div class="buttons-container"></div>' +
            '</div>'
        ].join("");

        var dialog = $(template);

        dialog.find(".buttons-container").append('<button class="rounded-button ' + (this.type === "confirm" ? 'red' : 'lightblue') + ' cancel">' + this.buttons.cancel + '</button>');

        if (this.input !== null) {
            dialog.find(".input-container").append('<br /><input type="text" class="' + this.input + ' rounded-input purple-active dialog-input">');
        }

        if (this.type === "confirm")
            dialog.find(".buttons-container").append('<button class="rounded-button red plain confirm">' + this.buttons.confirm + '</button>');

        $.magnificPopup.open({
            modal: this.type === "confirm",
            items: {
                src: dialog,
                type: "inline"
            },
            callbacks: {
                open: function () {
                    var content = $(this.content);

                    content.unbind().on("click", ".confirm", function () {

                        var result = $('.dialog-input').map(function () {
                            return $(this).val();
                        }).toArray();

                        $.magnificPopup.close();
                        $(document).off("keydown", keydownHandler);

                        if (typeof self.callback === "function")
                            self.callback(result)

                    }).on("click", ".cancel", function () {
                        $.magnificPopup.close();
                        $(document).off("keydown", keydownHandler);

                    });

                    var keydownHandler = function (event) {
                        if (event.keyCode === 13) {
                            content.find(".confirm").click();
                            return false;
                        } else if (event.keyCode === 27) {
                            content.find(".cancel").click();
                            return false;
                        }
                    };

                    $(document).on("keydown", keydownHandler);
                }
            }
        });
    };

    this.assign_buttons = function (buttons) {
        for (var name in buttons) {
            if (buttons.hasOwnProperty(name))
                this.buttons[name] = buttons[name];
        }
    };

}

function WebHotelManagerInterface()
{
    this.hotel_container = null;
    this.current_page_url = null;
    /*
    * Manager initialization
    * */
    this.init = function ()
    {
        this.current_page_url = window.location.pathname.substr(1) + window.location.search;
      
        this.hotel_container = $("#hotel-container");
        
        this.hotel_container.find(".client-buttons .client-close").click(this.close_hotel);
        this.hotel_container.find(".client-buttons .client-fullscreen").click(this.toggle_fullscreen.bind(this));
        this.hotel_container.find(".client-buttons .client-count").click(this.refresh_count);
        this.hotel_container.find(".client-buttons .client-radio").click(this.radio(this));
        this.hotel_container.find(".client-buttons .client-news").click(this.news(this));

        setInterval(function() {
            $("body").find(".client-buttons .client-count #count").load("/api/online");
        }, 120000);
    };

    /*
    * Hotel toggle
    * */
    this.close_hotel = function ()
    {
        Web.pages_manager.load(Web.pages_manager.last_page_url, null, true, null, true);
    };

    this.refresh_count = function ()
    {
        $("body").find(".client-buttons .client-count #count").load("/api/online");
    };

    this.open_hotel = function (arguments)
    {
        var actions = {};
        var container = this.hotel_container;
        var container_actions = this.hotel_actions;
        
        if (arguments !== undefined) {
            parse_str(arguments, actions);
        }

        var body = $("body");
  
        body.find(".header-container .header-content .account-container .account-buttons .hotel-button").text("terug");

        if (!body.hasClass("hotel-visible"))
        {
            Web.ajax_manager.get("/api/vote", function(result) {

                if(result.krews_list !== undefined && result.krews_list.status == 0) 
                {
                    container.prepend('<iframe class="client-frame" src="' + result.krews_api + '"></iframe>');
                    body.addClass("hotel-visible");
                    body.find(".client-buttons").hide();
                    
                    History.pushState(null, Site.name + '- Krews Vote', 'hotel');
                } 
                else 
                {
                  if (container.find(".client-frame").length === 0)
              
                      container.prepend('<iframe id="hotel-frame" class="client-frame" src="/client"></iframe>');
 
                  
                      body.addClass("hotel-visible");

                      var radio = document.getElementById("stream");
                      radio.src = Client.client_radio;
                      radio.volume = 0.1;
                      radio.play();

                      $(".fa-play").hide();
                      $(".fa-pause").show();
                  }
            });
        }
    };
  
    this.news = function () {

        this.hotel_container.find(".client-buttons .client-news").click( function() {
              var iframe = document.getElementById("hotel-frame");
              var elm = iframe.contentWindow.document.getElementById("news-alert");
              var elm2 = iframe.contentWindow.document.getElementById("test");
                  
              elm2.onclick = function() {
                  if(elm2.getAttribute('data-url'))
                  Web.pages_manager.load(elm2.getAttribute('data-url'), null, true, null, true);
              };
          
              var isHidden = elm.style.display == "none"; 
          
              if(isHidden) {
                  elm.style.display = "block";
              } else {
                  elm.style.display = "none";
              }
        });
    };

    /*
    * LeetFM Player
    * */
    this.radio = function () {

        var radio = document.getElementById("stream");

        this.hotel_container.find(".client-buttons .client-radio .fa-play").click( function() {
            radio.src = Client.client_radio;
            radio.volume = 0.1;
            radio.play();

            $(".fa-play").hide();
            $(".fa-pause").show();
        });

        this.hotel_container.find(".client-buttons .client-radio .fa-pause").click( function() {

            radio.pause();
            radio.src = "";
            radio.load();

            $(".fa-play").show();
            $(".fa-pause").hide();
        });

        this.hotel_container.find(".client-buttons .client-radio .fa-volume-up").click( function() {
            var volume = radio.volume;

            if(volume > 1.0) {
                radio.volume += 0.0;
            } else {
                radio.volume += 0.1;
            }
        });

        this.hotel_container.find(".client-buttons .client-radio .fa-volume-down").click( function() {
            var volume = radio.volume;

            if(volume < 0.0) {
                radio.volume -= 0.0;
            } else {
                radio.volume -= 0.1;
            }
        });
    };

    /*
    * Fullscreen toggle
    * */
    this.toggle_fullscreen = function ()
    {
        if ((document.fullScreenElement && document.fullScreenElement) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }

            this.hotel_container.find(".client-buttons .client-fullscreen .client-fullscreen-icon").addClass("hidden");
            this.hotel_container.find(".client-buttons .client-fullscreen .client-fullscreen-icon-back").removeClass("hidden");
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }

            this.hotel_container.find(".client-buttons .client-fullscreen .client-fullscreen-icon").removeClass("hidden");
            this.hotel_container.find(".client-buttons .client-fullscreen .client-fullscreen-icon-back").addClass("hidden");
        }
    };
}