<?php

/**
 * Email settings
 */

// Stop sending emails to the management email address at the time of user registration
add_filter('wp_new_user_notification_email_admin', '__return_false');
