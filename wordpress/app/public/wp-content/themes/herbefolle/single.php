<?php
$post = $wp_query->post;
if (in_category('MENUS')) {
    include(TEMPLATEPATH.'/single-menus.php');
}
else{
    include(TEMPLATEPATH.'/single.php');
}
?>