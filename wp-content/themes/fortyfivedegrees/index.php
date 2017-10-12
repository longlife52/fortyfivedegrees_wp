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
    <div class="blog_list">
        <div class="blog_list_item">
            <div class="blog_list_img">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/clarity_large.jpg" alt="" title="">
            </div>

            <div class="blog_list_text">
                <h2>Clarity</h2>
                <p class="date">August 25, 2017</p>
                <p>Make sense out of complicated matters by understanding the facts and laying out the puzzle peices. Envision a future and think more clearly. As you determine your options, you will discover... </p>
                <a href="post.html">
                    <div class="blog_list_button">
                        <button class="btn_red">Read More &gt&gt</button>
                    </div>
                </a>
            </div>
        </div> <!-- close blog_list_item -->

        <div class="blog_list_item">
            <div class="blog_list_img">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/horse_large.jpg" alt="" title="">
            </div>

            <div class="blog_list_text">
                <h2>Practical Action</h2>
                <p class="date">September 1, 2017</p>
                <p>Roll up your sleeves and get to work with an action plan post each session. We outline concrete steps to achieve changes. Your life will be forever changed and the world will love you if you just... </p>
                <a href="post.html">
                    <div class="blog_list_button">
                        <button class="btn_red">Read More &gt&gt</button>
                    </div>
                </a>
            </div>
        </div> <!-- close blog_list_item -->

        <div class="blog_list_item">
            <div class="blog_list_img">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/growth_large.jpg" alt="" title="">
            </div>

            <div class="blog_list_text">
                <h2>Growth</h2>
                <p class="date">September 15, 2017</p>
                <p>Ensure you path forward aligns with personal fullfilment and wholeness. Learn to set your personal bar higher as you discover the potential that will propel you forward as you leap into... </p>
                <a href="post.html">
                    <div class="blog_list_button">
                        <button class="btn_red">Read More &gt&gt</button>
                    </div>
                </a>
            </div>
        </div> <!-- close blog_list_item -->
    </div> <!-- close for .blog_list -->

<!-- BILLBOARD CALL TO ACTION  -->
    <div class="billboard_teal">
        <h2>WANT MORE?</h2>
        <div class="center-text button-box">
            <a href="mailto:garrisonridge@gmail.com"><p class="ghost_button ghost_btn_white">Blog Archive</p></a>
        </div>
	</main>

<?php get_footer(); ?>
