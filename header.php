<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="purple" />
    <title>Reseptini</title>

    <?php wp_head(); ?>

</head>
<body onload="settingCheckbox();">
<header>

<?php
    include 'assets/sections/color-adjust.php';
?>


<?php
    $args = array(
    'post_type' => 'setting',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'ASC',
    );
    $settings = new WP_Query($args);
    while ($settings->have_posts()) {
    $settings->the_post();
?>
<div class="header-one" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)" id="headeroneid">
<?php
    }
    wp_reset_query();
?>    
    <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_purple.png" alt="">
    </div>
    <p class="editor" id="contentheading" style="color: <?php echo "$color1" ?>;">Reseptini</p>
</div>

</header>