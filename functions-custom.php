<?php

/**
 * ======================================================
 * Including scripts for the button"Загрузить ещё"
 * =======================================================
 */

function true_loadmore_scripts()
{
  wp_enqueue_script('jquery'); // most likely it will already be connected, this is just in case
  wp_enqueue_script('true_loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'true_loadmore_scripts');


/**
 * Loadmore handler (click on the button "Загрузить ещё")
 */

function true_load_posts()
{

  $args = unserialize(stripslashes($_POST['query']));
  $args['paged'] = $_POST['page'] + 1;
  $args['post_status'] = 'publish';

  query_posts($args);
  // если посты есть
  if (have_posts()) :

    while (have_posts()) : the_post();

      get_template_part('template-parts/post/content', get_post_format());

    endwhile;

  endif;
  die();
}


add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


/**
 * ==============================================================
 * Connecting scripts and styles for the Contacts page
 * ==============================================================
 */

function contacts_styles()
{
  if (is_page('contacts')) {

    // Disable unnecessary styles
    wp_dequeue_style('twentyseventeen-fonts');
    wp_deregister_style('twentyseventeen-style');
    wp_dequeue_style('twentyseventeen-block-style');

    // add CSS styles
    wp_enqueue_style('bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('contact', get_template_directory_uri()
      . '/styles-custom.css', array(), '1.0');

    // connect scripts
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '2.4.4', true);
    wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',  array('popper'), '4.5.2', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true);
  }
}
add_action('wp_enqueue_scripts', 'contacts_styles');



// Registering the top menu for the Contacts page
register_nav_menus(
  array(
    'topcontacts'    => __('Contacts page top Menu', 'twentyseventeen')
  )
);

// Registering the bottom menus for the Contacts page
register_nav_menus(
  array(
    'footerluxestate' => __('Footer menu: Luxestate', 'twentyseventeen'),
    'footercompany'   => __('Footer menu: Company', 'twentyseventeen'),
    'footerproduct'   => __('Footer menu: Product', 'twentyseventeen'),
    'footerservices'  => __('Footer menu: Services', 'twentyseventeen')
  )
);
