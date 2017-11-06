<?php
/*
Template Name: Contact
*/
get_header(); ?>

<!-- SELL CONTENT -->
<div class="flex_wrapper">
    <!-- IMAGE -->
    <div class="flex_content">
        <?php $image = get_field('image');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="content_img" />
        <?php endif; ?>
    </div>

<!-- CONTENT -->

    <div class="flex_content billboard_teal">
        <div class="contact_call">
            <h2><?php the_field('heading'); ?></h2>
            <p><?php the_field('sub_heading'); ?></p>
        </div>
    </div>
</div> <!-- closes .flex_wrapper -->


<?php get_footer(); ?>
