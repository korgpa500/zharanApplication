/**
 * Created by Yousry Elwrdany on 08/06/2018.
 */


$(document).ready(function () {
    $("#btnClose").click(function () {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 800);
    });

    $(".navbar-brand").hover(function () {
        if ($(this).hasClass("logoAnim")) {
            $(this).removeClass("logoAnim");
        } else {
            $(this).addClass("logoAnim");
        }
    });
});