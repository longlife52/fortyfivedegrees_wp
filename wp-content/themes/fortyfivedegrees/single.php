<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- BILLBOARD -->
<div class="billboard_black_wrapper">
    <div class="billboard_black billboard">
        <div class="blog_title">
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field('subtitle'); ?></h2>
        </div>
    </div> <!--closer for .billboard_black -->
</div> <!-- close for .billboard_black_wrapper-->

<!-- BLOG POST     /assets/dist/img/clear.png" alt="Increase clarity with focus." title="Increase clarity with focus." -->
<div class="blog_content">
  <!--
    <div>
        <p>Don't leave your future to chance. Here are 3 habits that will make a positive difference in your attitude, actions, and results.</p>
    </div>
-->
    <img src="<?php bloginfo('template_url'); ?>">
    <!--
    <div class="blog_image">
    </div>
  -->

    <div class="blog_copy">
      <?php the_content() ?>
    </div> <!-- close of body copy -->
</div> <!--close of blog content-->

<!-- LINKS TO OTHER BLOG ARTICLES -->
<div class="link_area link_white">
    <h3>Learn More Ways to Get Clear </h3>

    <div class="links">
      <!-- code from https://wordpress.stackexchange.com/questions/41272/how-to-show-related-posts-by-category -->
      <?php

      $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
      if( $related ) foreach( $related as $post ) {
      setup_postdata($post); ?>
       <ul>
              <li>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              </li>
          </ul>
      <?php }
      wp_reset_postdata(); ?>

    </div>
</div>

<?php endwhile; endif; ?>

<?php comments_template(); ?>

<?php get_footer(); ?>
