@extends('layouts.branding')

@push('scripts')
<script>
  $(document).on('turbolinks:load', function () {
    setTimeout(function() {
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
    }, 200)
  })
</script>
@endpush


@section('content')
  <div class="header">

    <div id="deco" class="header__deco">
      <div id="deco-circle-1" class="header__deco__circle"></div>
      <div id="deco-circle-2" class="header__deco__circle header__deco__circle--b"></div>
      <div class="header__deco__line"></div>
      <div class="header__deco__line header__deco__line--b"></div>
    </div>

    <div class="nav">
        <div class="nav__button">
          <div class="nav__button__icon"></div>
        </div>

        <div class="nav__overlay">
          <div class="nav__option">
            <ul class="nav__list">
              <li class="nav__list__item">
                <a href="/" class="nav__list__link">Home</a>
              </li>
              <li class="nav__list__item">
                <a href="/profile" class="nav__list__link">Profile</a>
              </li>
              <li class="nav__list__item">
                <a href="/solutions" class="nav__list__link">Solutions</a>
              </li>
              <li class="nav__list__item">
                <a href="/products" class="nav__list__link">Products</a>
              </li>
              <li class="nav__list__item">
                <a href="/clients" class="nav__list__link">Clients</a>
              </li>
              <li class="nav__list__item">
                <a href="/careers" class="nav__list__link">Careers</a>
              </li>
              <li class="nav__list__item">
                <a href="/contact-us" class="nav__list__link">Contacts</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="header__logo">
          <span class="header__logo__text">Revlv Solutions Inc.</span>
          <span class="header__logo__icon"><img src="/img/revlv-icon.png" alt=""></span>
        </div>

        <div class="header__scroll-animation">
          <div class="mouse m-4"></div>
        </div>

        <ul class="header__social">
          <li class="header__social__item">
            <a href="" class="header__social__link"><i class="nc-icon-mini social_logo-facebook"></i></a>
          </li>
          <li class="header__social__item">
            <a href="" class="header__social__link"><i class="nc-icon-mini social_logo-twitter"></i></a>
          </li>
        </ul>
    </div>

    <div class="slides">
      <div class="slides__container">
        <div class="slides__item">
          <div class="slides__item__overlay">
            <div class="slides__item__context">
              <span class="slides__item__context__icon">1</span>
              <h1 class="slides__item__context__title">Innovator</h1>
            </div>
          </div>
          <img class="for-slide" src="/img/slide-2.jpg">
        </div>
        <div class="slides__item">
          <div class="slides__item__overlay">
            <div class="slides__item__context">
              <span class="slides__item__context__icon">2</span>
              <h1 class="slides__item__context__title">Thinker</h1>
            </div>
          </div>
          <img class="for-slide" src="/img/slide-1.jpg">
        </div>
        <div class="slides__item">
          <div class="slides__item__overlay">
            <div class="slides__item__context">
              <span class="slides__item__context__icon">3</span>
              <h1 class="slides__item__context__title">Artist</h1>
            </div>
          </div>
          <img class="for-slide" src="/img/slide-3.jpg">
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="section__wrapper">
      <div class="section__content">
        <div class="section__content__left">
          <h1 class="section__title">
            Pursue The Future Through Technology
          </h1>
          <ul>
            <li>Delivering your products and services through your own customized software and application systems</li>
            <li>Increasing your efficiency through your own customized support software systems</li>
            <li>Supporting your mission through state-of-the-art computing, network & security solutions</li>
            <li>Linking your stakeholders through reliable and cost effective broadband, satellite, radio internet and communications systems</li>
          </ul>
          <a href="/profile" class="section__button">Full Profile</a>
        </div>
        <div class="section__content__right">
          <div class="section__content__right__image">
            <img src="/img/revlv-toon.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section--career">
    <div class="section__overlay">
      <div class="section__wrapper">
        <h1 class="section__title">
          <span class="section__subtitle">Join our growing team</span>
          Let's Work Together
        </h1>
        <a href="/careers" class="section__button">Apply Today</a>
      </div>
    </div>
  </div>

  @include('partials.footer')
@endsection
