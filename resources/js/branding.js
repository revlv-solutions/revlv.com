import $ from 'jquery'

$(document).on('turbolinks:load', function () {
  $('.preloader').fadeOut(1000, function () {
    $(this).remove()
  })

  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.scrollup').addClass('is-visible')
    } else {
      $('.scrollup').removeClass('is-visible')
    }
  })

  $('.scrollup').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 600)
    return false
  })

  $('.nav__button').click(function () {
    $(this).toggleClass('is-open')
    $(this).siblings('.nav__overlay').toggleClass('is-open')
    $(this).parents('.header').find('.header__scroll-animation').toggleClass('is-hidden')
  })

  $('.slides').superslides({
    play: 5000,
    animation: 'fade',
    hashchange: false,
    pagination: true,
    scrollable: false,
    elements: {
      preserve: '.preserve',
      nav: '.slides__navigation',
      container: '.slides__container',
      pagination: '.slides__pagination'
    }
  })
})
