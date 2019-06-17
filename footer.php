<footer class="footer-custom">
    <div class="row">
        <div class="col-12 col-md tex-center">
            <img class="footer-logo" src="<?php echo get_theme_file_uri('images/logo-simple.png'); ?>" alt="">
            <small class="footer-copy">&copy; <?php echo date('Y') ?> Saving With Energy</small>
        </div>
        <div class="col-6 col-md">
            <h5>Pages</h5>
            <ul class="footer-lists">
                <?php
                $pages = get_pages();
                foreach ($pages as $page) : ?>
                    <li><a class="footer-link" href="<?php  echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>
                <?php endforeach; wp_reset_query();?>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Categories</h5>
            <ul class="footer-lists">
                <?php $categories =  get_categories();
                foreach ($categories as $category) : ?>
                    <li><a class="footer-link" href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->cat_name ?></a></li>
                <?php endforeach; wp_reset_query(); ?>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="footer-lists">
                <li><a class="footer-link" href="#">Team</a></li>
                <li><a class="footer-link" href="#">Locations</a></li>
                <li><a class="footer-link" href="#">Privacy</a></li>
                <li><a class="footer-link" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>