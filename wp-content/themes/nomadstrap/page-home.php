<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$treat_img = get_field('treatments_image');

?>

<div class="wrapper" id="page-wrapper">
<!--About Section-->
<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
          <div class="row">
            <div class="col-lg-6 about-imgs-txt">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 about-fashion-one">
                  <img src="https://nomadspa.s3.amazonaws.com/static/img/nomadlong.png" alt="news image" class="img-fluid">
               
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 about-fashion-two mt-lg-5 mt-md-4 mt-sm-3">
                  <img src="https://nomadspa.s3.amazonaws.com/static/img/mariane5.jpg" alt="news image" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="col-lg-6 text-right about-two-grids">
            <h3 class="title  mb-md-4 mb-sm-3 mb-3">Who <span>we are</span></h3>
            <div class="about-para-txt">
              <p>The Nomad journey started in 2008, with a vision led by Mariane Akwenye, to reverse the inequality and exclusion in the wellness industry. 
                The plight of young women in the community who has potential yet very little opportunities and prospect for the industry.</p>
              <p class="mt-2">African Wellness is an integral part of our everyday life, 
                when one looks at the demographics of today’s industry, is featured nowhere! 
                The mission is to unlock untapped potential and transform the lives of undervalued 
                women, by imparting skills knowledge and modalities in the ancient art of holistic 
                treatments. This tribe of women, our practitioners, brings to you experiences of our 
                African Heritage, and as a company we achieving far reaching societal impact. 
                This is our knowledge, inspiration, and community.</p>
              <br/>
                <p>And with this we would like to introduce to you, <span>the new generation of wellness…</span>
                </p>
            </div>
         
          </div>
        </div>
      </div>
    </section>
<!--About-->
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-right mb-lg-5 mb-md-4 mb-sm-4 mb-3">When <span>& where</span></h3>
        <div class="row">
          <!--//contact-map -->
          <div class="address_mail_footer_grids col-lg-6 col-md-6">
          <iframe src="https://www.google.com/maps/d/u/2/embed?mid=1GcKcwafiBbq142Of2UL8GkYZJcqEBOrW" width="100%" height="350"></iframe>
          </div>
          <!--contact-map -->
          <div class="col-lg-6 col-md-6 contact-form-txt">
            <h4 style="color:#000 font-size:22px;font-weight:700;">Hours of Operation</h4>
            <br/>
            <p>MON-FRI: 11:00 – 20:00</p>
            <p> SAT: 11:00 – 23:00</P>
            <br/>

            
           
            <div class="row mt-lg-5 mt-md-4 mt-3">
              <div class="contact-list-grid col-lg-6 col-md-6 col-sm-6">
                <h4>Nomad African Spa</h4>
                <p class="pt-2">108 Jan Jonker Road, Windhoek</p>
                <p>Namibia</p>
                <br/>
                <p class="pt-2">(+264) 81 494 5005</p>
                <p class="pt-2"><a href="mailto:relax@nomadspa.com">relax@nomadspa.com</a> 
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </section>
<!---where and when-->
<section class="price py-lg-4 py-md-3 py-sm-3 py-3" id="pricing">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
          <div class="row">
            <div class="col-lg-6 about-imgs-txt">
              <img src="<?php echo $treat_img['url']; ?>" alt="<?php echo $treat_img['alt']; ?>" />
            </div>
            <div class="col-lg-6 text-right about-two-grids">
            <h3 class="title  mb-md-4 mb-sm-3 mb-3">Treatment<span> Pricing</span></h3>
            <div class="about-para-txt">
            <?php if( have_rows('treatment_pricing') ): ?>
             <ul class="list-group">
             <?php while( have_rows('treatment_pricing') ): the_row(); 
             $spa_treat = get_sub_field('treatment_name');
             $spa_price = get_sub_field('treatment_price');
             ?>
               <li class="list-group-item d-flex justify-content-between align-items-center">
              <?php echo $spa_treat  ?> <span class="badge badge-primary badge-pill"><?php echo $spa_price ?></span>
              </li>
              <?php endwhile; ?>
                </ul>
            <?php endif; ?>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Book now</button>              
            </div>
          </div>     
          </div>
        </div>
      </div>
    </section>
<!--Pricing-->
<section>
<div class="container">
<?php 
$dna_img = get_field('dna_image');
$vis_img = get_field('visual_image');
$trans_img = get_field('transformative_image');
$heal_img  = get_field('healthy_image');
?>
<h3 class="title  mb-md-4 mb-sm-3 mb-3"><span>What</span> Nomad<span> is</span></h3>
<div class="row">
<div class="col-md-6 col-sm-12">
<img src="<?php echo $dna_img['url']; ?>" alt="<?php echo $dnd_img['alt']; ?>" />
<p><?php the_field('dna_text'); ?></p>
</div><!--col-->
<div class="col-md-6 col-sm-12">
<img src="<?php echo $vis_img['url']; ?>" alt="<?php echo $vis_img['alt']; ?>" />
<p><?php the_field('visual_text'); ?></p>
</div><!--col-->
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<img src="<?php echo $trans_img['url']; ?>" alt="<?php echo $trans_img['alt']; ?>" />
<p><?php the_field('transformative_text'); ?></p>
</div><!--col-->
<div class="col-md-6 col-sm-12">
<img src="<?php echo $heal_img['url']; ?>" alt="<?php echo $heal_img['alt']; ?>" />
<p><?php the_field('healthy_text'); ?></p>
</div><!--col-->
</div><!--row--->
</div><!--cont-->
</section>
<section>
</section><!--booking-->
<section>
</section><!--About-->
<section>
</section><!--Insitute-->
<section>
</section><!--makai-->
<section>
</section><!--Contact-->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
