<?php
/*
Template Name: Home
*/
get_header(); ?>

  <!-- BILLBOARD -->
  <div class="billboard_black_wrapper">

      <div class="billboard_black billboard">
          <div class="logo_homepage_mobile">
              <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/logo_small.png" alt="45 Degrees logo" title="45 Degrees logo">
          </div>
          <div class="titles_homepage_mobile">
              <h2>Executive</h2>
              <h1>Coaching</h1>
          </div>
              <div class="p_space">
                  <p>45 degrees is the optimal angle to launch an object</p>
                  <p>the greatest distance with the least resistance.</p>
              </div>

          <div class="center-text button-box">
              <a href="https://youtu.be/zSt7k_q_qRU" target="blank" class="strip"><p class="ghost_button ghost_btn_teal">play video &gt&gt</p></a>
          </div>
      </div> <!--closer for .billboard_black -->
  </div> <!-- close for .billboard_black_wrpper -->

<!-- HERO -->

  <img class="image_full" src="<?php bloginfo('template_url'); ?>/assets/dist/img/cape.jpg" alt="Woman in red cape" title="Woman in red cape.">

<!-- CALL TO ACTION -->
  <div class="hero_call_to_action">
      <h2>Ready to go farther?</h2>

      <div class="center-text button-box">
          <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_teal">contact us</p></a>
      </div>
  </div>

<!-- INDIVIDUAL COACHING + TRAINING CARDS -->
  <div class="services-style">
      <h2>Get from where you are</h2>
      <h2>to where you want to be</h2>
      <div class="card-two-wrapper services-pad">
          <div class="card-two">
              <h4>Coaching</h4>
              <div class="card-two-head">
                  <p>Our unique "90 Days of Coaching" delivers optimal results. Learn to employ proven tools and strategies and establish clear focus and better decisions.</p>
              </div>
              <a href="coaching.html" class="card-two__learn-more">
                  <button class="btn_red">Learn More &gt&gt</button>
              </a>
          </div>

          <div class="card-two">
              <h4>Trainings</h4>
              <div class="card-two-head">
                  <p>Become inspired in a day worshop or through a series of seminars. Energize your team, bolster productivity, and enhance loyalty while cultivating a proactive environment.</p>
              </div>
              <a href="trainings.html" class="card-two__learn-more">
                  <button class="btn_red">Learn More &gt&gt</button>
              </a>
          </div>
      </div> <!--close of card-two-wrapper -->
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
  <div class="blog_preview">
      <h2>Reveal Your Best Self</h2>
      <div class="card-three-grid-wrapper">
              <div class="card-three">
                  <div class="card-three__image">
                      <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/clarity.jpg" alt="" title="">
                  </div>
                  <div class="card-three__content">
                      <h3>Clarity</h3>
                      <p>Make sense out of complicated matters by understanding the facts and laying out the puzzle pieces. Envision a future and think more clearly.</p>
                  </div>
                  <a href="post.html">
                      <div class="card-three__read-more">
                          <button class="btn_red">Read More &gt&gt</button>
                      </div>
                  </a>
              </div>

              <div class="card-three">
                  <div class="card-three__image">
                      <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/horse.jpg" alt="" title="">
                  </div>
                  <div class="card-three__content">
                      <h3>Practical Action</h3>
                      <p>Roll up your sleeves and get to work with an action plan post each session. We outline concrete steps to achieve changes.</p>
                  </div>
                  <a href="post.html">
                      <div class="card-three__read-more">
                          <button class="btn_red">Read More &gt&gt</button>
                      </div>
                  </a>
              </div>

              <div class="card-three">
                  <div class="card-three__image">
                      <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/growth.jpg" alt="" title="">
                  </div>
                  <div class="card-three__content">
                      <h3>Growth</h3>
                      <p>Ensure your path forward aligns with personal fulfillment and wholeness. Learn to set your personal bar higher.</p>
                  </div>
                  <a href="post.html">
                      <div class="card-three__read-more">
                          <button class="btn_red">Read More &gt&gt</button>
                      </div>
                  </a>
              </div>
      </div> <!-- close of card-three-grid-wrapper -->
  </div> <!-- closes blog_preview -->


<?php get_footer(); ?>
