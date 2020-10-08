<!-- Use this if you want to make a direct link -->
<!-- Remember to add two php tags; before echo and the_title -->
<!-- <a href=" echo esc_url( post_permalink() );">the_title();</a> -->


<div class="card">

    <div class="card-header" id="headingOne<?php echo get_field('reseptin_nimi'); ?>-search-result" data-toggle="collapse" data-target="#collapseOne<?php echo get_field('reseptin_nimi'); ?>-search-result" aria-expanded="true" aria-controls="collapseOne<?php echo get_field('reseptin_nimi'); ?>-search-result">
        <h5 class="mb-0">
            <button class="btn btn-link">
            <?php the_title(); ?>
            </button>
        </h5>
        <i class="fas fa-caret-down"></i>
    </div>

    <div id="collapseOne<?php echo get_field('reseptin_nimi'); ?>-search-result" class="collapse" aria-labelledby="headingOne<?php echo get_field('reseptin_nimi'); ?>-search-result" data-parent="#accordion">
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-ainekset-tab-<?php echo get_field('reseptin_nimi'); ?>-search-result" data-toggle="tab" href="#nav-ainekset-<?php echo get_field('reseptin_nimi'); ?>-search-result" role="tab" aria-controls="nav-ainekset-<?php echo get_field('reseptin_nimi'); ?>-search-result" aria-selected="true">Ainekset</a>
                    <a class="nav-item nav-link" id="nav-ohje-tab-<?php echo get_field('reseptin_nimi'); ?>-search-result" data-toggle="tab" href="#nav-profile-<?php echo get_field('reseptin_nimi'); ?>-search-result" role="tab" aria-controls="nav-profile-<?php echo get_field('reseptin_nimi'); ?>-search-result" aria-selected="false">Valmistus</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-ainekset-<?php echo get_field('reseptin_nimi'); ?>-search-result" role="tabpanel" aria-labelledby="nav-ainekset-tab-<?php echo get_field('reseptin_nimi'); ?>-search-result">
                


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
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                </svg>
                            </button>
                            </form>
                        </li>
                        <?php endwhile; ?>
                    </ul>
              <?php endif; ?>



                </div>
                <div class="tab-pane fade" id="nav-profile-<?php echo get_field('reseptin_nimi'); ?>-search-result" role="tabpanel" aria-labelledby="nav-profile-tab-<?php echo get_field('reseptin_nimi'); ?>-search-result">



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