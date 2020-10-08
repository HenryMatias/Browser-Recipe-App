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

    $option = get_field('aktiivinen_teema');

    if ($option == "unchecked") { 
        $color1 = get_field('ensimmainen_vari');
        $color2 = get_field('toinen_vari');
    } else { 
        $color1 = "#9e008d"; 
        $color2 = "#f153b5"; 
        };

    }
    wp_reset_query();

?>
    <script>
        var colornew1 = '<?php echo $color1 ?>';
        var colornew2 = '<?php echo $color2 ?>';
    </script>
    
<?php

?>