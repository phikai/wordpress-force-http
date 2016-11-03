<?php

/*
Plugin Name: WordPress Force HTTP
Plugin URI: https://github.com/phikai/wordpress-force-http
Description: Forces the front end of your WordPress site to HTTP when you only want the Admin over HTTPS
Author: A. Kai Armstrong
Author URI: http://www.kaiarmstrong.com
Version: 0.1.3
*/

#http://yoast.com/wordpress-ssl-setup/
function toz_force_http () {
  if ( is_ssl() && !is_admin() ) {
    if ( 0 === strpos($_SERVER['REQUEST_URI'], 'http') ) {
      wp_redirect(preg_replace('|^https://|', 'http://', $_SERVER['REQUEST_URI']), 301 );
      exit();
    } else {
      wp_redirect('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
      exit();
    }
  }
}
add_action ( 'template_redirect', 'toz_force_http', 1 );
