<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>./assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link hreh="<?php echo get_template_directory_uri(); ?>./assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></link>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="style.css">
    <title>Vimal Kumar</title>

    <?php wp_head() ?>
</head>
<body>
    <!-- navbar -->
    <div class="container">
          <nav class="navbar navbar-expand-md navbar-light bg-faded">
             <a class="navbar-brand logo" href="#">JBL</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <?php
            wp_nav_menu([
              'menu'            => 'top',
              'theme_location'  => 'top',
              'container'       => 'div',
              'container_id'    => 'bs4navbar',
              'container_class' => 'collapse navbar-collapse',
              'menu_id'         => false,
              'menu_class'      => 'navbar-nav ml-auto',
              'depth'           => 2,
              'fallback_cb'     => 'bs4navwalker::fallback',
              'walker'          => new bs4navwalker()
            ]);
            ?>
      </nav>
</div>

     <!-- navbar -->

     <section>
          <div class="container">
            <div class="hero">
                <div class="hero-img">
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/img/work0.jpg" alt="">
                </div>
            </div>
          </div>
      </section>
