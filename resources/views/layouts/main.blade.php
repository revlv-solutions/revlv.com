<!doctype html>
<html class="no-js" lang="en">
  @include('partials.meta')
  <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- scroll to top -->
    <div class="scrollup">
      <i class="nc-icon-mini arrows-3_small-up"></i>
    </div>
    <div
      id="app"
      class="container">
      @include('partials.header')
      @yield('content')
      @include('partials.footer')

      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75257522-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-75257522-1');
      </script>
    </div>
  </body>
</html>
