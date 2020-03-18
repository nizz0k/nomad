<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>



			<footer class="py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
          <div class="footer-w3layouts-head text-center">
            <h2><a href="/">Nomad</a></h2>
          </div>
          <div class="social-icons mt-lg-5 mt-md-4 mt-3 text-center">
            <ul>
              <li><a href="https://www.facebook.com/NomadAfricanSpaWindhoek/"><span class="fa fa-facebook"></span></a></li>
              <li><a href="mailto:relax@nomadspa.com"><span class="fa fa-envelope"></span></a></li>
              <li><a href="https://wa.me/264814945005"><span class="fa fa-whatsapp"></span></a></li>
              <li><a href="https://www.google.com/maps/place/Nomad+African+Spa/@-22.579925,17.095999,17z/data=!3m1!4b1!4m5!3m4!1s0x1c0b1b327e24aa3f:0xd04bb46ab48fab0a!8m2!3d-22.579925!4d17.098193"><span class="fa fa-map-marker"></span></a></li>
            </ul>
          </div>
          <div class="bottem-wthree-footer text-center pt-md-4 pt-3">
            <p> 
              © 2019 Nomad. All Rights Reserved
            </p>
          </div>
          <!-- move icon -->
          <div class="text-center">
            <a href="#home" class="move-top text-center mt-3"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
          </div>
          <!--//move icon -->
        </div>
        
        <div class="card-group">
            
        </div>
      </footer>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

