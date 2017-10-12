<?php
/*
Template Name: About
*/
get_header(); ?>

<div class="billboard_white billboard">
    <h1>About Us</h1>
        <div class="p_space">
            <p>We work closely with you, and provide the tools needed to realize your full potential. We help you discover clarity in your personal and professional life.</p>
        </div>

    <div class="center-text button-box">
        <a href="#team" data-scroll><p class="ghost_button ghost_btn_teal smoothScroll">Meet Our Team</p></a>
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
    <h2 class="team_title">Our Team</h2>
    <div class="team_card">
        <div class="team_image">
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/diane.jpg" alt="Diane Overgard" title="Diane Overgard">
            <h2>Diane Overgard</h2>
            <h3>Certified Executive Life Coach </h3>
        </div>

        <div class="team_bio">
            <p>Diane Overgard is a certified Executive Life Coach, sought after speaker, and published author. She is the Founder of 45 Degrees Coaching, providing individual and business team coaching to local, national, and international clients since 2004. She knows how adults learn and quickly establishes an energizing environment of trust and respect, with enough light-heartedness to encourage clients to open up, have fun, and try new behaviors.</p>

            <p>Diane knows what motivates people to make decisions and change. She will empower you to add more energy and satisfaction both at work and home. </p>
        </div>
    </div> <!--closes .team_card -->

    <div class="team_card">
        <div class="team_image">
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/fred.jpg" alt="Fred Willman" title="Fred Willman">
            <h2>Fred Willman</h2>
            <h3>Certified Executive Life Coach </h3>
        </div>

        <div class="team_bio">
            <p>With over 20 years experience in leadership positions for a Fortune 250 organization, Fred Willman knows how to go from good to great. Fred provided leadership for the Key Account Salesperson Program and is highly involved with new manager immersion training, client relationship strategy, and general manager development. His robust experience training high-level exectuives within a large organization makes him aware and qualified to coahc with corporate leaders.</p>

            <p>Fred's experience and sharpened focus gives clients confidence. As a trained coach, he will not become an obstacle to exploration. </p>
        </div>
    </div> <!--closes .team_card -->
</div> <!--close .team_wrapper -->


<?php get_footer(); ?>
