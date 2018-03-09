<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <title>t360weekend.com.au</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="header">
      <div class="header_logo">
        <a href="/">
            <img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/dot.gif" class="clear-dot desktop-banner">
            <img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/main-banner-mobile.jpg" class="img-fluid mobile-banner">
            <img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/main-banner-tablet.jpg" class="img-fluid tablet-banner">
        </a>
      </div>
      <div class="navigation desktop-inner">
        <ul>
          <li><a href="/event"><img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/nav_home.png" class="img-nav"></a></li>
          <li><a href="/syd"><img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/nav_sydney_prog.png" class="img-nav"></a></li>
          <li><a href="/bne"><img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/nav_bris_prog.png" class="img-nav"></a></li>
          <li><a href="https://pollev.com/thrombo360" target="_blank"><img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/nav_question.png" class="img-nav"></a></li>
          <li><a href="https://pollev.com/thrombo3601" target="_blank"><img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/nav_evaluation.png" class="img-nav"></a></li>
        </ul>
      </div>
      <!--hamburger-->
    <nav class="navbar navbar-light">

        <!-- Collapse button -->
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
            aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fa fa-bars fa-1x"></i></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/event">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/syd">Sydney Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bne">Brisbane Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://pollev.com/thrombo360" target="_blank">Questions/ Polls</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://pollev.com/thrombo3601" target="_blank">Evaluations</a>
                </li>
            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.hamburger-->                
    </div>
                    