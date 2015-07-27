
/* Header bar shadow on scroll */

$(window).scroll(function() {
    if($(window).scrollTop() > 125) {
        $(".page-header").css('box-shadow', '0 2px 5px rgba(0,0,0,.26)');
    } else{
        $(".page-header").css('box-shadow', 'none');
    }
});


/* Open/close responsive menu */

$(".resp-name-logo").click(function(){
    $(".header-menu").css("marginLeft", "0");
    $(".responsive-menu-overlay").css("display", "block");
});
$(".responsive-menu-overlay").click(function(){
    $(".header-menu").css("marginLeft", "-280px");
    $(".responsive-menu-overlay").css("display", "none");
});