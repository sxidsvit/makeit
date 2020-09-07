<?php
/*
Template Name: Contact
*/
?>



<?php get_header('custom'); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


      <div itemscope itemtype="http://schema.org/Organization" style="text-align: left; font-size: 20px; font-weight: 700;">
        <address itemprop="name">Компания MakeIT</address>

        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <address itemprop="addressLocality">Lviv</address>
          <address itemprop="streetAddress">Ivana Rubchaka street, </address>
          <address itemprop="postalCode">123456</address>
        </div>

        <address>Телефон:<span itemprop="telephone">+38-067-672-99-69</span>,</address>
        <address>Электронная почта: <span itemprop="email">e@makeit.technology</span></address>
        <div itemprop="sharedContent" itemscope itemtype="http://schema.org/WebPage">
          <address itemprop="url"><a href="https://www.instagram.com/makeit_team/">Instagram</a></address>
          <address itemprop="url"><a href="https://www.linkedin.com/company/makeittech/">LinkedIn</a></address>
          <address itemprop="url"><a href="https://www.facebook.com/makeittech/">Facebook</a></address>
        </div>
      </div>


    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer('custom');
