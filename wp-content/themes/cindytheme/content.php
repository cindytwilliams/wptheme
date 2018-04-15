<div class="col-md-4 col-sm-6 portfolio-item">
  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo get_the_ID(); ?>">
    <div class="portfolio-hover">
      <div class="portfolio-hover-content">
        <i class="fa fa-plus fa-3x"></i>
      </div>
    </div>
    <?php if ( has_post_thumbnail() ) {
    	the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid'] );
		} ?>
  </a>
  <div class="portfolio-caption">
    <h4><?php the_title(); ?></h4>
  </div>
</div>