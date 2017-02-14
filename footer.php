<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
	<div class="fruits">
		<img src="<?php echo get_template_directory_uri() . '/img/icons/footer-fruits.png' ?>" alt="Alejandra Gutiérrez Páez"/>
	</div>
  <div class="row text-center">
    <div class="col-xs-10 col-md-3-half col-sm-3 vertical-middle
                footer-join footer-col">
      <p class="footer-join-principal">
        Síguenos en:
				<a href="https://www.facebook.com/Nutri%C3%B3loga-Alejandra-G-P%C3%A1ez-925726230813208/" target='_blank'><img class="footer-img-small footer-img-small-spacing" src="<?php echo get_template_directory_uri() . '/img/icons/fb.png' ?>" alt="Alejandra Gutiérrez Páez"/></a>
				<a href="https://www.instagram.com/nutriologa.alegpaez/" target='_blank'><img class="footer-img-small" src="<?php echo get_template_directory_uri() . '/img/icons/instagram.png' ?>" alt="Alejandra Gutiérrez Páez"/></a>
      </p>
    </div>
    <div class="col-xs-10 col-md-4 col-sm-3 text-center
                vertical-middle footer-col">
      <figure class="footer-social-logo">
        <img class="footer-img" src="<?php echo get_template_directory_uri() . '/img/icons/full_logo_bw.png' ?>" alt="Alejandra Gutiérrez Páez"/>
      </figure>
			<div class="footer-container-center">
				<div class="footer-small-line"></div>
			</div>
      <p class="footer-social-terms">
         © Alejandra Gutiérrez 2017 todos los derechos reservados
      </p>
    </div>
    <div class="col-xs-10 col-md-3-half col-sm-3 vertical-middle
                footer-info footer-col">
      <p class="footer-info center">
        Suscríbete a nuestro Newsletter
      </p>
      <input class="fotter-input" placeholder="Correo electrónico" type='text'></input>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/lib/js/jquery.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/menu.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/newsletter.js' ?>"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
