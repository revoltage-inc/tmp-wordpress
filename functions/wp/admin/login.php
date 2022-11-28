<?php

/**
 * Logins settings
 */

// Change logo link on the admin login page
add_filter('login_headerurl', function () {
  return home_url();
});
