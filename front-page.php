  <?php get_header(); ?>
    <main>
      <section class="row marketing">
        <div class="col-sm-8 call">
          <?php get_sidebar('carousel-marketing'); ?>                           
        </div>
        <div class="col-sm-4 signup">
          <div class="box">
            <h1 class="highlight">Free Intro Class</h1>
            <p><strong>Sign Up Today!</strong></p>
            <form role="form">

            <div class="form-group">
              <input type="text" class="form-control" id="fName" placeholder="First Name">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="lName" placeholder="Last Name">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="email" placeholder="Email">
            </div>

            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Phone">
            </div>

            <button type="submit" class="btn btn-large btn-primary">SUBMIT</button>
            </form>
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
          <div class="box">
            <h1>Latest Blog Post</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis faucibus metus. Sed vel accumsan mauris. Mauris leo libero, pharetra id hendrerit quis, tempus vel arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vestibulum, urna vel placerat ultrices, dui justo cursus lacus, ac pharetra arcu turpis ac elit.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="box">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis faucibus metus. Sed vel accumsan mauris. Mauris leo libero, pharetra id hendrerit quis, tempus vel arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vestibulum, urna vel placerat ultrices, dui justo cursus lacus, ac pharetra arcu turpis ac elit.</p>
          </div>
        </div>
      </section>

    </main>
  <?php get_footer(); ?>