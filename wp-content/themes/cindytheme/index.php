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
          <p>I've been building websites and applications for over 20 years, including e-commerce shops, gift registries, reservation and inventory management systems.</p>

          <p>My toolset includes HTML, CSS, Sass, Gulp, Git, Bootstrap, Twig, JavaScript, JQuery, PHP, MySQL, Drupal, WordPress, and lots of coffee.</p>

          <p>I have a bachelor's degree in computer science from <a href="http://uab.edu">The University of Alabama at Birmingham</a>, and currently work as a web developer at <a href="http://volstate.edu">Volunteer State Community College</a>.</p>

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

         <div class="col-lg-6">
          <p class="quote">"Very rarely does an employee come into an organization and make a difference from day one. Cindy  has done just that. She brings broad technical skills as well as creativity to the solutions she provides."</p>
        <p class="quote-name">Frank Spina<br>IT Director at Command Alkon</p>
        </div>

        <div class="col-lg-6">
          <div class="quote">"It never ceases to amaze me how Cindy can take a complicated business process and convert it into an incredibly efficient database driven web process. She is spot on in her ability to analyze, quote, and then deliver solutions for our clients. She has always delivered high level results ahead of schedule and below budget."</p>
        <p class="quote-name">John Lovoy<br>CEO Infomedia</p>
      </div>
      
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

                  <?php the_excerpt(); ?>

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