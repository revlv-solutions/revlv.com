<!-- scripts -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
<!-- superslides -->
<script src="src/plugins/superslides/jquery.superslides.js"></script>
<script>
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
  });
</script>
<!-- custom scripts -->
<script src="src/js/plugins.js"></script>
<script src="src/js/main.js"></script>
<!-- google analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-67532681-1', 'auto');
  ga('send', 'pageview');
</script>
