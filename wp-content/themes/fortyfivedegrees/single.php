<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- BILLBOARD -->
<div class="billboard_black_wrapper">
    <div class="billboard_black billboard">
        <div class="blog_title">
            <h1><?php the_title(); ?></h1>
            <h2>problem solving your work and personal life </h2>
        </div>
    </div> <!--closer for .billboard_black -->
</div> <!-- close for .billboard_black_wrapper-->

<!-- BLOG POST -->
<div class="blog_content">
    <div>
        <p>Don't leave your future to chance. Here are 3 habits that will make a positive difference in your attitude, actions, and results.</p>
    </div>

    <div class="blog_image">
        <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/clear.png" alt="Increase clarity with focus." title="Increase clarity with focus.">
    </div>

    <div class="blog_copy">
      <?php the_content() ?>
    </div> <!-- close of body copy -->
</div> <!--close of blog content-->

<!-- fitVids EXPERIMENT for when a client might just dump a video into the site anywhere-->
<h3 class="center-text">Take a Moment and Watch</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/zSt7k_q_qRU" frameborder="0" allowfullscreen></iframe>

<!-- LINKS TO OTHER BLOG ARTICLES -->
<div class="link_area link_white">
    <h3>Learn More Ways to Get Clear </h3>

    <div class="links">
        <a href=""><p>7 Problem Solving Insights</p></a>

        <a href=""><p>How to Change Focus</p></a>

        <a href=""><p>A Simple Guide for Finding the Path </p></a>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
