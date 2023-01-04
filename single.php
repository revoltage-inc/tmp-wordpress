<?php
$post_type = get_query_var('post_type');
if (is_singular($post_type)) {
  include_once("singles/{$post_type}.php");
}
