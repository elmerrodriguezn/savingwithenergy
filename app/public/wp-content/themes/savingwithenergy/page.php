<?php get_header();

    while(have_posts()) {
    the_post(); ?>
    <div class="container container-posts">
        <h1 class="title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
<?php }
get_footer(); ?>
