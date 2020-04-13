@extends('layouts.branding')

@section('content')
<!-- header -->
<div class="header">
  <!-- decoration -->
  <div id="deco" class="header__deco">
    <div id="deco-circle-1" class="header__deco__circle"></div>
    <div id="deco-circle-2" class="header__deco__circle header__deco__circle--b"></div>
    <div class="header__deco__line"></div>
    <div class="header__deco__line header__deco__line--b"></div>
  </div>
  <!-- nav -->
  <div class="nav">
    <div class="nav__button">
      <div class="nav__button__icon"></div>
    </div>
    <div class="nav__overlay">
      <div class="nav__option">
        <ul class="nav__list">
          <li class="nav__list__item">
            <a href="index.html" class="nav__list__link">Home</a>
          </li>
          <li class="nav__list__item">
            <a href="profile.html" class="nav__list__link">Profile</a>
          </li>
          <li class="nav__list__item">
            <a href="solutions.html" class="nav__list__link">Solutions</a>
          </li>
          <li class="nav__list__item">
            <a href="products.html" class="nav__list__link">Products</a>
          </li>
          <li class="nav__list__item">
            <a href="clients.html" class="nav__list__link">Clients</a>
          </li>
          <li class="nav__list__item">
            <a href="careers.html" class="nav__list__link">Careers</a>
          </li>
          <li class="nav__list__item">
            <a href="contacts.html" class="nav__list__link">Contacts</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- logo -->
    <div class="header__logo">
      <span class="header__logo__text">Revlv Solutions Inc.</span>
      <span class="header__logo__icon"><img src="/img/revlv-icon.png" alt=""></span>
    </div>
    <!-- mouse -->
    <div class="header__scroll-animation">
      <div class="mouse m-4"></div>
    </div>
    <!-- social media -->
    <ul class="header__social">
      <li class="header__social__item">
        <a href="" class="header__social__link"><i class="nc-icon nc-logo-facebook"></i></a>
      </li>
      <li class="header__social__item">
        <a href="" class="header__social__link"><i class="nc-icon nc-logo-twitter"></i></a>
      </li>
      <!-- <li class="header__social__item">
        <a href="" class="header__social__link"><i class="nc-icon nc-logo-linkedin"></i></a>
        </li>
        <li class="header__social__item">
        <a href="" class="header__social__link"><i class="nc-icon nc-logo-github"></i></a>
        </li> -->
    </ul>
  </div>
  <!-- slides -->
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
          <!-- <span class="section__subtitle">Who we are</span> -->
          Pursue The Future Through Technology
        </h1>
        <ul>
          <li>Delivering your products and services through your own customized software and application systems</li>
          <li>Increasing your efficiency through your own customized support software systems</li>
          <li>Supporting your mission through state-of-the-art computing, network & security solutions</li>
          <li>Linking your stakeholders through reliable and cost effective broadband, satellite, radio internet and communications systems</li>
        </ul>
        <a href="profile.html" class="section__button">Full Profile</a>
      </div>
      <div class="section__content__right">
        <div class="section__content__right__image">
          <img src="/img/revlv-toon.png">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- careers -->
<div class="section section--career">
  <div class="section__overlay">
    <div class="section__wrapper">
      <h1 class="section__title">
        <span class="section__subtitle">Join our growing team</span>
        Let's Work Together
      </h1>
      <a href="" class="section__button">Apply Today</a>
    </div>
  </div>
</div>
<!-- footer -->
<div class="footer">
  <div class="footer__wrapper">
    <div class="footer__top">
      <div class="footer__contacts">
        <li class="footer__contacts__item">
          <span class="footer__contacts__item__title">Makati Office</span>
          Unit 26N Burgundy Corporate Tower, 252 Sen. Gil Puyat Avenue, Makati City<br>
          Mobile: +63 917-731-8821<br>
          Phone: +632 8831-3568
        </li>
        <li class="footer__contacts__item">
          <span class="footer__contacts__item__title">Las Piñas Office</span>
          #19 Primrose Street, Talon Quatro Village, Las Piñas City
        </li>
      </div>
      <ul class="footer__menu">
        <li class="footer__menu__item">
          <span class="footer__menu__title">Company</span>
        </li>
        <li class="footer__menu__item">
          <a href="index.html" class="footer__menu__link">Home</a>
        </li>
        <li class="footer__menu__item">
          <a href="profile.html" class="footer__menu__link">Profile</a>
        </li>
        <li class="footer__menu__item">
          <a href="solutions.html" class="footer__menu__link">Solutions</a>
        </li>
        <li class="footer__menu__item">
          <a href="products.html" class="footer__menu__link">Products</a>
        </li>
        <li class="footer__menu__item">
          <a href="clients.html" class="footer__menu__link">Clients</a>
        </li>
        <li class="footer__menu__item">
          <a href="careers.html" class="footer__menu__link">Careers</a>
        </li>
        <li class="footer__menu__item">
          <a href="contacts.html" class="footer__menu__link">Contacts</a>
        </li>
      </ul>
      <ul class="footer__menu">
        <li class="footer__menu__item">
          <span class="footer__menu__title">Products</span>
        </li>
        <li class="footer__menu__item">
          <a href="rsinet.html" class="footer__menu__link">RSInet ™</a>
        </li>
        <li class="footer__menu__item">
          <a href="sentry.html" class="footer__menu__link">Sentry ™</a>
        </li>
        <li class="footer__menu__item">
          <a href="sentinel.html" class="footer__menu__link">Sentinel ™</a>
        </li>
        <li class="footer__menu__item">
          <a href="tender.html" class="footer__menu__link">Tender ™</a>
        </li>
        <li class="footer__menu__item">
          <a href="plano.html" class="footer__menu__link">FCovid ™</a>
        </li>
      </ul>
      <ul class="footer__menu">
        <li class="footer__menu__item">
          <span class="footer__menu__title">Legal</span>
        </li>
        <li class="footer__menu__item">
          <a href="privacy-policy.html" class="footer__menu__link">Privacy Policy</a>
        </li>
      </ul>
      <ul class="footer__menu">
        <li class="footer__menu__item">
          <span class="footer__menu__title">Follow</span>
        </li>
        <li class="footer__menu__item">
          <a href="https://www.facebook.com/revlv/" target="_blank" class="footer__menu__link">Facebook</a>
        </li>
        <li class="footer__menu__item">
          <a href="https://twitter.com/revlvsolutions" target="_blank" class="footer__menu__link">Twitter</a>
        </li>
      </ul>
    </div>
    <div class="footer__bottom">
      <p class="footer__copyright">© 2020 Revlv Solutions Inc.</p>
    </div>
  </div>
</div>
@endsection
