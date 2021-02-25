<?php

    ///////////////////////////////////////////////////////////
    ////////     adding Recipe App user support       /////////
    ////////     --> This function creates a custom   /////////
    ////////     user type to Repestini aoolication   /////////
    ////////     and he will be given limited access  /////////
    ////////     to WordPress                         /////////
    ///////////////////////////////////////////////////////////


function receptini_create_custom_user() {

    // This part creates a role called Recipe App user and 
    // he will be given access to make changes only to
    // custom posts in WordPress 

    add_role('recipeuser', 'Reseptini käyttäjä');
    $app_user = get_role('recipeuser');
    $app_user->add_cap('read');
    $app_user->add_cap('edit_recipe');
    $app_user->add_cap('edit_recipes');
    $app_user->add_cap('read_private_recipe');
    $app_user->add_cap('read_private_recipes');
    $app_user->add_cap('edit_private_recipe');
    $app_user->add_cap('edit_private_recipes');
    $app_user->add_cap('publish_recipes');
    $app_user->add_cap('delete_recipe');
    $app_user->add_cap('edit_setting');
    $app_user->add_cap('edit_settings');
    $app_user->add_cap('publish_setting');
    $app_user->add_cap('publish_settings');
    $app_user->add_cap('edit_shoplist');
    $app_user->add_cap('edit_shoplists');
    $app_user->add_cap('read_private_page');
    $app_user->add_cap('read_private_pages');
    $app_user->add_cap('publish_setting');
    $app_user->add_cap('edit_setting');
    $app_user->add_cap('read_private_settings');


    // This part of a code gives administrator an access to
    // handle all the posts that are been sent to custom
    // posts in Wordpress

    $admin = get_role('administrator');
    $admin->add_cap('edit_recipe');
    $admin->add_cap('edit_recipes');
    $admin->add_cap('publish_recipes');
    $admin->add_cap('delete_recipes');
    $admin->add_cap('edit_others_recipe');
    $admin->add_cap('edit_others_recipes');
    $admin->add_cap('edit_setting');
    $admin->add_cap('edit_settings');
    $admin->add_cap('publish_setting');
    $admin->add_cap('delete_setting');
    $admin->add_cap('publish_settings');
    $admin->add_cap('delete_settings');
    $admin->add_cap('publish_others_setting');
    $admin->add_cap('delete_others_setting');
    $admin->add_cap('publish_others_settings');
    $admin->add_cap('delete_others_settings');
    $admin->add_cap('edit_others_setting');
    $admin->add_cap('edit_others_settings');
    $admin->add_cap('edit_shoplist');
    $admin->add_cap('edit_shoplists');
    $admin->add_cap('edit_others_shoplist');
    $admin->add_cap('edit_others_shoplists');

};

add_action('init', 'receptini_create_custom_user');