<div class="card card-post">
    <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
    <div class="card-body card-post-body">
        <strong class="post-category"><?php echo get_the_category_list(','); ?></strong>
        <h3 class="card-post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p class="card-text mb-auto"><?php echo the_excerpt(); ?></p>
        <p class="card-meta"><?php the_time('F j, Y'); ?></p>
    </div>
</div>