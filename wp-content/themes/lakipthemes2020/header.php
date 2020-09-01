<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description') ?>">
  <meta name="author" content="Education, Event">
  <link rel="icon" href="wp-content/themes/lakipthemes2020/assets/img/favicon.ico">

  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    <?php wp_title(); ?></title>
  <!-- Bootstrap CSS Online -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> -->
  <!-- Bootstrap CSS -->
  <link href="<?php bloginfo('template_url'); ?>/bootstrap-5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- Theme CSS -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!-- Theme Plugins atau Widget -->
  <?php wp_head(); ?>
  <!-- Tambahan -->


  <script type="text/javascript">
  $(document).ready(function() {
    $(document).on('click', '.show_more', function() {
      var ID = $(this).attr('id');
      $('.show_more').hide();
      $('.loding').show();
      $.ajax({
        type: 'POST',
        url: '/blog/ajaxpost',
        data: 'id=' + ID,
        success: function(html) {
          $('#show_more_main' + ID).remove();
          $('.article_list').append(html);
        }
      });
    });
  });
  </script>
</head>

<body>
  <!---header.php--->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <!-- Image and text -->
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <img src="<?php bloginfo('template_directory'); ?>/assets/brand/bootstrap-solid.svg" width="30" height="30"
            class="d-inline-block align-top" alt="" loading="lazy">
          Bootstrap
          <!-- <?//php bloginfo('name'); ?> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <?php
            wp_nav_menu(array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => '',
              'container_class'   => '',
              'container_id'      => '',
              'menu_class'        => 'navbar-nav mr-auto',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
            <!-- <li class="nav-item active">
            <a class="nav-link " aria-current="page" href="/lakipthemes/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lakipthemes/hello-world/">Hello</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/lakipthemes/sample-page">Page</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
          </ul>
          <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <!-- Begin page content -->
  <main role="main" class="container">
    <?php
    if (is_front_page()) {
    ?>
    <center>
      <h1><?php echo bloginfo('name'); ?></h1>
      <small><?php echo bloginfo('description'); ?></small>
    </center>
    <?php
    }
    ?>
    <div class="row">
      <!---end header.php--->