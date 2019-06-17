<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<div class="container container-posts">
    <div class="card card-post">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <?php dynamic_sidebar( 'contact_form' ); ?>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
