jQuery.noConflict();
(function( a ) {
    
    //BXSLIDER
    a(document).ready(function () {        
        a(".bxsliderBannerZ").bxSlider({
            easing: "swing",
            mode: "fade",
            easing: "easeOutElastic",
            useCSS: false,
            controls: false,
            pager: false,
            auto: true,
            speed: 500,
            pause: 5000
        });        

        a(".bxslider").bxSlider({
                easing: "easeOutElastic",
                useCSS: false,
                controls: false,
                auto: true,
                speed: 950
        });
    });   
    
    //CONTACT FORM PLACEHOLDER
    a(document).ready(function() {
        function b() {
            if (a(this).val() === "") {
                a(this).val(a(this).attr("placeholder")).addClass("placeholder")
            }
        }

        function c() {
            if (a(this).val() === a(this).attr("placeholder")) {
                a(this).val("").removeClass("placeholder")
            }
        }

        if (!("placeholder" in a("<input>")[0])) {
            a("input[placeholder], textarea[placeholder]").blur(b).focus(c).each(b);
            a("form").submit(function() {
                a(this).find("input[placeholder], textarea[placeholder]").each(c)
            })
        }
    });
    
    /* == == */
    var progress = setInterval(function () {
        var $bar = a("#bar");

        if ($bar.width() >= 600) {
            clearInterval(progress);
        } else {
            $bar.width($bar.width() + 60);
        }
        $bar.text($bar.width() / 6 + "%");
        if ($bar.width() / 6 == 100){
          $bar.text("Still working ... " + $bar.width() / 6 + "%");
        }
    }, 800);

    a(window).load(function() {
      a("#bar").width(600);
      a(".loader").fadeOut(3000);
    });    
    
})(jQuery);