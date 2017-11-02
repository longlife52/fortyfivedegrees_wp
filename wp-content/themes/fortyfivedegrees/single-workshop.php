<?php get_header(); ?>

<!-- HERO -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div>
    <div>
        <img class="image_full" src="<?php bloginfo('template_url'); ?>/assets/dist/img/cat_large_text.jpg" alt="" title="">
    </div>

    <div class="button-box btn_pullup">
        <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_white">Register Now</p></a>
    </div>
</div>

<!-- WORKSHOP DETAILS -->
<div class="workshop">
    <h2 class="center-text">
      <?php the_title(); ?>
    </h2>
    <h3 class="center-text">Learn 7 Highly Effective Techniques</h3>

    <div class="workshop_wrapper">
        <div class="flex_content workshop_description">

          <?php the_content(); ?>

        </div>

        <div class="flex_content workshop_details">
            <p>DATE - Saturday, 10/21/17</p>
            <p>TIME - 10 a.m. - Noon </p>
            <p>PLACE - 1601 Ocean Dr. PVB 32250</p>
            <p>COST - $40</p>
        </div>
    </div> <!-- closes .flex-wrapper-->

    <div class="center_center">
        <a href="workshop.html">
            <div>
                <button class="workshop_button btn_red">Register Now &gt&gt</button>
            </div>
        </a>
    </div>
</div> <!--  closes .workshop -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
