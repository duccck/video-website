<?php
echo '

$(function(){
    $("#up").click(function(){
        jQuery("html,body").animate({
            scrollTop:0
        },1000);
    });
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 200){
            $(\'#up\').fadeIn("slow");
        } else {
            $(\'#up\').stop().fadeOut("slow");
        }
    });
});

        ';
?>