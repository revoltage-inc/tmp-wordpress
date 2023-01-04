<?php
$taxonomy = get_query_var('taxonomy');
$post_type = get_taxonomy($taxonomy)->object_type[0];
if (is_archive($post_type)) {
  include_once("archives/{$post_type}.php");
}
