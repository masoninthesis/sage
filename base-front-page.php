<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php
      get_template_part('templates/home-hero');
    ?>

    <section id="recent-work">
      <div class="row text-center">
        <div class="work work-one col-sm-4 col-xs-12">
          <h2>Find the Pub</h2>
        </div>
        <div class="work work-two col-sm-4 col-xs-12">
          <h2>Beer & Food</h2>
        </div>
        <div class="work work-three col-sm-4 col-xs-12">
          <h2>Store</h2>
        </div>
      </div>
    </section>

    <div id="social-cred" class="wrap container" role="document">
      <div class="content row">
        <main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <!<?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div class="fb-like" data-href="https://www.facebook.com/SeasideBrewingCompany" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>



      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
