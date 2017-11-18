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

<!-- OUR TEAM -->

<div id="team" class="team_wrapper">
    <h2 class="team_title"><?php the_field ('team_heading'); ?></h2>

    <?php $teamBios = get_field('team_bios');
    if ($teamBios) {
    foreach ($teamBios as $team_bios) { ?>
    <div class="team_card">
        <div class="team_image">

          <?php $image = get_field('');
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
