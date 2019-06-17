<?php get_header();?>
<div class="container container-single-post">
    <div class="row">
        <div class="col-md-8 col-12">
            <div class="card card-post">
                <div class="card-body">
                    <?php while(have_posts()) {
                        the_post(); ?>

                        <?php if(empty(get_the_post_thumbnail_url())) { ?>
                            <div class="box-title">
                                <h1><?php the_title(); ?></h1>
                                <p class="card-text mb-auto"><?php echo the_excerpt(); ?></p>
                            </div>
                        <?php } else {?>
                        <div class="box-title-img" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(<?php the_post_thumbnail_url(); ?>);">
                            <h1><?php the_title(); ?></h1>
                            <p class="card-text mb-auto black"><?php echo the_excerpt(); ?></p>
                        </div>
                        <?php } ?>

                        <?php the_content(); ?>
                        <div class="metabox">
                            <p>Posted by <img src=" <?php echo get_avatar_url(''); ?>" alt="..." class="rounded-circle" width="40"> <?php the_author_posts_link(); ?> on <?php the_time('F j Y'); ?> in <?php echo get_the_category_list(','); ?></p>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php
            $pagesQuery = new WP_Query(array(
                'posts_per_page' => 4,
                'category__in' => the_category_id(''),
                'post__not_in' => [get_the_ID()],
                'orderby' => 'rand'
            ));?>
            <?php if(empty($pagesQuery->have_posts())) : ?>

            <?php else: ?>
            <div class="card card-post">
                <div class="card-body">
                    <h3>Related Posts</h3>
                    <?php while ($pagesQuery->have_posts()) {
                        $pagesQuery->the_post();
                        if (empty(get_the_post_thumbnail_url())) {
                            include('templates/card-single.php');
                        } else {
                            include('templates/card-single-img.php');
                        }
                    } ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="card card-post">
                <div class="card-body">
                    <h3>Archives by Month:</h3>
                    <ul class="archives-list">
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>