<?php if( have_rows('ostettavat_tuotteet') ): ?>
    <div class="shoplist" id="shoplistid">
        <?php while( have_rows('ostettavat_tuotteet') ): the_row(); ?>
        <div class="shoplist-unit">
            <p style="color: <?php echo "$color2" ?>;"><?php the_sub_field('ostettava_tuote'); ?></p>
            <p style="color: <?php echo "$color2" ?>;"><?php the_sub_field('ostettava_maara'); ?></p>
            <p style="color: <?php echo "$color2" ?>;"><?php the_sub_field('ostettava_yksikko'); ?></p>
            <form method="post" action="index.php" enctype="multipart/form-data" class="remove">
            <input type="hidden" name="shoplistrowindex" value="<?php echo get_row_index(); ?>">
            <input type="hidden" name="shoplistid" value="<?php echo get_the_ID(); ?>">
                <button class="deletebutton" type="submit" name="submitsingulardelete">
                    <i class="far fa-trash-alt" style="color: <?php echo "$color2" ?>;"></i>
                </button>
            </form>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>