<?php get_header(); ?>
    <div class="container container-posts">
        <h3 class="title"><?php the_archive_title(); ?></h3>
        <div class="card-columns">
            <?php
            while(have_posts()) {
                the_post();
                if (empty(get_the_post_thumbnail_url())) {
                    include('templates/card.php');
                } else {
                    include('templates/card-img.php');
                }
            } ?>
        </div>
        <?php include_once 'parts/pagination.php'?>
    </div>
<?php get_footer(); ?>