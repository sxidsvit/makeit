<?php
?>

</div><!-- .container -->
</section><!-- .statistic -->

</footer>

<footer id="contact">
  <div class="container">
    <div class="row footer-top">
      <div class="col-12 col-md-6">
        <!-- logo -->
        <h3>luxestate</h3>
        <h3>Explore Real Estate</h3>
      </div>
      <div class="col-12 col-md-6 Newsletter">
        <input type="text" placeholder="Subscribe To Our Newsletter" class="left">
        <button class="newsletter-btn left" style=" background-image: url(<?php echo get_template_directory_uri() . '/images/arrow-right.svg' ?>)"></button>
      </div>
    </div>
    <div class="row footer-bottom">
      <div class="col-sm-12 col-md-4 footer-logo">
        <h4>luxestate</h4>
        <p>© 2019 - luxestate,<br>All Right Reserved</p>
      </div>
      <div class="col-sm-3 col-md-2 footer-column">
        <h5>LUXESTATE</h5>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footerluxestate',
            'menu_id'        => 'footer-luxestate',
            'container'       => '',
            'menu_class'      => '',
          )
        );
        ?>
      </div>
      <div class="col-sm-3 col-md-2 footer-column">
        <h5>COMPANY</h5>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footercompany',
            'menu_id'        => 'footer-company',
            'container'       => '',
            'menu_class'      => '',
          )
        );
        ?>
      </div>
      <div class="col-sm-3 col-md-2 footer-column">
        <h5>PRODUCT</h5>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footerproduct',
            'menu_id'        => 'footer-product',
            'container'       => '',
            'menu_class'      => '',
          )
        );
        ?>
      </div>
      <div class="col-sm-3 col-md-2 footer-column">
        <h5>SERVICES</h5>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footerservices',
            'menu_id'        => 'footer-services',
            'container'       => '',
            'menu_class'      => '',
          )
        );
        ?>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>