<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- SELL CONTENT -->
<div class="flex_wrapper">
    <!-- IMAGE -->
    <div class="flex_content">
      <div class="content_img">
        <?php the_field('image'); ?>
      </div>
      <!--
        <img class="content_img" <?php the_field('image'); ?>>
      -->
    </div>

<!-- CONTENT -->

    <div class="flex_content billboard_teal">
        <div class="contact_call">
            <h2><?php the_field('heading'); ?></h2>
            <p><?php the_field('sub_heading'); ?></p>
        </div>
    </div>
</div> <!-- closes .flex_wrapper -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
