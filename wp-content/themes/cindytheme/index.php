<?php get_header(); ?>

  <!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portfolio</h2>
        </div>
      </div>
      <div class="row">

        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      
          get_template_part( 'content', get_post_format() );
    
        endwhile; endif; 
        ?>

    </div>
  </section>

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About Me</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">

         <div class="col-lg-12 text-center">


          <?php
            // query for the about page
            $your_query = new WP_Query( 'pagename=about' );
            // "loop" through query (even though it's just one page) 
            while ( $your_query->have_posts() ) : $your_query->the_post();
                the_content();
            endwhile;
            // reset post data (important!)
            wp_reset_postdata();
          ?>

        </div>

      </div>
    </div>
  </section>

  <!-- Testionials -->
  <section id="testimonials">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Testimonials</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      
      <div class="row">

        <?php 
        $args =  array( 
          'post_type' => 'testimonials',
          'orderby' => 'menu_order',
          'order' => 'ASC'
        );
         $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

              <div class="col-lg-6">
                <?php the_content(); ?>
              </div>

        <?php endwhile; ?>
      
    </div>

  </div>
    </section>

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Me</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- Portfolio Modals -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      
  <div class="portfolio-modal modal fade" id="portfolioModal<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php the_title(); ?></h2>
                 
                  <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid d-block mx-auto'] );
                  } ?>

                  <?php the_content(); ?>

                 <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>