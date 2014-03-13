<div id="carousel-marketing" class="carousel slide" data-ride="carousel" data-interval="10000">
  <ol class="carousel-indicators">
    <?php $total = count_widgets('carousel-marketing'); ?>
    <?php for($i=0; $i < $total; $i++): ?>
      <?php if($i == 0): ?>
        <li data-target="#carousel-marketing" data-slide-to="<?php echo $i; ?>" class="active"></li>
      <?php else: ?>
        <li data-target="#carousel-marketing" data-slide-to="<?php echo $i; ?>"></li>
      <?php endif; ?>
    <?php endfor;?>
  </ol>

  <div class="carousel-inner">
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
  </div>
</div>