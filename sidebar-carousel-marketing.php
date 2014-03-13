<div id="carousel-marketing" class="carousel slide" data-ride="carousel" data-interval="10000">
  <ol class="carousel-indicators">
    <?php $total = count_widgets('carousel-marketing'); ?>
    <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
    <?php $slide_active = is_plugin_active('simple-image-widget/simple-image-widget.php') ?>

    <?php if( ($total > 0) && $slide_active ): ?>
      <?php for($i=0; $i < $total; $i++): ?>
        <?php if($i == 0): ?>
          <li data-target="#carousel-marketing" data-slide-to="<?php echo $i; ?>" class="active"></li>
        <?php else: ?>
          <li data-target="#carousel-marketing" data-slide-to="<?php echo $i; ?>"></li>
        <?php endif; ?>
      <?php endfor;?>   
    <?php else: ?>
      <li data-target="#carousel-marketing" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-marketing" data-slide-to="1"></li>
      <li data-target="#carousel-marketing" data-slide-to="2"></li>       
    <?php endif; ?>
  </ol>

  <div class="carousel-inner">
    <?php if( ($total > 0) && $slide_active ): ?>
      <?php
        $sidebars = wp_get_sidebars_widgets();
        $carousel = $sidebars['carousel-marketing'];
        $pattern = '/\d+/';
        $instance = get_option('widget_slide');

        //var_dump($carousel);
        //var_dump($instance);
        $i = true;
        foreach($carousel as $id) {
          preg_match($pattern, $id, $matches);
          $instance_id = $matches[0];
          if ($i) {
            $i = false;
            $args = array (
              'before_widget' => '<div class="item active">',
              'after_widget'  => '</div>',
            );

            the_widget( 'Slide_Widget', $instance[$instance_id], $args);
          } else {
            $args = array (
              'before_widget' => '<div class="item">',
              'after_widget'  => '</div>',
            );
            the_widget( 'Slide_Widget', $instance[$instance_id], $args );
          }
        }      
      ?>
    <?php else: ?>
      <div class="item active">
        <img src="http://placehold.it/1000x450" class="img-responsive">
        <div class="carousel-caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis faucibus metus. Sed vel accumsan mauris. Mauris leo libero, pharetra id hendrerit quis, tempus vel arcu.
        </div>
      </div>

      <div class="item">
        <img src="http://placehold.it/1000x450" class="img-responsive">
        <div class="carousel-caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis faucibus metus. Sed vel accumsan mauris. Mauris leo libero, pharetra id hendrerit quis, tempus vel arcu.
        </div>
      </div>

      <div class="item">
        <img src="http://placehold.it/1000x450" class="img-responsive">
        <div class="carousel-caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis faucibus metus. Sed vel accumsan mauris. Mauris leo libero, pharetra id hendrerit quis, tempus vel arcu.
        </div>
      </div>       
    <?php endif; ?>
  </div>
</div>