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
              <h2><?php the_field ('pre_heading'); ?></h2>
              <h1><?php the_field ('billboard_heading'); ?></h1>
          </div>
              <div class="p_space">
                  <p><?php the_field ('billboard_text'); ?></p>
              </div>

          <div class="center-text button-box">
              <a href="<?php the_field ('billboard_button_link'); ?>" target="blank" class="strip"><p class="ghost_button ghost_btn_teal"><?php the_field ('billboard_button_label'); ?></p></a>
          </div>
      </div> <!--closer for .billboard_black -->
  </div> <!-- close for .billboard_black_wrpper -->

<!-- HERO -->
<?php $image = get_field('hero_image');
if( !empty($image) ): ?>
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="image_full" />
<?php endif; ?>

<!-- CALL TO ACTION -->
  <div class="hero_call_to_action">
      <h2><?php the_field ('hero_heading'); ?></h2>

      <div class="center-text button-box">
          <a href="mailto:<?php the_field ('hero_button_link'); ?>"><p class="ghost_button ghost_btn_teal"><?php the_field ('hero_button_label'); ?></p></a>
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

              <a href="<?= $two_column['button_link']; ?>" class="card-two__learn-more">
                  <button class="btn_red"><?= $two_column['button_label']; ?></button>
              </a>
          </div>
        <?php } ?>

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
            <p class="testimonial_words"><?php the_field('testimonial_words'); ?>
            </p>

            <h3 class="testimonial_name"><?php the_field('testimonial_name'); ?></h3>

            <h3 class="testimonial_title"><?php the_field('testimonial_title'); ?></h3>
        </div> <!-- close testimonial content 1 -->

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
