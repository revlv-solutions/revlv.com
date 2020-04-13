<!doctype html>
<html class="no-js" lang="en">
  @include('partials.meta')
  <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- preloader -->
   {{--  <div class="preloader">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" width="48" height="48">
        <g class="nc-icon-wrapper" fill="#fff">
          <g class="nc-loop_circle-03-24" transform="rotate(0.02090999693499241 12 12)">
            <circle opacity="0.4" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="12" cy="12" r="11" stroke-linejoin="miter"></circle>
            <path data-cap="butt" data-color="color-2" fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10" d="M12,1 c6.0751324,0,11,4.9248676,11,11" stroke-linecap="butt" stroke-linejoin="miter"></path>
          </g>
          <script>!function(){function t(t){return.5>t?4*t*t*t:(t-1)*(2*t-2)*(2*t-2)+1}function i(t){this.element=t,this.animationId,this.start=null,this.init()}if(!window.requestAnimationFrame){var n=null;window.requestAnimationFrame=function(t,i){var e=(new Date).getTime();n||(n=e);var a=Math.max(0,16-(e-n)),o=window.setTimeout(function(){t(e+a)},a);return n=e+a,o}}i.prototype.init=function(){var t=this;this.animationId=window.requestAnimationFrame(t.triggerAnimation.bind(t))},i.prototype.reset=function(){var t=this;window.cancelAnimationFrame(t.animationId)},i.prototype.triggerAnimation=function(i){var n=this;this.start||(this.start=i);var e=i-this.start;900>e||(this.start=this.start+900),this.element.setAttribute("transform","rotate("+Math.min(900*t(e/900)/2.5,360)+" 12 12)");if(document.documentElement.contains(this.element))window.requestAnimationFrame(n.triggerAnimation.bind(n))};var e=document.getElementsByClassName("nc-loop_circle-03-24"),a=[];if(e)for(var o=0;e.length>o;o++)!function(t){a.push(new i(e[t]))}(o);document.addEventListener("visibilitychange",function(){"hidden"==document.visibilityState?a.forEach(function(t){t.reset()}):a.forEach(function(t){t.init()})})}();</script>
        </g>
      </svg>
    </div> --}}
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
    </div>
    @yield('scripts')
  </body>
</html>
