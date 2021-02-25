<body onload="settingCheckbox();" id="body-app">
<header id="header-app">

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