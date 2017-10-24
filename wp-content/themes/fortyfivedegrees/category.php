<?php get_header(); ?>


<!-- BILLBOARD -->
<div class="billboard_black_wrapper">
    <div class="billboard_black billboard">
        <div class="blog_title">
        <h1>Blog</h1>
        <h2><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h2>
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
                      <button class="btn_red">Read More &gt&gt</button>
                </div>
            </a>
        </div>
    </div> <!-- close blog_list_item -->

    <?php endwhile; ?>
</div> <!-- close for .blog_list -->

<?php else: ?>
  <em>No Posts Found</em>
<?php endif; ?>

<!-- BILLBOARD CALL TO ACTION  -->
<div class="billboard_teal">
    <h2>WANT MORE?</h2>
    <div class="center-text button-box">
        <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_white">Blog Archive</p></a>
    </div>

<?php get_footer(); ?>
