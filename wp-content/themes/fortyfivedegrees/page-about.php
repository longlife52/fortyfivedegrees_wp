<?php
/*
Template Name: About
*/
get_header(); ?>

<div class="billboard_white billboard">
    <h1><?php the_field('billboard_heading'); ?></h1>
        <div class="p_space">
            <p><?php the_field('billboard_text'); ?></p>
        </div>

    <div class="center-text button-box">
        <a href="#team" data-scroll><p class="ghost_button ghost_btn_teal smoothScroll"><?php the_field('billboard_button_label'); ?></p></a>
    </div>
</div> <!--closer for billboard -->

<!-- TESTIMONIAL SLIDER -->
<?php $query = new WP_Query( array (
    'posts_per_page' => '-1',//-1 shows all posts
    'post_type' => 'testimonial'
  ));
  if ($query->have_posts()) : ?>

  <div class="carousel_wrapper"> <!-- black background for carousel -->

      <!-- quote mark -->
      <div class="carousel_quote_mark">
          <img class="image_full" src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote.png" alt="quote mark" title="quote mark">
      </div>

      <!-- owl carousel for TESTIMONIALS -->
      <div class="owl-carousel owl-theme owl-loaded carousel_space">

      <?php while ($query->have_posts()) : $query->the_post(); ?>
          <!--testimonial one -->
        <div class="testimonial_content">
            <p class="testimonial_words"><?php the_field('testimonial_words'); ?>
            </p>

            <h3 class="testimonial_name"><?php the_field('testimonial_name'); ?></h3>

            <h3 class="testimonial_title"><?php the_field('testimonial_title'); ?></h3>
        </div> <!-- close testimonial content 1 -->
        <?php endwhile; ?>
      </div> <!-- close owl carousel -->
    </div> <!--  close black background for carousel-->
    <?php endif; ?>

<?php wp_reset_query(); ?>
<!-- without the above loop reset, my loop below disappears -->
<!-- OUR TEAM -->

<div id="team" class="team_wrapper">
    <h2 class="team_title"><?php the_field ('team_heading'); ?></h2>

    <?php $teamBios = get_field('team_bios');
    if ($teamBios) {
    foreach ($teamBios as $team_bios) { ?>
    <div class="team_card">
        <div class="team_image">

          <?php $image = $team_bios['image'];
          if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="content_img" />
          <?php endif; ?>

          <!--
            <img src="">
          -->
            <h2><?= $team_bios['name']; ?></h2>
            <h3><?= $team_bios['title']; ?></h3>
        </div>

        <div class="team_bio">
          <?= $team_bios['bio']; ?>
        </div>
    </div> <!--closes .team_card -->
    <?php } } ?>
</div> <!--close .team_wrapper -->


<?php get_footer(); ?>
