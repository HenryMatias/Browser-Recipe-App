<?php 
    $args = array(
    'post_type' => 'recipe',
    'posts_per_page' => 1000,
    'orderby'   => 'title',
    'meta_key'  => 'laji',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key'     => 'laji',
            'value'   => array('makea'), // Tällä voidaan säätää haluttu filtteri
            'compare' => 'IN',
        ),
    ),
    );
    $recipes = new WP_Query($args);
    while ($recipes->have_posts()) {
    $recipes->the_post();

    if( $post->post_author == $current_user->ID ) {

?>


<div class="card">

    
    <?php
        // Removes white spaces from the title
    
        $title = get_field('reseptin_nimi');
        $recipe_title = str_replace(' ', '', $title);
    ?>

    <div class="card-header white-bg" id="headingOne<?php echo "$recipe_title"; ?>" data-toggle="collapse" data-target="#collapseOne<?php echo "$recipe_title"; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo "$recipe_title"; ?>">
        <h5 class="mb-0">
            <button class="btn btn-link" style="color: <?php echo "$color1" ?>;">
                <?php the_title(); ?>
            </button>
        </h5>
        <i class="fas fa-caret-down" style="color: <?php echo "$color1" ?>;"></i>
    </div>

    <div id="collapseOne<?php echo "$recipe_title"; ?>" class="collapse" aria-labelledby="headingOne<?php echo "$recipe_title"; ?>" data-parent="#accordion">
        <div class="card-body">
           <div class="recipe-wrapper">
               <div class="recipe-wrapper__ingredients">
                <?php if( have_rows('ainekset') ): ?>
                        <ul>
                        <?php while( have_rows('ainekset') ): the_row(); ?>
                            <li class="aines-listing">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="aines-row">
                                        <div>
                                            <input name="listamount" value="<?php the_sub_field('maara'); ?>">
                                            <input name="listunit" value="<?php the_sub_field('yksikko'); ?>">
                                        </div>
                                        <input name="listingredient" value="<?php the_sub_field('aineksen_nimi'); ?>">
                                    </div>
                                <button type="submit" name="submitsingularadd">
                                    <svg style="color: <?php echo "$color1" ?>;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                    </svg>
                                </button>
                                </form>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
               </div>
               <div class="recipe-wrapper__notes">
                    <?php if( have_rows('ohje') ): ?>
                        <ul>
                        <?php while( have_rows('ohje') ): the_row(); ?>
                            <li class="ohje-listing">
                                <div class="ohje-row">
                                    <p><?php the_sub_field('vaihe'); ?></p>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
               </div>
           </div>
        </div>
    </div>
</div>

<?php

        }
    }
    wp_reset_query();
    
?>