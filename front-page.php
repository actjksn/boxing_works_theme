  <?php get_header(); ?>
    <main>
      <section class="row marketing">
        <div class="col-sm-8 call">
          <?php get_sidebar('carousel-marketing'); ?>                           
        </div>
        <div class="col-sm-4 signup">
          <div class="box">
            <?php get_sidebar('signup'); ?>
          </div>
        </div>
      </section>

      <section class="row testimonials">
        <div class="col-sm-12">
          <div class="box">
            <h1>Testimonials</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis faucibus metus. Sed vel accumsan mauris. Mauris leo libero, pharetra id hendrerit quis, tempus vel arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vestibulum, urna vel placerat ultrices, dui justo cursus lacus, ac pharetra arcu turpis ac elit.</p>
          </div
        </div>
      </section>

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

    </main>
  <?php get_footer(); ?>