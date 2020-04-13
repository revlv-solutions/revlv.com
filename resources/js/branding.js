// preloader
(function ($) {
  $(window).load(function () {
    $('.preloader').fadeOut(1000, function () {
      $(this).remove()
    })
  })

  // smooth scrolling
  $(function () {
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

  // $(document).ready(function () {
  //     $('#deco').mousemove(function (e) {
  //         parallax(e, this, 0);
  //         parallax(e, document.getElementById('deco-circle-1'), .5);
  //         parallax(e, document.getElementById('deco-circle-2'), 1);
  //         parallax(e, document.getElementById('deco-circle-3'), 2);
  //         parallax(e, document.getElementById('deco-circle-4'), 4);
  //         parallax(e, document.getElementById('deco-circle-5'), 6.5);
  //     });
  // });

  // function parallax(e, target, layer) {
  //     var layer_coeff = 20 / layer;
  //     var x = ($(window).width() - target.offsetWidth) / 2 - (e.pageX - ($(window).width() / 2)) / layer_coeff;
  //     var y = ($(window).height() - target.offsetHeight) / 2 - (e.pageY - ($(window).height() / 2)) / layer_coeff;
  //     $(target).offset({ top: y ,left : x });
  // };
})(window.jQuery)
