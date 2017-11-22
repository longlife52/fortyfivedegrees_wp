</main>
    <!-- FOOTER -->
        <footer class="footer">
            <h2>CONTACT US</h2>

            <p>Let's work together!</p>
            <p>We'll help you go farther.</p>

            <div class="center-text button-box">
                <a href="mailto:<?php the_field('footer_contact_link'); ?>"><p class="ghost_button ghost_btn_teal">CONTACT</p></a>
            </div>

            <h4>SIGN UP FOR OUR NEWSLETTER</h4>

            <div class="form-area">
              <?= do_shortcode('[contact-form-7 id="96" title="Contact form 1" html_class="flex-form" html_id="newsletter"]'); ?>
            </div> <!-- close form-area -->

            <?php get_template_part ('partials/social_media'); ?>

            <p class="copyright"> Copyright <?= date('Y'); ?> </p>

            <div class="legal">
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms + Conditions</a></li>
                <li><a href="#">Disclaimers</a></li>
              </ul>
            </div>

        </footer>

    </div> <!-- closing div for "container"-->

    <?php wp_footer(); ?>

		<!-- GOOGLE ANALYTICS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110078269-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110078269-1');
    </script>

	</body>
</html>
