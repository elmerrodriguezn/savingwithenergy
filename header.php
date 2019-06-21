<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="main-header" id="main-header">
    <div class="container container-header">
        <!-- Just an image -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom" id="nav">
            <a class="navbar-brand" href="<?php echo site_url('/'); ?>">
                <img src="<?php echo get_theme_file_uri('images/logo.jpg'); ?>" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-nav-custom">
					<li class="nav-item <?php echo get_permalink() === site_url('/') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo site_url('/')?>">Home</a>
                    </li>
                    <li class="nav-item <?php echo get_permalink() === site_url('/contact/') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo site_url('/contact')?>">Contact</a>
                    </li>
                </ul>
                <?php include('parts/search-form.php') ?>
            </div>
        </nav>
    </div>

    <ul class="nav justify-content-center nav-categories" id="nav-cat">
        <li class="nav-item post-category"><a href="<?php echo site_url('/'); ?>"></a></li>
            <?php $categories =  get_categories();
            foreach ($categories as $category) : ?>
            <li class="nav-item post-category">
                <a class="nav-link" href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->cat_name ?></a>
            </li>
        <?php endforeach; wp_reset_query()?>
    </ul>
</header>
