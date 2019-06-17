<?php get_header(); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" id="carousel-inner-id">
        <?php $pagesQuery = new WP_Query(array(
                'post_type' => 'page',
                'posts_per_page' => -1,
                'post__not_in' => [62, 60, 28]
        ));
        while ($pagesQuery->have_posts()) :
            $pagesQuery->the_post(); ?>
            <div class="carousel-item">
                <div class="carousel-img-container" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(<?php the_post_thumbnail_url(); ?>)">
                    <h1 class="carousel-title"><?php the_title(); ?></h1>
                    <a href="<?php echo the_permalink(); ?>" class="btn btn-custom-primary">Know More</a>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata();?>
        </div>
        <a class="carousel-control-prev carousel-control-prev-custom" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="fas fa-chevron-left fa-3x"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-control-next-custom" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="fas fa-chevron-right fa-3x"></i>
            <span class="sr-only">Next</span>
        </a>
</div>
<section class="section-latests-posts" style="background-image: url(<?php echo get_theme_file_uri('images/body-bg.jpg') ?>)">
    <div class="container post-container">
        <h3 class="title">Latest articles</h3>
        <div class="card-columns">
            <?php
            $homepagePosts = new WP_Query(array(
                'posts_per_page' => 6
            ));
            while ($homepagePosts->have_posts()) {
                $homepagePosts->the_post();
                if (empty(get_the_post_thumbnail_url())) {
                    include('templates/card.php');
                } else {
                    include('templates/card-img.php');
                }
            } wp_reset_postdata(); ?>
        </div>

        <a href="<?php echo site_url('/blog') ?>" class="btn btn-block btn-custom-primary">All Articles</a>
    </div>
</section>


<?php get_footer(); ?>