<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->

<?php wp_head() ?>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mi primer tema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <?php wp_nav_menu(array(
          'theme_location' => 'superior',
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarResponsive',
          'items_wrap' => '<ul class="navbar-nav ml-auto" >%3$s</ul>',
          'menu_class' => 'nav-item'
        )); ?>
      </div>
    </nav>
