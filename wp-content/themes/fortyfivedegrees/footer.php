</main>
    <!-- FOOTER -->
        <footer class="footer">
            <h2>CONTACT US</h2>

            <p>Let's work together!</p>
            <p>We'll help you go farther.</p>

            <div class="center-text button-box">
                <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_teal">CONTACT</p></a>
            </div>

            <h4>SIGN UP FOR OUR NEWSLETTER</h4>

            <div class="form-area">
              <?= do_shortcode('[contact-form-7 id="96" title="Contact form 1" html_class="flex-form" html_id="newsletter"]'); ?>
              <!--
                <form class="flex-form" id="newsletter" method="post" action="mailto:garrisonridge@gmail.com">
                    <label for="name"></label>
                    <input type="text"  name="name" placeholder="FirstName">

                    <label for="email"></label>
                    <input type="text"  name="email" placeholder="Email Address">

                    <input type="submit" value="SIGN UP" class="submit_hover">
                </form>
              -->
            </div> <!-- close form-area -->

            <?php get_template_part ('partials/social_media'); ?>

            <p class="copyright">&copy <?= date('Y'); ?> 45 Degrees</p>

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

		<!-- TODO: ADD GOOGLE ANALYTICS -->

	</body>
</html>
