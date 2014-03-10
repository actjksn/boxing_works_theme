<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hermosa Beach Boxing Works</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="masthead">
    </div>
    
    <div class="container">    
    <header class="row top">
      <div class="col-sm-4">
        <a href="#" class="text-center">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/logo.png" alt="Hermosa Beach Boxing Works" class="img-responsive logo" />
        </a>
      </div>
      <div class="col-sm-7 catch">
        <div class="tagline">
          <h1>The <span class="highlight">Premier Location</span> for Martial Arts in the Los Angeles South Bay</h1>
          <p>Hermosa Beach, Redondo Beach, Manhattan Beach, Torrance</p>
        </div>
      </div>
    </header>

    <nav class="row">
      <div class="text-center">
        <ul class="nav">
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Classes</a></li>
          <li><a href="#">Schedule</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </nav>
