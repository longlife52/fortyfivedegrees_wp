<?php get_header(); ?>

    <!-- BILLBOARD -->
    <div class="billboard_black_wrapper">
        <div class="billboard_black billboard">
            <div class="blog_title">
            <h1>Blog</h1>
            <h2>tips for you to go farther</h2>
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
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/clarity_large.jpg" alt="" title="">
            </div>

            <div class="blog_list_text">
                <h2>Clarity</h2>
                <p class="date">August 25, 2017</p>
                <p>Make sense out of complicated matters by understanding the facts and laying out the puzzle peices. Envision a future and think more clearly. As you determine your options, you will discover... </p>
                <a href="post.html">
                    <div class="blog_list_button">
                      <a href="#">
                        <button class="btn_red">Read More &gt&gt</button>
                      </a>
                    </div>
                </a>
            </div>
        </div> <!-- close blog_list_item -->

        <?php endwhile; ?>
    </div> <!-- close for .blog_list -->

    <?php else; ?>
      <em>No Posts Found</em>
    <?php endif; ?>

<!-- BILLBOARD CALL TO ACTION  -->
    <div class="billboard_teal">
        <h2>WANT MORE?</h2>
        <div class="center-text button-box">
            <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_white">Blog Archive</p></a>
        </div>

<?php get_footer(); ?>
