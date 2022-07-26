/* Add your javascript here */var refNumber, hLink, choice;var offset = 250, /*// At what pixels show Back to Top Button*/    scrollDuration = 300, /*// Duration of scrolling to top*/    id, href, pinHolder, text;function checkOffset(absoluteElement, relativeElement) {    if (absoluteElement.offset().top + absoluteElement.height() >=        relativeElement.offset().top - 10)        absoluteElement.css({            'position': 'absolute',            'bottom': '1em'        });    if ($(document).scrollTop() + window.innerHeight < relativeElement.offset().top)        absoluteElement.css({            'position': 'fixed',            'bottom': '1em'        });}$(document).ready(function () {    $(document).foundation();    pinHolder = $('.pin-input');    $('.act').on('click', function (e) {        e.preventDefault();        href = $(this).attr('href');        text = $(this).html();        $('body').append(            '<div class="pop-response">' +            '<a href="#" class="close-this no-close-pop">x</a>' +            '<p>Are you sure you want to ' + text.toLowerCase() + ' this?</p>' +            '<div class="button-group">' +            '<a href="' + href + '" class="button">Yes</a> ' +            '<a href="#" class="button no-close-pop">No</a>' +            '</div>' +            '</div>');    });    $(document).on('click', '.no-close-pop', function (e) {        e.preventDefault();        $(this).parents('.pop-response').remove();    });    $('.reset').on('click', function (e) {        e.preventDefault();        href = $(this).attr('href');        id = $(this).attr('id');        swal({                title: "Are you sure?",                text: "You are about to reset this transaction!",                type: "warning",                showCancelButton: true,                confirmButtonColor: "#DD6B55",                confirmButtonText: "Yes, reset it!",                cancelButtonText: "No, cancel please!",                closeOnConfirm: false,                closeOnCancel: true            },            function (isConfirm) {                if (isConfirm) {                    $.ajax({                        url: href + '/' + id,                        type: 'post',                        dataType: "html",                        success: function () {                            $('#' + id).html('<i class="fa fa-cog"></i> Reset').closest('.transaction-row')                                .children('.text-center')                                .html('<span class="label warning">' +                                    '<i class="fa fa-clock-o"></i> Pending' +                                    '</span>');                        },                        error: function () {                            $('#' + id).html('<i class="fa fa-cog"></i> Reset').closest('.transaction-row')                                .children('.text-center')                                .html('<span class="label secondary">' +                                    'Error' +                                    '</span>');                        }                    });                    swal("Reset!", "Your transaction has been reset", "success");                } else {                    $(this).html('<i class="fa fa-cog"></i> Reset');                    swal("Cancelled", "Transaction has not been cancelled :)", "error");                }            });    });    $('[data-response]').on('click', function () {        pinHolder.css({            'opacity': '1',            'visibility': 'visible'        });    });    $('.close-window').on('click', function () {        pinHolder.css({            'opacity': '0',            'visibility': 'hidden'        });    });    $('#deadline').datepicker({dateFormat: 'yy-mm-dd', minDate: "+1D", maxDate: "+7D", showButtonPanel: true});    $('.round-we-go').slick({        autoplay: true,        autoplaySpeed: 4000,        infinite: true,        arrows: false,        speed: 500,        fade: true,        cssEase: 'linear'    });    $('.stages-container').slick({        fade: true,        infinite: false,        arrows: false,        dots: false,        draggable: false,        adaptiveHeight: true    });    $('.figure-slider').slick({        arrows: false,        dots: true,        slidesToShow: 3,        slidesToScroll: 1,        infinite: true,        responsive: [            {                breakpoint: 1024,                settings: {                    slidesToShow: 3,                    slidesToScroll: 1,                    infinite: true,                    dots: true                }            },            {                breakpoint: 600,                settings: {                    slidesToShow: 2,                    slidesToScroll: 1                }            },            {                breakpoint: 480,                settings: {                    slidesToShow: 1,                    slidesToScroll: 1                }            }/*            // You can unslick at a given breakpoint now by adding:            // settings: "unslick"            // instead of a settings object*/        ]    });    $('.hamburger').click(function(e) {        e.preventDefault();        $(this).toggleClass('open');        $('.main-navigation').toggleClass('open');    });    $('.man-content').animate({        'margin-top': $('.website-header').outerHeight()    },1000);/*// Smooth animation when scrolling*/    $('.to-top').click(function() {        $('html, body').animate({            scrollTop: 0        }, scrollDuration);    });    $('.response-button').on('click', function (e) {        e.preventDefault();        choice = $(this).data('response');        hLink = $(this).attr('href');        refNumber = $(this).data('reference-number');    });    $('.go-ahead').on('click', function (e) {       e.preventDefault();        $('.stages-container').slick('slickNext');    });    $('.ajax-submit').on('click', function (e) {        e.preventDefault();        var pinThe = $('[data-response="'+choice+'"]').data('id');        var pinEnter = $('#pin').val();        if (pinThe != pinEnter) {            sweetAlert("Oops...", "Something went wrong! That Pin doesn't match our records", "error");        } else if (pinThe == pinEnter) {            $('.form-error').hide();            pinHolder.css({                'opacity': '0',                'visibility': 'hidden'            });            console.log(hLink + '/' + refNumber + '/' + pinEnter);            $.ajax({                url: hLink + '/' + refNumber + '/' + pinEnter,                type: 'post',                dataType: "html",                success: function () {                    if (choice == 'approve') {                        swal("Tracking Approved!", "Please continue to see the full details of your tracking service", "success");                        var htmlContent = '<span class="label success"><i class="fa fa-check"></i> Approved</span>';                        $('#client_reply').html(htmlContent);                        $('.stages-container').slick('slickNext');                    } else {                        swal({                                title: "Are you sure?",                                text: "This action will cancel the tracking",                                type: "warning",                                showCancelButton: true,                                confirmButtonColor: "#DD6B55",                                confirmButtonText: "Decline!",                                cancelButtonText: "No, Continue",                                closeOnConfirm: false,                                closeOnCancel: true                            },                            function(isConfirm){                                if (isConfirm) {                                    swal("Declined!", "Seller will be notified", "success");                                    $('[data-response]').remove();                                    var htmlContent = '<span class="label alert"><i class="fa fa-close"></i> Declined</span>';                                    $('#client_reply').html(htmlContent);                                }                            });                    }                    var viewTracking = $('#viewTracking').attr('href');                    $('#viewTracking').attr('href', viewTracking + "/" +refNumber);                },                error: function () {                    $('#ajaxWarning').show();                }            })        } else {            $('.form-error').html('PLEASE ENTER A VALID PIN').show();        }    })});$(window).on('scroll', function() {    if ($(this).scrollTop() > offset) {        $('.to-top').fadeIn(500);    } else {        $('.to-top').fadeOut(500);    }    checkOffset($('.to-top'),$('#footer'));});/*$(function() { $('a[href*="#"]:not([href="#"]):not([role])').on('click', function(e) { e.preventDefault(); if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) { var target = $(this.hash); target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); if (target.length) { $('html, body').animate({ scrollTop: target.offset().top }, 1000); return false; } } }); });*/