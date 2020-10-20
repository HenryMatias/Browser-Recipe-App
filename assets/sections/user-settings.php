<?php 
    $args = array(
    'post_type' => 'setting',
    'posts_per_page' => 1000,
    'orderby' => 'date',
    'order' => 'ASC',
    );
    $settings = new WP_Query($args);
    while ($settings->have_posts()) {
    $settings->the_post();

    if( $post->post_author == $current_user->ID ) {
?>

<div class="user-settings">
<form method="post" enctype="multipart/form-data">
<input type="hidden" name="settingsid" value="<?php echo get_the_ID(); ?>">
<input type="hidden" id="activetheme" name="activetheme" value="<?php echo get_field('aktiivinen_teema'); ?>">
<div id="settings">
    <div class="image">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" value="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" name="presentimage" alt="">
        <div class="changeimg">
            <input id="newimg" type="file" name="newimage">
            <label for="newimg"><i class="fas fa-camera"></i></label>
        </div>
    </div>
    <div class="setting-area">
        <p><?php pll_e('Nimi'); ?></p>
        <input id="name" name="newname" type="text" value="<?php echo get_field('nimi'); ?>">
    </div>
    <div class="setting-area">
        <p><?php pll_e('Sahkoposti'); ?></p>
        <input id="email" name="newemail" type="email" value="<?php echo get_field('sahkoposti'); ?>">
    </div>
    <div class="setting-area">
        <p><?php pll_e('Kieli'); ?></p>
        <?php pll_the_languages(array('dropdown'=>1)); ?>
    </div>
    <div class="setting-area">
        <p><?php pll_e('Salasana'); ?></p>
        <input id="name" type="password" value="visitor">
    </div>
    <div class="setting-area">
        <div class="slider" id="themeslider">
        <p><?php pll_e('Oletus Teema'); ?></p>
        <label class="toggle-control">
            <input type="checkbox" onclick="settingCheckbox()" name="maintheme" id="maintheme" <?php echo get_field('aktiivinen_teema'); ?>>
            <span class="control"></span>
        </label>
        </div>
        <div class="secondary-theme" id="secondtheme">
            <div class="first-setting">
                <p><?php pll_e('Ensisijainen Vari'); ?></p>
                <input type="color" name="newcolor1" value="<?php echo get_field('ensimmainen_vari'); ?>">
            </div>
            <div class="second-setting">
                <p><?php pll_e('Toinen Vari'); ?></p>
                <input type="color" name="newcolor2" value="<?php echo get_field('toinen_vari'); ?>">
            </div>
        </div>
    </div>
    <div class="verifications">
        <div class="setting-area">
            <button class="white-bg" name="newsettings" type="submit"><?php pll_e('Tallenna Muutokset'); ?></button>
        </div>
        <div class="setting-area">
            <a href="<?php pll_e('To Git Linkki'); ?>" target="_blank" class="white-bg"><?php pll_e('To Git'); ?></a>
        </div>
    </div>
</div>
</form>
</div>

<?php
    }
}
wp_reset_query();
?>