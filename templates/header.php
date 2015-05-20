<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <nav class="collapse navbar-collapse" role="navigation">
      <div class="row">
        <div class="col-xs-12">
          <ul class="primary-site-nav-sign-in">
            <li class="nav-item"><a class="demo-link" href="#">Store</a></li>
          </ul>
          <nav role="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
            ?>
          </nav>
        </div>
      </div>
    </div>

    </nav>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>


  </div>
</header>
