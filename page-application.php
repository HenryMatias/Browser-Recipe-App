<?php get_header(); ?>

<?php   
/**  In order to work, you have to make a page called application
     in WordPress. After that go to page settings and set the page private
     Then the content will be visible only for users. */  
?>

<?php
    include 'assets/sections/color-adjust.php';
?>

<div class="container white-bg" id="maincontent">
        <div class="search" id="searchcontent">
            <i class="fas fa-search" style="color: <?php echo "$color1" ?>;"></i>
            <form method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>" autocomplete="off">
                <input type="text" class="field" name="s" id="searchInput" onkeyup="fetchResults()" placeholder="<?php pll_e('Hae Resepteja'); ?>...">
                <?php if ('any' != $post_type ) { ?>
                    <input type="hidden" name="post_type" value="<?php echo esc_attr($post_type); ?>">
                <?php } ?>
            </form> 
        </div>
        <div class="recipe-filters">
            <form method="post" enctype="multipart/form-data">
                <button type="submit" class="recipe-filter white-bg" name="filterrecipe" id="all-food-filter" href="#" data-action="filter" data-type="categories" value="all" data-value="all"> 
                    <i class="fas fa-utensils" style="color: <?php echo "$color1" ?>;"></i>
                </button>
            </form>
            <form method="post" enctype="multipart/form-data" class="salty">
                <button type="submit" class="recipe-filter white-bg" name="filterrecipe" id="salty-food-filter" href="#" data-action="filter" data-type="categories" value="salty" data-value="salty">
                    <i class="fas fa-hamburger" style="color: <?php echo "$color1" ?>;"></i>
                </button>
            </form>
            <form method="post" enctype="multipart/form-data">
                <button type="submit" class="recipe-filter white-bg" name="filterrecipe" id="sweet-food-filter" href="#" data-action="filter" data-type="categories" value="sweet" data-value="sweet"> 
                    <i class="fas fa-ice-cream" style="color: <?php echo "$color1" ?>;"></i>
                </button>
            </form>
            <button class="recipe-filter trash white-bg" id="delete-all-shoplist" data-toggle="modal" data-target="#deleteAllModal">
                <i class="far fa-trash-alt" style="color: <?php echo "$color2" ?>;"></i>
            </button>
        </div>
    <div class="contentarea reseptini white-bg" id="pagecontent">
        <div class="tab-content" id="tabContent">
            <div id="accordion" class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-home-tab">

                    <?php
                        if(isset($_POST['filterrecipe'])) {
                            $recipetype = $_POST['filterrecipe'];
                            include 'assets/sections/recipe-'.$recipetype.'-card.php';
                        } else {
                            include 'assets/sections/recipe-all-card.php';
                        };
                    ?>

            </div>
            <div id="recipeareaid" class="recipe-area tab-pane fade" role="tabpanel" aria-labelledby="pills-profile-tab">

                <?php 

                    $userid = get_current_user_id();

                    $args = array(
                        'post_type' => 'shoplist',
                        'posts_per_page' => 1,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'author' => $userid,
                    );

                    $shoplists = new WP_Query($args);
                    while ($shoplists->have_posts()) {
                    $shoplists->the_post();

                    // Include shoplist rows custom posts with repeater
                    include 'assets/sections/shoplist-rows.php';

                    }
                    wp_reset_query();
                ?>

            </div>
            <div id="searchresult" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-search-tab">
                <div id="datafetch">

                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'assets/sections/user-settings.php';
?>



<?php get_footer(); ?>