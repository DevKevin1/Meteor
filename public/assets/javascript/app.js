var siteLoader = function() {
  
    var slideIndex = 0;
  
    return {
        init: function() {
            $('body').bootstrapMaterialDesign();
          
            const Height = $('footer').height();
            $('body').css('margin-bottom', Height + 180 + 'px');

            toastr.options = {
                closeButton: 1,progressBar: 1,positionClass: 'toast-top-right',preventDuplicates: 1
            };
          
            window.onscroll = function() {
                if(window.scrollY >= 5){
                    $('.navbar').addClass('bg-white');
                    $('.navbar').addClass('easyTouchNav');
                    $('.navbar').addClass('navShadow');
                    $('.navbar').addClass('shadow');
                    $('.navbar').removeClass('bg-transparent');
                } else if(window.scrollY < 5){
                    $('.navbar').removeClass('bg-white');
                    $('.navbar').removeClass('shadow');
                    $('.navbar').addClass('easyTouchNav');
                    $('.navbar').removeClass('navShadow');
                }
            };

            $('.switchUser').click(function() {
                var id = $(this).data('assigned-id');
                $("[name=switch]").val(id);

                $(".switchUser").removeClass("active");
                $('.switchUser[data-assigned-id=' + id +']').addClass("active");
            });

            $('.navbar-toggler').click(function() {
                var clicks = $(this).data('clicks');
                $('.navbar').removeClass('bg-transparent');
                if (clicks) {
                    $('.navbar').removeClass('shadow');
                    $('.navbar').addClass('easyTouchNav');
                    $('.navbar').removeClass('bg-transparent');
                    $('.navbar').removeClass('navShadow');
                } else {
                    $('.navbar').addClass('bg-white');
                    $('.navbar').addClass('easyTouchNav');
                    $('.navbar').addClass('navShadow');
                    $('.navbar').addClass('shadow');
                }
                $(this).data("clicks", !clicks);
            });
        },
      
        homeSlider: function(n) {
              var i;
              var slides = $(".newsSlides");

              for (i = 0; i < slides.length; i++) {
                $(slides[i]).css("display", "none");  
              }

              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    

              $(slides[slideIndex-1]).css("display", "block"); 
              setTimeout(siteLoader.homeSlider, 7000);
        },
      
        nextSlide: function(n) {
            siteLoader.homeSlider(slideIndex += n);
        }
    }
}();

jQuery(document).ready(function() {
    siteLoader.init();
    siteLoader.homeSlider(siteLoader.slideIndex);
});