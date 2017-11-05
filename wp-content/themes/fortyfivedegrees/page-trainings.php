<?php
/*
Template Name: Trainings
*/
get_header(); ?>

<!-- BILLBOARD -->
<div class="billboard_black_wrapper">
    <div class="billboard_black billboard">
        <h1><?php the_field('billboard_heading'); ?></h1>
            <div class="p_space">
                <p><?php the_field('billboard_text'); ?></p>
            </div>

        <div class="center-text button-box">
            <a href="https://youtu.be/zSt7k_q_qRU" target="blank" class="strip"><p class="ghost_button ghost_btn_teal"><?php the_field('billboard_button_label'); ?></p></a>
        </div>
    </div> <!--closer for .billboard_black -->
</div> <!-- close .billboard_black_wrapper-->

<!-- TRAINING CARDS -->
<?php $query = new WP_Query( array (
    'posts_per_page' => '3',
    'post_type' => 'workshop'
  ));
  if ($query->have_posts()) : ?>

<div class="card-three-grid-wrapper trainings_pad">
<?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="card-three">
            <div class="card-three__image">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/yarn.jpg" alt="" title="">
            </div>
            <div class="card-three__content">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
            <a href="workshop.html">
                <div class="card-three__read-more">
                    <button class="btn_red">Register Now &gt&gt</button>
                </div>
            </a>
        </div>
<?php endwhile; ?>
<!--
        <div class="card-three">
            <div class="card-three__image">
                <img src="assets/dist/img/bee.jpg" alt="" title="">
            </div>
            <div class="card-three__content">
                <h3>End Procrastination</h3>
                <p>Always putting things off? Learn 3 immediate chnages to help you see yourself from a new perspective and inspire you to get more done.</p>
            </div>
            <a href="workshop.html">
                <div class="card-three__read-more">
                    <button class="btn_red">Register Now &gt&gt</button>
                </div>
            </a>
        </div>

        <div class="card-three">
            <div class="card-three__image">
                <img src="assets/dist/img/cat.jpg" alt="" title="">
            </div>
            <div class="card-three__content">
                <h3>Out of a Rut</h3>
                <p>Get unstuck as you learn strategies to move you forward with confidence that you are headed in the right direction.</p>
            </div>
            <a href="workshop.html">
                <div class="card-three__read-more">
                    <button class="btn_red">Register Now &gt&gt</button>
                </div>
            </a>
        </div>

-->
</div> <!-- close of card-three-grid-wrapper -->
<?php endif; ?>

<?php get_footer(); ?>
