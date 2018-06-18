/**
 * Created by Yousry Elwrdany on 08/06/2018.
 */


$(document).ready(function () {
    //move to contact form
    $("#btnClose").click(function () {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 800);
    });

    //logo animation
    $(".navbar-brand").hover(function () {
        if ($(this).hasClass("logoAnim")) {
            $(this).removeClass("logoAnim");
        } else {
            $(this).addClass("logoAnim");
        }
    });
});

//baguetteBox.run('.tz-gallery');


//show section photos ajax
function show_section_photos(id) {
    var ajaxConfig = {
        'url': '/photos/' + id,
        'success': function (data) {
            $("#show").html(data);
        }
    }
    $.ajax(ajaxConfig)
        .done(function () {
            $('#show').addClass('show');
        })
        .fail(function () {
            $('#wrong').css('display', 'block');
        });
}