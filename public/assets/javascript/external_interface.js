var ClientLoader = function() {

    var handleData = [];
  
    return {
        init: function() {
            var ie_flash;

            try {
                ie_flash = (window.ActiveXObject && (new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) !== false)
            } catch (err) {
                ie_flash = false;
            }

            var _flash_installed = ((typeof navigator.plugins != "undefined" && typeof navigator.plugins["Shockwave Flash"] == "object") || ie_flash);

            if (_flash_installed !== true) {
                ClientLoader.FlashMessage();
                return false;
            }
        },

        FlashMessage: function() {
            var t = "Youre almost in our Hotel,<br><a href=\"https://www.adobe.com/go/getflashplayer\" target=\"_blank\">Click here</a> to activate flash";
            document.getElementsByClassName("loading-text")[0].innerHTML = t;
        },

        eventListener: function() {
            window.addEventListener("load", () => {
              
                window.FlashExternalInterface = {};
                window.FlashExternalInterface.logDebug = args => console.log("[DEBUG]", args);
                window.FlashExternalInterface.logLoginStep = function(args) {
                    console.log(args)
                    if (args === "client.init.start") {
                        //window.LoadingClient[0].style.display = "none";
                    }
                };

                window.FlashExternalInterface.track = (n, e, a) => {
                    console.log("[TRACK]", n, e, a);
                };

                window.NewUserReception = {};

                window.NewUserReception.checkName = name => {
                    console.log('Checking name: "' + name + '"...');

                    ClientLoader.call("/api/newuser/name/check", {name:name}, function (result) {
                        void window.HabboFlashClient.flashInterface.newUserReceptionCheckNameResponse(name, result.code, result.validationResult, []);
                    });
                  
                    // result type can be any of the following strings
                    // "VALIDATION_NAME_OK"
                    // "VALIDATION_ERROR_NAME_TOO_LONG"
                    // "VALIDATION_ERROR_NAME_TOO_SHORT"
                    // "VALIDATION_ERROR_ILLEGAL_CHARS"
                    // "VALIDATION_ERROR_ILLEGAL_WORDS"
                };

                window.NewUserReception.claimName = name => {
                    console.log('Claiming name: "' + name + '"...');
                    // call to api
                    window.HabboFlashClient.flashInterface.newUserReceptionClaimNameResponse(
                        "OK", // same as above
                        {
                            resultType: "VALIDATION_NAME_OK"
                        }, // same as above
                        []
                    );
                };

                window.NewUserReception.saveOutfit = (look, gender) => {
                    console.log('Saving outfit: "' + look + '" - "' + gender + '"...');
                    // call to api
                    void window.HabboFlashClient.flashInterface.newUserReceptionSaveOutfitResponse(
                        look,
                        gender,
                        "OK"
                    );
                };

                window.NewUserReception.chooseRoom = index => {
                    console.log("Choose room", index);
                    // call to api
                    void window.HabboFlashClient.flashInterface.newUserReceptionChooseRoomResponse();
                };

                window.NewUserReception.logStep = function(args) {
                    console.log("nux", "log", args);
                    if (args == "NUX_ENTERED") {
                        window.LoadingClient[0].style.display = "none";
                    }
                };

            });
        },
      
        call: function(url, data, callback) {
            $.ajax({
                url: url,
                contentType: "application/json",
                dataType: "json",
                type: "POST",
                data: JSON.stringify(data)
            }).done(function(result) {
                if (typeof callback === "function")
                    callback(result);
            });
        }
    }
}();


jQuery(document).ready(function() {
    ClientLoader.init();
    ClientLoader.eventListener();
});