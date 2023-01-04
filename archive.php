<?php
$post_type = get_query_var('post_type');
if (is_date($post_type) || is_archive($post_type)) {
  include_once("archives/{$post_type}.php");
}
