<footer>

    <div class="wrapper">

      <img src="<?php bloginfo('template_url'); ?>/img/logo-pb.png" alt="BrazilJS Logo" width="150" height="51">

      <p class="about">BrazilJS Foundation é uma fundação sem fins lucrativos com a missão de mover e unir a comunidade de JavaScript no Brasil.</p>

      <ul class="nav">
        <li><a href="team" title="Time">Time</a></li>
        <li><a href="http://braziljs.com.br/" title="Conferência">Conferência</a></li>
        <li><a href="contact" title="Contact">Contato</a></li>
      </ul>

      <ul class="social">
        <li><a href="https://twitter.com/braziljs" title="Twitter">Twitter</a></li>
        <li><a href="http://www.facebook.com/braziljs" title="Facebook">Facebook</a></li>
      </ul>

      <p class="license">© 2012. Conteúdo disponível sob a licença <a href="http://creativecommons.org/licenses/by/3.0/br/">Creative Commons</a>.</p>

    </div>

  </footer>


  <script src='<?php bloginfo('template_url'); ?>/js/jquery.js'></script>
  <script src='<?php bloginfo('template_url'); ?>/js/contact.js'></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js"></script>



  <script>
    $(document).ready(function() {
        var c = new Contact();
        c.init();
    });
  </script>

  <script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33656081-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=372862979453673";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</body>
</html>