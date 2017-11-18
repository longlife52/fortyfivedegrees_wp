<?php get_header(); ?>

<!-- HERO -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div>
    <div>
      <?php $image = get_field('sell_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="image_full" />
      <?php endif; ?>
    </div>

    <div>
      <h2><?php the_field('sell_title'); ?></h2>
    </div>

    <div class="button-box btn_pullup">
        <a href="<?php the_field('sell_button_link'); ?>" target="blank"><p class="ghost_button ghost_btn_white"><?php the_field('sell_button_label'); ?></p></a>
    </div>
</div>

<!-- WORKSHOP DETAILS -->
<div class="workshop">
    <h2 class="center-text">
      <?php the_field('workshop_title'); ?>
    </h2>
    <h3 class="center-text"><?php the_field('workshop_subtitle'); ?></h3>

    <div class="workshop_wrapper">
        <div class="flex_content workshop_description">

          <?php the_field('workshop_description'); ?>

        </div>

        <div class="flex_content workshop_details">
            <p>DATE - <?php the_field('workshop_date'); ?></p>
            <p>TIME - <?php the_field('workshop_time'); ?></p>
            <p>PLACE - <?php the_field('workshop_location'); ?></p>
            <p>COST - <?php the_field('workshop_cost'); ?></p>
        </div>
    </div> <!-- closes .flex-wrapper-->

    <div class="center_center">
        <a href="<?php the_field('sell_button_link'); ?>" target="blank">
            <div>
                <button class="workshop_button btn_red"><?php the_field('sell_button_label'); ?></button>
            </div>
        </a>
    </div>
</div> <!--  closes .workshop -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
