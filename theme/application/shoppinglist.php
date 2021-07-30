<?php



    // adding new item to shoplist support --> This function sends all the data of the shop list from the shop list modal to the shoplist custom post

    if(isset($_POST['shopaines1'])) {

        $s = 1;
        $aoslr = $_POST['amountofshoplistrows'];

        for ($x = 0; $x < $aoslr; $x++) {

            $shoplistid = $_POST['shopwpid'];

            $row = array(
                'ostettava_maara' => $_POST['shopvalue' . $s],
                'ostettava_yksikko'  => $_POST['shopunit' . $s],
                'ostettava_tuote'  => $_POST['shopaines' . $s],
            );
            
            add_row('ostettavat_tuotteet', $row, $shoplistid);

            $s++;

        }
    };


    // adding remove row to shoplist --> This function removes a specific row from a shoplists' custom post in WordPress

    if(isset($_POST['submitsingulardelete'])) {
        
        function singular_delete() {

            $post_id = $_POST['shoplistid'];
            $rowtodelete = $_POST['shoplistrowindex'];

            delete_row('ostettavat_tuotteet', $rowtodelete, $post_id);

        }

        add_action('init', 'singular_delete');

    };



    //////////////////////////////////////////////////////////
    ////////       remove all rows from shoplist      ////////
    ////////    --> This function removes             ////////
    ////////    all the rows from a shoplists'        ////////
    ////////    custom post in WordPress              ////////
    //////////////////////////////////////////////////////////


    if(isset($_POST['delete-all-button'])) {
        

        $post_id = $_POST['deletewholeshoplist'];
        $repeater = get_field('ostettavat_tuotteet', $post_id);
        $first = array_shift($repeater);
        
        update_field('ostettavat_tuotteet', $first, $post_id);

    };


    //////////////////////////////////////////////////////////
    ////////       adding add to cart to recipes      ////////
    ////////    --> This function sends items' data   ////////
    ////////    from the recipes' listing to the      ////////
    ////////    shoplist custom post in WordPress     ////////
    //////////////////////////////////////////////////////////


    if(isset($_POST['submitsingularadd'])) {

        $userid = get_current_user_id();

        global $wpdb;
        $row = $wpdb->get_results(
	    $wpdb->prepare(
            "SELECT *
            FROM {$wpdb->prefix}posts
            WHERE (post_author = %d AND post_type = 'shoplist')
            ",
		    $userid
	    ), ARRAY_A
        );

        $postid = $row[0]['ID'];

        $row = array(
            'ostettava_maara' => $_POST['listamount'],
            'ostettava_yksikko'  => $_POST['listunit'],
            'ostettava_tuote'  => $_POST['listingredient'],
        );
        
        add_row('ostettavat_tuotteet', $row, $postid);

    };