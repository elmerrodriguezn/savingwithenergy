<?php get_header(); ?>
    <div class="container container-posts">
        <?php
            if (have_posts()) : ?>
                <h3 class="title">Articles Related To: <?php echo get_search_query(); ?></h3>
                <div class="card-columns">
                    <?php while (have_posts()) {
                        the_post();
                        if (empty(get_the_post_thumbnail_url())) {
                            include('templates/card.php');
                        } else {
                            include('templates/card-img.php');
                        }
                    } ?>
                </div>
        <? else : ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-post">
                    <div class="card-body"> <h3 class="title">Sorry, there are not results to show</h3>
                        <div class="content-404">
                            <i class="far fa-frown fa-10x"></i>
                            <h3 class="text-404">Why don't you try searching again?</h3>
                            <?php include('parts/search-form.php') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php include_once 'parts/pagination.php'?>
    </div>
<?php get_footer(); ?>