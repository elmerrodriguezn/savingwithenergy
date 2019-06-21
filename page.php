<?php get_header();

    while(have_posts()) {
    the_post(); ?>
    <div class="container container-posts">
      <div class="card card-post">
          <div class="card-body">
            <h1 class="title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
<?php }
get_footer(); ?>
