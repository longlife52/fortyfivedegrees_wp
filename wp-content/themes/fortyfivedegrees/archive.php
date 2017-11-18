<?php get_header(); ?>

  <!-- BILLBOARD -->
  <div class="billboard_black_wrapper">
      <div class="billboard_black billboard">
          <div class="blog_title">
          <h1>Blog</h1>
          <h2>archives</h2>
      </div>
      </div> <!--closer for .billboard_black -->
  </div> <!--closer for .billboard_black_wrapper -->

<!-- BLOG ARTICLE LIST -->
  <?php if (have_posts()) : ?>
    <!-- content - the div below sets up the grid for the blog items-->
  <div class="blog_list">

    <!-- put this snippet below inside the grid or else it will repeat the grid; we just want it to repeat the blog post item -->
      <?php while (have_posts()) :
            the_post() ; ?>

      <div class="blog_list_item"> <!-- open blog list item -->
          <div class="blog_list_img">
              <?php the_post_thumbnail(); ?>
          </div>

          <div class="blog_list_text">
              <h2><?php the_title(); ?></h2>
              <p class="date"><?php echo get_the_date(); ?></p>
              <p> <?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>">
                  <div class="blog_list_button">
                        <button class="btn_red">Read More</button>
                  </div>
              </a>
          </div>
      </div> <!-- close blog_list_item -->

      <?php endwhile; ?>
  </div> <!-- close for .blog_list -->

  <!-- this is for numeric pagination; placed outside the while loop, but inside the conditional  source: http://www.wpbeginner.com/wp-themes/how-to-add-numeric-pagination-in-your-wordpress-theme/ -->

  <?php wpbeginner_numeric_posts_nav(); ?>

  <?php else: ?>
    <em>No Posts Found</em>
  <?php endif; ?>

<?php get_footer(); ?>
