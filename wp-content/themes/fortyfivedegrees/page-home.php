<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- BILLBOARD -->
  <div class="billboard_black_wrapper">

      <div class="billboard_black billboard">
          <div class="logo_homepage_mobile">
              <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/logo_small.png" alt="45 Degrees logo" title="45 Degrees logo">
          </div>
          <div class="titles_homepage_mobile">
              <h2>Executive</h2>
              <h1><?php the_field ('billboard_heading'); ?></h1>
          </div>
              <div class="p_space">
                  <p><?php the_field ('billboard_text'); ?></p>
              </div>

          <div class="center-text button-box">
              <a href="https://youtu.be/zSt7k_q_qRU" target="blank" class="strip"><p class="ghost_button ghost_btn_teal"><?php the_field ('billboard_button_label'); ?></p></a>
          </div>
      </div> <!--closer for .billboard_black -->
  </div> <!-- close for .billboard_black_wrpper -->

<!-- HERO -->

  <img class="image_full" src="<?php bloginfo('template_url'); ?>/assets/dist/img/cape.jpg" alt="Woman in red cape" title="Woman in red cape.">

<!-- CALL TO ACTION -->
  <div class="hero_call_to_action">
      <h2><?php the_field ('hero_heading'); ?></h2>

      <div class="center-text button-box">
          <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_teal"><?php the_field ('hero_button_label'); ?></p></a>
      </div>
  </div>

  <?php endwhile; endif; ?>
<!-- INDIVIDUAL COACHING + TRAINING CARDS -->
  <div class="services-style">
      <h2><?php the_field ('two_column_heading'); ?></h2>

      <?php $twoColumn = get_field('two_column');
      if ($twoColumn) { ?>
      <div class="card-two-wrapper services-pad">
        <?php foreach ($twoColumn as $two_column) { ?>
          <div class="card-two">
              <h4><?= $two_column['heading']; ?></h4>
              <div class="card-two-head">
                  <p><?= $two_column['text']; ?></p>
              </div>
              <a href="<?php the_permalink($two_column['button_link']->ID); ?>" class="card-two__learn-more">
                  <button class="btn_red"><?= $two_column['button_label']; ?></button>
              </a>
          </div>
        <?php } ?>
<!--
          <div class="card-two">
              <h4>Trainings</h4>
              <div class="card-two-head">
                  <p>Become inspired in a day worshop or through a series of seminars. Energize your team, bolster productivity, and enhance loyalty while cultivating a proactive environment.</p>
              </div>
              <a href="/trainings/" class="card-two__learn-more">
                  <button class="btn_red">Learn More &gt&gt</button>
              </a>
          </div>
-->
      </div> <!--close of card-two-wrapper -->
    <?php } ?>
  </div> <!--close services-style -->



<!-- TESTIMONIAL SLIDER -->
  <div class="carousel_wrapper"> <!-- black background for carousel -->

      <!-- quote mark -->
                <div class="carousel_quote_mark">
                    <img class="image_full" src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote.png" alt="quote mark" title="quote mark">
                </div>
      <!-- owl carousel -->
      <div class="owl-carousel owl-theme owl-loaded carousel_space">
          <!--testimonial one -->
        <div class="testimonial_content">
          <p class="testimonial_words"> True mentorship is being passionate about the success of others. 45 Degrees is passionate.
          </p>

            <h3 class="testimonial_name">Rob S.</h3>
            <h3 class="testimonial_title"> Operations Manager</h3>
        </div> <!-- close testimonial content 1 -->

          <!-- testimonial 2 -->
        <div class="testimonial_content">
            <p class="testimonial_words"> I gained clarity and understanding for how I handle situations with people that I report to.
            </p>

            <h3 class="testimonial_name">Jill R.</h3>
            <h3 class="testimonial_title">Regional Sales Manager</h3>
        </div> <!-- close testimonial content 2 -->

        <!-- testimonial 3 -->
        <div class="testimonial_content">
            <p class="testimonial_words"> I have a different perspective that enabled me to leap forward in my career.
            </p>

            <h3 class="testimonial_name">Roger T.</h3>
            <h3 class="testimonial_title">National V.P.</h3>
        </div> <!-- close testimonial content 3 -->

        <!-- testimonial 4 -->
        <div class="testimonial_content">
            <p class="testimonial_words"> My personal relationships have deepened with better communication skills.
            </p>

            <h3 class="testimonial_name">Sue S.</h3>
            <h3 class="testimonial_title">Psychologist</h3>
        </div> <!-- close testimonial content 4 -->

        <!-- testimonial 5 -->
        <div class="testimonial_content">
            <p class="testimonial_words"> Thanks to 45 Degrees, I have sold more widgets and begun to franchise.
            </p>

            <h3 class="testimonial_name">Bill B.</h3>
            <h3 class="testimonial_title">Entrepreneur</h3>
        </div> <!-- close testimonial content 5 -->
      </div> <!-- close owl carousel -->
    </div> <!--  close black background for carousel-->

<!-- BLOG CARDS -->
<?php $query = new WP_Query( array (
    'posts_per_page' => '3',
  ));
  if ($query->have_posts()) : ?>

  <div class="blog_preview">
      <h2>Reveal Your Best Self</h2>

      <div class="card-three-grid-wrapper">
      <?php while ($query->have_posts()) : $query->the_post(); ?>
              <div class="card-three">
                  <div class="card-three__image">
                      <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="card-three__content">
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_excerpt(); ?></p>
                  </div>
                  <a href="<?php the_permalink(); ?>">
                      <div class="card-three__read-more">
                          <button class="btn_red">Read More &gt&gt</button>
                      </div>
                  </a>
              </div>
        <?php endwhile; ?>

      </div> <!-- close of card-three-grid-wrapper -->

  </div> <!-- closes blog_preview -->
  <?php endif; ?>
<?php get_footer(); ?>
