/* Theme Scripts */

var $ = jQuery.noConflict();

// onscroll  search box close js
$(window).on('scroll', function (e) {
    $(".search-field-form").removeClass('form-active');
});

$(document).on('click', '.navbar-toggler', function(){
    $('main').hide();
});
$(document).on('click', '.mobile-menu-close', function(){
    $('.navbar-collapse').removeClass('show');
    $('main').show();
});

if($('.navbar ul ul').length > 0){   
    $('.navbar ul ul ').before('<button class="submenu-caret"></button>')
}

$('.submenu-caret').click(function(){
    $(this).next().slideToggle();
    $(this).parent().siblings().find('ul').slideUp()
});


$('.wc-block-components-text-input input, .wc-block-components-text-input textarea, .wc-block-components-text-input select').on('focus', function() {
    $(this).siblings('label').hide();
}).on('blur', function() {
    if (!$(this).val()) {
        $(this).siblings('label').show();
    }
});

$('.wc-block-components-text-input input, .wc-block-components-text-input textarea, .wc-block-components-text-input select').each(function() {
    if ($(this).val()) {
        $(this).siblings('label').hide();
    }
});