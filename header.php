<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="purple" />
    <title>Reseptini</title>

    <?php wp_head(); ?>

</head>

<?php
    include 'assets/sections/color-adjust.php';

    // This gets the current pages' slug
    global $post;
    $post_slug = $post->post_name;


    if($post_slug == 'application') {

        include 'headers/header-app.php';

    } else {

        include 'headers/header-home.php';

    }

?>
