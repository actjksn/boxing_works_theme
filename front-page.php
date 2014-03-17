  <?php get_header(); ?>
    <main>
      <section class="row marketing">
        <div class="col-sm-12 col-md-8 call">
          <?php get_sidebar('carousel-marketing'); ?>                       
        </div>
        <div class="col-sm-12 col-md-4 signup">
          <div class="box">
            <?php get_sidebar('signup'); ?>
          </div>
        </div>
      </section>

      <section class="row secondary">
        <div class="col-sm-12 col-md-8 box">
          <div class="testimonials">
            <h1>Testimonials</h1>
            <p class="lead muted">Why Boxing Works</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia dapibus adipiscing. Nam vitae sapien nec leo convallis rutrum. Cras mattis ullamcorper augue pulvinar malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam vitae scelerisque tortor, ac rhoncus dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dolor tortor, ultricies sed nibh in, porta vulputate odio.</p>
            <p class="text-right">-- quisquam est qui</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 latest">
          <h2>Latest Blog</h2>
            <?php $the_query = new WP_Query( 'showposts=1' ); ?>
            <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

            <p><?php the_excerpt(__('(more…)')); ?></p>
            <p class="text-right"><a href="<?php the_permalink() ?>" class="btn btn-primary">Keep Reading</a></p>
            <?php endwhile;?>         
        </div>
        <div class="col-sm-12 col-md-4 contact">
          <h2>Contact Us!</h2>
            <address>
            <h3>Boxing Works Hermosa Beach</h3>
             307 Pacific Coast Highway<br>
             Hermosa Beach, CA 90254<br>
            <abbr title="Phone">P:</abbr> (310) 376-1602
            </address>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.2461373052583!2d-118.39102459999998!3d33.857547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b482c6236e89%3A0xace7cf08757b063b!2sBoxing+Works!5e0!3m2!1sen!2sus!4v1395024996312" width="100%" height="100" frameborder="0" style="border:0"></iframe>
            <div class="center-block text-center">
              <h4><strong>Gym Hours</strong></h4>
              <p>Monday-Thursday | 3-9 pm<br>
                Friday | 3-7:30 pm<br>
                Saturday | 9-1 pm<br>
                <strong>Closed Sunday</strong>
            </div>

        </div>
      </section>
      <!--
      <section class="row testimonials">
        <div class="col-sm-12">
          <div class="box">
            <h1>Testimonials</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis faucibus metus. Sed vel accumsan mauris. Mauris leo libero, pharetra id hendrerit quis, tempus vel arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vestibulum, urna vel placerat ultrices, dui justo cursus lacus, ac pharetra arcu turpis ac elit.</p>
          </div
        </div>
      </section>
     -->
      <!--
      <section class="row additional">
        <div class="col-sm-6">
          <div class="box latest">
            <h1>Latest Blog Post</h1>
              <?php $the_query = new WP_Query( 'showposts=1' ); ?>
              <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
              <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

              <p><?php the_excerpt(__('(more…)')); ?></p>
              <p><a href="<?php the_permalink() ?>" class="btn btn-primary">Read More</a></p>
              <?php endwhile;?>
          </div>
        </div>
        <!--
        <div class="col-sm-6">
          <div class="box">
            <h1>Contact Us</h1>
            <div class="row">
              <div class="gym-hours col-sm-6">
                <h2>Gym Hours</h2>
                <p>Monday-Thursday | 3-9 PM</p>
                <p>Friday | 3-7:30 PM</p>
                <p>Saturday | 9-1 PM</p>
                <p><strong>Closed Sunday</strong></p>
              </div>
              <div class="visit col-sm-6">
                <h2>Come See Us!</h2>
                <address>
                  <strong>Boxing Works</strong><br>
                  307 Pacific Coast Highway<br>
                  Hermosa Beach, CA 90254<br>
                  (310) 376-1602
                </address>
              </div>
            </div>
          </div>
        </div>      
      </section>
      s-->

    </main>
  <?php get_footer(); ?>