    $(document).ready(function () {
        $('body').bootstrapMaterialDesign();
        updateHeight();
    });

    function updateHeight() {
        const Height = $('footer').height();
        $('body').css('margin-bottom', Height + 180 + 'px')
    }

    window.onscroll = function() {
        if(window.scrollY >= 5){
            $('.navbar').addClass('bg-white');
            $('.navbar').addClass('easyTouchNav');
            $('.navbar').addClass('navShadow');
            $('.navbar').addClass('shadow');
            $('.navbar').removeClass('bg-transparent');
            // console.log('Added');
        } else if(window.scrollY < 5){
            $('.navbar').removeClass('bg-white');
            $('.navbar').removeClass('shadow');
            $('.navbar').addClass('easyTouchNav');
            $('.navbar').removeClass('navShadow');
            // console.log('Removed');
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