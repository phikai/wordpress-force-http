=== Plugin Name ===
Contributors: phikai
Tags: ssl, https, http, secure
Requires at least: 3.5
Tested up to: 4.9.8
Stable tag: 0.1.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Forces the front end of your WordPress site to HTTP when you only want the Admin over HTTPS

== Description ==

Forces the front end of your WordPress site to HTTP when you only want the Admin over HTTPS

Please help by reporting any bugs/feature request at the link below.

Bugs:

* Report at: [Issue Tracker](https://gitlab.com/phikai/wordpress-force-http/issues)

Questions/Comments:

* http://www.kaiarmstrong.com/contact/

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the `wordpress-force-http.php` file to the `/wp-content/mu-plugins/` directory.
1. Make sure you have `define('FORCE_SSL_ADMIN', true);` in your wp-config.php

== Frequently Asked Questions ==

None yet!

== Changelog ==

= 0.1.5 =
* Compatible up to 4.9.8

= 0.1.4 =
* Excludes Preview

= 0.1.3 =
* Compatible to 4.7.0

= 0.1.2 =
* 4.0.0 Stable

= 0.1.1 =
* Initial Release
