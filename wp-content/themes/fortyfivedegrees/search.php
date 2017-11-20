<?php get_header(); ?>


  <!-- section -->
    <section >

<div class="search_results_page" id="search-results-page">
      <div>
        <h1 class="center_search_results_title"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
      <div>

      <div>
        <?php get_template_part('partials/loop'); ?>
      </div>

      <div>
        <?php get_template_part('partials/pagination'); ?>
      </div>
</div>

    </section>
    <!-- /section -->




<?php get_footer(); ?>
