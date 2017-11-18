<?php
/*
Template Name: Coaching
*/
get_header(); ?>

<div class="billboard_white billboard">
    <h1><?php the_field('billboard_heading'); ?></h1>
        <div class="p_space">
            <p><?php the_field('billboard_text'); ?></p>
        </div>

    <div class="center-text button-box">
        <a href="mailto:<?php the_field('billboard_button_link'); ?>"><p class="ghost_button ghost_btn_teal"><?php the_field('billboard_button_label'); ?></p></a>
    </div>
</div> <!--closer for billboard -->

<!-- SELL CONTENT -->
<div class="flex_wrapper">
    <!-- IMAGE -->
    <div class="flex_content">
      <?php $image = get_field('feature_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="content_img" />
      <?php endif; ?>
    </div>

<!-- CONTENT -->
    <div class="flex_content content_text_coaching">
        <div> <!-- this div is so all the content displays center center -->
            <h2 class="center-text"><?php the_field('feature_heading'); ?></h2>

            <?php the_field('feature_content'); ?>

        </div> <!-- closes center center content-->
    </div> <!-- closes .flex_content .content_text_coaching -->
</div> <!-- closes .flex_wrapper -->

<!-- BILLBOARD CALL TO ACTION  -->
<div class="billboard_teal">
    <h2><?php the_field('action_heading'); ?></h2>
    <div class="center-text button-box">
        <a href="mailto:<?php the_field('action_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('action_button_label'); ?></p></a>
    </div>
</div>


<?php get_footer(); ?>
