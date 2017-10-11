<?php
/*
Template Name: Coaching
*/
get_header(); ?>

<div class="billboard_white billboard">
    <h1>Coaching</h1>
        <div class="p_space">
            <p>Visualize goals and establish results-driven plans. As a strong soundboard for our clients, we illuminate strengths while helping you establish clear focus.</p>
        </div>

    <div class="center-text button-box">
        <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_teal">start now</p></a>
    </div>
</div> <!--closer for billboard -->

<!-- SELL CONTENT -->
<div class="flex_wrapper">
    <!-- IMAGE -->
    <div class="flex_content">
        <img class="content_img" src="<?php bloginfo('template_url'); ?>/assets/dist/img/coaching.jpg" alt="45 Degrees individual coaching turns the light on." title="45 Degress coaching turns the light on." >
    </div>

<!-- CONTENT -->
    <div class="flex_content content_text_coaching">
        <div> <!-- this div is so all the content displays center center -->
            <h2 class="center-text">Discover You</h2>
            <p>Our unique "90 Days of Coaching" will help you</p>

            <ul>
                <li>Increase self awareness</li>

                <li>Elevate competence in your skills</li>

                <li>Recognize your abilities</li>

                <li>Spot your challenges</li>

                <li>Develop concrete actions</li>

                <li>Maintain accountability for your actions.</li>
            </ul>
        </div> <!-- closes center center content-->
    </div> <!-- closes .flex_content .content_text_coaching -->
</div> <!-- closes .flex_wrapper -->

<!-- BILLBOARD CALL TO ACTION  -->
<div class="billboard_teal">
    <h2>Ready?</h2>
    <div class="center-text button-box">
        <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_white">Let's Talk</p></a>
    </div>
</div>

<?php get_footer(); ?>
