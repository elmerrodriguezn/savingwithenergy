<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<div class="container container-posts">
    <div class="card card-post">
        <div class="card-body">
          <h4 class="title">Do you want to save energy? get in touch with us, we will find you a solution</h4>
            <div class="row">
                <div class="col-md-8">
                    <?php dynamic_sidebar( 'contact_form' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
