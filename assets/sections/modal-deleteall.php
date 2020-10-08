<!-- Modal -->
<div class="modal fade" id="deleteAllModal" tabindex="-1" role="dialog" aria-labelledby="newlistitemLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>Tyhjennä koko ostoskori?</p>
            </div>
            <div class="modal-footer">
                <?php 
                    $args = array(
                    'post_type' => 'shoplist',
                    'posts_per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    );
                    $shoplists = new WP_Query($args);
                    while ($shoplists->have_posts()) {
                    $shoplists->the_post();
                ?>
                <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="deletewholeshoplist" value="<?php echo get_the_ID(); ?>">
                    <button class="close-button white-bg" type="button" class="btn" data-dismiss="modal">Peruuta</button>
                    <button name="delete-all-button" class="send-button" type="submit" class="btn">Tyhjennä</button>
                </form>
                <?php
                    }
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</div>