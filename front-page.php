  <?php get_header(); ?>
    <main>
      <section class="row marketing">
        <div class="col-sm-12 col-md-8 call">
          <?php get_sidebar('carousel-marketing'); ?>                       
        </div>
        <div class="col-sm-12 col-md-4 ">
          <div class="signup box">
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
          <div class="testimonials">
            <h1>Spotlight</h1>
            <p class="lead muted">Why Boxing Works</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia dapibus adipiscing. Nam vitae sapien nec leo convallis rutrum. Cras mattis ullamcorper augue pulvinar malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam vitae scelerisque tortor, ac rhoncus dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dolor tortor, ultricies sed nibh in, porta vulputate odio.</p>
            <p class="text-right">-- quisquam est qui</p>
          </div>
        </div>      
        <div class="col-sm-12 col-md-4 latest">
          <h2>Latest Blog</h2>
            <?php $the_query = new WP_Query( 'showposts=1' ); ?>
            <?php //the_post_thumbnail('', array('class' => 'img-responsive')); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

            <p><?php the_excerpt(__(35, '(more…)')); ?></p>
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
    </main>
  <?php get_footer(); ?>