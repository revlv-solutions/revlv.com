import $ from 'jquery'

(function ($) {
  $(document).on('turbolinks:load', function () {
    $('.preloader').fadeOut(1000, function () {
      $(this).remove()
    })

    // smooth scrolling
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = $(this.hash)
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 80
          }, 1000)
          return false
        }
      }
    })

    // show nav option
    $('.nav__button').click(function () {
      $(this).toggleClass('is-open')
      $(this).siblings('.nav__overlay').toggleClass('is-open')
      $(this).parents('.header').find('.header__scroll-animation').toggleClass('is-hidden')
    })

    // scroll up
    $(document).ready(function () {
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
    })
  })
})($)
