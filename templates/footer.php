<!--<div class="wrap container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/place-holder.png" alt="<?php bloginfo('name'); ?>" alt="...">
            <div class="caption">
              <h3>Blog Post 1</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Read More..</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/place-holder.png" alt="<?php bloginfo('name'); ?>" alt="...">
            <div class="caption">
              <h3>Blog Post 2</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Read More..</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/place-holder.png" alt="<?php bloginfo('name'); ?>" alt="...">
            <div class="caption">
              <h3>Blog Post 3</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Read More..</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->


<!-- Featured Category -->
<div id="home-posts" class="wrap container">
  <div class="row">
    <?php query_posts('category_name=featured&showposts=3'); while (have_posts()) : the_post();?>
      <div class="col-sm-4 col-xs-12">
        <div class="thumbnail">
          <?php the_post_thumbnail( 'featured-img-thumb' ); ?>
          <h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
          <?php get_template_part('templates/entry-meta'); ?>
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<!-- //Featured Category -->

<!-- SnapWidget: Instagram Feed -->
<div id="insta-feed" class="wrap container">
  <script src="http://snapwidget.com/js/snapwidget.js"></script>
  <iframe src="http://snapwidget.com/in/?u=c2Vhc2lkZWJyZXdlcnl8aW58MTI1fDZ8MXx8eWVzfDV8bm9uZXxvblN0YXJ0fHllc3x5ZXM=&ve=120515" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
</div>
<!-- //SnapWidget: Instagram Feed -->

<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

<section class="text-center">
  <div class="wrap container">
    <p class="p-customers">Call us, or drop in and come talk to us.</p>
    <div class="row">
      <div class="col-sm-6">

      </div>
      <div class="col-sm-6">

      </div>
    </div>
  </div>
</section>

<section class="text-center">
  <address>
    <strong>Twitter, Inc.</strong><br>
    795 Folsom Ave, Suite 600<br>
    San Francisco, CA 94107<br>
    <abbr title="Phone">P:</abbr> (123) 456-7890
  </address>

  <address>
    <strong>Full Name</strong><br>
    <a href="mailto:#">first.last@example.com</a>
  </address>
</section>

<form class="" action="index.html" method="post">
  <div class="optin-form"><?php dynamic_sidebar('sidebar-footer'); ?></div>
</form>

<footer>
  <div class="container">
    <div id="footer" class="row text-center">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><svg width="250" height="350" class="logo-footer"><?php get_template_part( 'assets/svg/inline', 'logo-bottom.svg' ); ?></svg></a>
	    <ul class="bs-docs-footer-links muted">
	      <li>Currently v0.2.2</li>
	      <li>&middot;</li>
	      <li><a href="https://github.com/masoninthesis/">GitHub</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/">Services</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalope.io/">Themes</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalope.io/">Tutorials</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/">About</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/blog/">Blog</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemeda.com/contact/">Contact</a></li>
	    </ul>
      <p>&copy; <?php echo date('Y'); ?> Jackalope | all rights reserved.</p>
			<br />
    </div>
  </div>

</footer>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <center><svg width="30" height="33" class="logo logo-modal"><?php get_template_part( 'assets/svg/inline', 'logo-bottom.svg' ); ?></center>
      <center><h3>This site is still being developed, be the <br>first to know when it officially launches!</h3></center>
      <div class="modal-body">
        <center>
          <form class="form-inline" id="before_header" action="//jackalope.us9.list-manage.com/subscribe/post?u=74a8ddb6f1ff4b3eeb5966632&amp;id=322fc5ebb8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
            <button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="btn hero-btn btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
          </form>
        </center>
      </div><!-- /optin -->
    </div>
  </div>
</div>

<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }
    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 100);
      }
    }
    $(document).ready(function () {
      timeOut();
      stickyElement();
    });
  </script>
