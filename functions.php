<?php

// Admin page related settings
get_template_part('functions/wp/admin/admin-bar');
get_template_part('functions/wp/admin/admin-menu');
get_template_part('functions/wp/admin/login');
get_template_part('functions/wp/admin/email');
get_template_part('functions/wp/admin/dashboard');
// get_template_part('functions/wp/admin/setting');
// get_template_part('functions/wp/admin/customizer');

// Archive page related settings
get_template_part('functions/wp/archive/post-type');
get_template_part('functions/wp/archive/archive');
get_template_part('functions/wp/archive/taxonomy');

// Post page related settings
get_template_part('functions/wp/post/title');
get_template_part('functions/wp/post/excerpt');
get_template_part('functions/wp/post/thumbnail');
get_template_part('functions/wp/post/preview');
get_template_part('functions/wp/post/content');
get_template_part('functions/wp/post/comment');

// Plugin settings
// get_template_part('functions/plugins/all-in-one-wp-migration'); // All-in-One WP Migration
// get_template_part('functions/plugins/contact-form-7'); // ContactForm7
// get_template_part('functions/plugins/deplicate-post'); // Deplicate Post
// get_template_part('functions/plugins/flamingo'); // Flamingo
// get_template_part('functions/plugins/seo-simple-pack'); // SEO SIMPLE PACK
// get_template_part('functions/plugins/post-types-order'); // Post Types Order

// Reading various files Settings
get_template_part('functions/wp/common/jquery');
get_template_part('functions/wp/common/js');
get_template_part('functions/wp/common/css');

// Other
get_template_part('functions/wp/common/function');
get_template_part('functions/wp/common/head');
