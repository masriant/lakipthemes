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