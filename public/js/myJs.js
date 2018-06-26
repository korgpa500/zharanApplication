/**
 * Created by Yousry Elwrdany on 08/06/2018.
 */


$(document).ready(function () {
    //move to contact form in home page
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


    //show password field
    $('#eye').hide();
    $('#password').mouseover(function () {
        if ($(this).val() !== "") {
            $('#eye').show();
        }
    });
    $('#password').mousedown(function () {
        $('#eye').hide();
    });

    $('#eye').click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        if ($('#password').attr("type") == "password") {
            $('#password').attr("type", "text");
        } else {
            $('#password').attr("type", "password");
        }
    });
});

//baguetteBox.run('.tz-gallery');


//show section photos ajax
function show_section_photos(id) {
    var ajaxConfig = {
        'url': '/photos/' + id + '/showPhotos',
        'success': function (data) {
            $("#showPhotos").html(data);
        }
    }
    $.ajax(ajaxConfig)
        .done(function () {
            $('#showPhotos').addClass('showPhotos');
        })
        .fail(function () {
            $('#wrong').css('display', 'block');
        });
}

function deletePhoto(id) {
    var ajaxDelete = {
        'url': '/photos/' + id + '/deletePhoto',
    }
    $.ajax(ajaxDelete)
        .done(
            function () {
                $('#DeleteImage').modal('show');
                $('#' + id).css("display", "none");
            }
        )
        .fail(function (error) {
            console.log(error);
        });
}

//print div id
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}