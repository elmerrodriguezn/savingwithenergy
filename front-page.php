<?php get_header(); ?>

<div id="carouselControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" id="carousel-inner-id">
        <?php $pagesQuery = new WP_Query(array(
                'post_type' => 'page',
                'posts_per_page' => -1,
	            'post__not_in' => [3, 26, 28, 40, 60],
				'order' => 'ASC',
        ));

        while ($pagesQuery->have_posts()) :
            $pagesQuery->the_post(); ?>
            <div class="carousel-item">
                <div class="carousel-img-container" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(<?php the_post_thumbnail_url(); ?>)">
                    <h1 class="carousel-title"><?php the_title(); ?></h1>
					<div class="carousel-caption d-md-block mb-4">
                    	<a href="<?php echo the_permalink(); ?>" class="btn btn-custom-primary">Know More</a>
         			</div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata();?>
        </div>
        <a class="carousel-control-prev carousel-control-prev-custom" href="#carouselControls" role="button" data-slide="prev">
            <i class="fas fa-chevron-left fa-3x"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-control-next-custom" href="#carouselControls" role="button" data-slide="next">
            <i class="fas fa-chevron-right fa-3x"></i>
            <span class="sr-only">Next</span>
        </a>
</div>

<section>
  <div class="container container-post">
    <div class="card card-post">
        <div class="card-body">
    <h4 class="title">How does Saving With Energy help?</h4>
    <div class="row">
      <div class="col-md-3">
        <img class="img-fluid" src="<?php echo get_theme_file_uri('images/logo.jpg'); ?>" alt="Logo">
      </div>
      <div class="col-md-9">
        <p>Helping companies improve their bottom line through strategic applications of energy programs and equipment solutions.</p>
        <p>Following a well established “Structured and Focused” process we help our clients increase the effectiveness of their on-going energy conservation, cost improvement, and sustainability programs.</p>
        <p>We match the best technologies to deliver the right cost-effective solutions.</p>
      </div>
    </div>

    <h4 class="title">How does it work?</h4>
    <div class="row">
      <div class="col-md-6">
        <p>Starting with your existing programs we add our extensive energy management experience to substantially improve results achieving higher savings in a shorter period of time. Turn your energy program into a “Profit Center”.</p>
        <p>We leverage in-house knowledge, data analytics, incentive funds, and our “Energy Toolbox” of best solutions.</p>
        <p>Our open-book hands-on methodology brings results, while transferring our knowledge to our clients who participate in every phase to ensure the program is sustainable.</p>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo get_theme_file_uri('images/how-does-it-work.png'); ?>" alt="How does it work">
      </div>
    </div>

    <h4 class="title">Why you should work with us?</h4>
    <p>We know we must earn and maintain your trust.  We warrantee our work with an iron clad guarantee the mutually agreed upon savings to our clients will exceed a minimum of 2 x our fees or fees are rescinded.</p>
    <p>We have a keen understanding of budget and staff constraints along with risk adversity.  We also understand the desire to reduce operating costs and at the same time reduce pollution emissions.  Over the last 20 years of developing and implementing projects across hundreds of manufacturing, food processing, chemical, hospitality, and hospital facilities we have assembled our “Energy Toolbox” from lessons learned of projects that work and ones that do not.  Our solutions have ROIs of less than 2 years with the majority having less than 1 year.  We have helped our clients recover millions of dollars in incentive funds that otherwise would have been left on the table.</p>

    <h4 class="title">Leadership</h4>
    <div class="row">
      <div class="col-md-2">
        <img class="img-fluid" src="<?php echo get_theme_file_uri('images/Thomas-mort.jpg'); ?>" alt="Thomas Mort">
      </div>
      <div class="col-md-10">
        <p>Thomas Mort, BS, CEM, Principal, is a strong, innovative, recognized leader in the field of operational excellence and continuous improvement with more than 30 years’ experience.
        Previous Global Energy Director for Archer Daniels Midland (ADM) and Delphi Automotive (DLPH).
        Certifications, Licenses, and Recognitions:</p>
        <ul class="green-list mt-4">
          <li>Recognized as a “Fellow Membership” by the Association of Energy Engineers 2017</li>
          <li>International Energy Manager of the Year 2013, Association of Energy Engineers.</li>
          <li>Key Speaker at Yale School of Forestry & Environmental Studies 2013</li>
          <li>Inducted as a Legend in Energy by the Association of Energy Engineers in 2008</li>
          <li>SAE International Environmental Excellence Award 2001 and in 2002</li>
          <li>Energy Manager of the Year US 1999 by the Energy Manager Magazine</li>
          <li>Licensed Nuclear Power Plant Operator and Reactor Engineer: 1986-1997</li>
          <li>See <a href="https://www.linkedin.com/in/thomascmort" target="blank">www.linkedin.com</a> for further references.</li>
        </ul>
      </div>
    </div>

    <p>To learn how you can further improve your bottom line with cost effective energy solutions, contact:</p>
    <a href="mailto:tcmort@savingwithenergy.com?Subject=Contact%20Saving%20With%20Energy">tcmort@savingwithenergy.com</a> or through our <a href="<?php echo site_url('/contact') ?>">contact page</a>
    <p>Phone: +1 (502)-550-8817</p>
    </div>
  </div>
</div>
</section>

<section class="section-latests-posts" style="background-image: url(<?php echo get_theme_file_uri('images/body-bg.jpg') ?>)">
    <div class="container container-post">
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
		<?php if ($homepagePosts < 1 ) { ?>
		<div class="card card-post">
			<div class="card-body">
				<h3 class="title">Sorry no posts to show</h3>
				<div class="content-404">
					<i class="far fa-frown fa-10x"></i>
				</div>
			</div>
		</div>
		<?php } ?>
        <a href="<?php echo site_url('/blog') ?>" class="btn btn-block btn-custom-primary">All Articles</a>
    </div>
</section>


<?php get_footer(); ?>
