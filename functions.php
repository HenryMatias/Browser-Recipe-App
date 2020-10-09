<?php


    ////////////////////////////////////////////////////////////////
    ////////         adding the CSS and JS files         ///////////
    ////////////////////////////////////////////////////////////////

    function reseptini_setup() {

    // Google fonts and Fontawesome
    wp_enqueue_style('google-fonts-lato', '//fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap');
    wp_enqueue_style('google-fonts-pacifico', '//fonts.googleapis.com/css2?family=Pacifico&display=swap');
    wp_enqueue_style('google-fonts-baloo-tammudu-2', '//fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;800&display=swap');
    wp_enqueue_style('google-fonts-nunito', '//fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');
    wp_enqueue_script("fontawesome", 'https://kit.fontawesome.com/0c707c1c12.js');

    // Main style and js
    wp_enqueue_script("main", get_theme_file_uri('/assets/js/script.js'), NULL, '1.0.0', true);
    wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), 'microtime()', 'all');
    wp_enqueue_style('styles'); // Enqueue it!
    // --> Change microtime to version number (for example '1.1') before release!

    //Bootstrap
    wp_enqueue_style("bootstrap-stylesheet", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_script("jquery", 'https://code.jquery.com/jquery-3.5.1.min.js');
    wp_enqueue_script("jquery-form-plugin", 'https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js');
    wp_enqueue_script("bootstrap-popper", 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script("bootstrap-js", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');

    }

    add_action('wp_enqueue_scripts', 'reseptini_setup');






    //////////////////////////////////////////////////////////
    ////////            adding menu support           ////////
    //////////////////////////////////////////////////////////


    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
      }
      add_action( 'init', 'wpb_custom_new_menu' );


    //////////////////////////////////////////////////////////
    ////////            adding menu support           ////////
    //////////////////////////////////////////////////////////


    function arphabet_widgets_init() {

        register_sidebar( array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar_1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ) );

    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );


    ///////////////////////////////////////////////////////////
    ////////         adding thumbnail support         /////////
    ///////////////////////////////////////////////////////////


    function ar_init() {
        add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'ar_init');


    //////////////////////////////////////////////////////////
    ////////           adding recipe support          ////////
    ////////    --> This function makes an custom     ////////
    ////////    post type to WordPress where all      ////////
    ////////    the recipes are going to be sent.     ////////
    //////////////////////////////////////////////////////////


    function reseptini_reseptit_custom_post_type() {
        add_theme_support( 'post-thumbnails' );
        register_post_type('recipe',
            array(
                'rewrite'   => array('slug' => 'recipes'),
                'labels'    => array(
                    'name'          => 'Reseptit',
                    'singular_name' => 'Reseptit',
                    ),
                'menu_icon'     => 'dashicons-format-aside',
                'public'        => true,
                'has_archive'   => true,
                'supports'      => array(
                    'title', 'thumbnail',
                )
            )
        );
    }
    add_action('init', 'reseptini_reseptit_custom_post_type');


    //////////////////////////////////////////////////////////
    ////////       adding recipe send support         ////////
    ////////    --> This function sends all the       ////////
    ////////    data of the recipes from the recipes  ////////
    ////////    modal to the Reseptit Custom Post.    ////////
    //////////////////////////////////////////////////////////


    if(isset($_POST['newrecipename'])) {

        add_theme_support( 'post-thumbnails', array('recipe'));

        $my_post = array(
            'post_type'     => 'recipe',
            'post_title'    => $_POST['newrecipename'],
            'post_status'   => 'publish',
            );

        $post_id = wp_insert_post($my_post);


        //Removes whitespaces from recipe a name before sending it to custom post
        $nametobetrimmed = $_POST['newrecipename'];
        $trimmedrecipe = str_replace(' ', '', $nametobetrimmed);

        $field_key = "reseptin_nimi";
        $value = $trimmedrecipe;
        update_field( $field_key, $value, $post_id );

        $field_key = "laji";
        $value = $_POST['recipestyle'];
        update_field( $field_key, $value, $post_id );

        //Goes trough all the ingredients that has been added to a ingredients table
        //Loop starts 
        $i = 1;
        $aor = $_POST['amountofrows'];

        for ($x = 0; $x < $aor; $x++) {

            $row = array(
                'maara' => $_POST['valueid' . $i],
                'yksikko'  => $_POST['unitid' . $i],
                'aineksen_nimi'  => $_POST['ainesid' . $i],
            );
            
            add_row('ainekset', $row, $post_id);

            $i++;
          }
        //Loop ends 
          
        //Goes trough all the phases that has been added to a phases table
        //Loop starts 
        $u = 1;
        $aoa = $_POST['amountofareas'];

        for ($x = 0; $x < $aoa; $x++) {

        $row = array(
                'vaihe' => $_POST['vaiheid' . $u],
            );
            
            add_row('ohje', $row, $post_id);

            $u++;
        }
        //Loop ends
    };


    //////////////////////////////////////////////////////////
    ////////         adding shoplist support          ////////
    ////////    --> This function makes an custom     ////////
    ////////    post type to WordPress where all      ////////
    ////////    the shop list items are been sent.    ////////
    //////////////////////////////////////////////////////////


    function reseptini_ostoslista_custom_post_type() {
        add_theme_support( 'post-thumbnails' );
        register_post_type('shoplist',
            array(
                'rewrite'   => array('slug' => 'shoplists'),
                'labels'    => array(
                    'name'          => 'Ostoslista',
                    'singular_name' => 'Ostoslista',
                    ),
                'menu_icon'     => 'dashicons-cart',
                'public'        => true,
                'has_archive'   => true,
                'supports'      => array(
                    'title', 'thumbnail',
                )
            )
        );
    }
    add_action('init', 'reseptini_ostoslista_custom_post_type');


    //////////////////////////////////////////////////////////
    ////////         adding settings support          ////////
    ////////    --> This function makes an custom     ////////
    ////////    post type to WordPress where all      ////////
    ////////    the rules of settings are saved.      ////////
    //////////////////////////////////////////////////////////


    function reseptini_asetukset_custom_post_type() {
        add_theme_support( 'post-thumbnails' );
        register_post_type('setting',
            array(
                'rewrite'   => array('slug' => 'settings'),
                'labels'    => array(
                    'name'          => 'Käyttäjä',
                    'singular_name' => 'Käyttäjä',
                    ),
                'menu_icon'     => 'dashicons-admin-tools',
                'public'        => true,
                'has_archive'   => true,
                'supports'      => array(
                    'title', 'thumbnail',
                )
            )
        );
    }
    add_action('init', 'reseptini_asetukset_custom_post_type');


    //////////////////////////////////////////////////////////
    ////////    adding new item to shoplist support   ////////
    ////////    --> This function sends all the       ////////
    ////////    data of the shop list from the shop   ////////
    ////////    list modal to the shoplist Cust.post  ////////
    //////////////////////////////////////////////////////////


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


    //////////////////////////////////////////////////////////
    ////////       adding remove row to shoplist      ////////
    ////////    --> This function removes             ////////
    ////////    a specific row from a shoplists'      ////////
    ////////    custom post in WordPress              ////////
    //////////////////////////////////////////////////////////


    if(isset($_POST['submitsingulardelete'])) {

        $post_id = $_POST['shoplistid'];
        $rowtodelete = $_POST['shoplistrowindex'];

        delete_row('ostettavat_tuotteet', $rowtodelete, $post_id);

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

        // Live versiossa numero on 40
        $shoplistid = 96;

        $row = array(
            'ostettava_maara' => $_POST['listamount'],
            'ostettava_yksikko'  => $_POST['listunit'],
            'ostettava_tuote'  => $_POST['listingredient'],
        );
        
        add_row('ostettavat_tuotteet', $row, $shoplistid);

    };


    /////////////////////////////////////////////////////////////
    ////////           update user settings              ////////
    ////////    --> This function sends all the          ////////
    ////////    data from the settings to the settings   ////////
    ////////    custom post in WordPress.                ////////
    /////////////////////////////////////////////////////////////


    if(isset($_POST['newsettings'])) {
        

        $post_id = $_POST['settingsid'];
        $name_value = $_POST['newemail'];
        $name_value = $_POST['newname'];
        $name_value = $_POST['newimage'];

        $field_key = "nimi";
        $value = $_POST['newname'];
        update_field( $field_key, $value, $post_id );

        $field_key = "sahkopost";
        $value = $_POST['newemail'];
        update_field( $field_key, $value, $post_id );

        $field_key = "ensimmainen_vari";
        $value = $_POST['newcolor1'];
        update_field( $field_key, $value, $post_id );

        $field_key = "toinen_vari";
        $value = $_POST['newcolor2'];
        update_field( $field_key, $value, $post_id );

        $field_key = "aktiivinen_teema";
        $value = $_POST['activetheme'];
        update_field( $field_key, $value, $post_id );

        if(!function_exists('wp_generate_attachement_metadata')) {
            require_once(ABSPATH . "wp-admin" . '/includes/image.php');
            require_once(ABSPATH . "wp-admin" . '/includes/file.php');
            require_once(ABSPATH . "wp-admin" . '/includes/media.php');
        }
            if ($_FILES) {
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                        return "upload error : " . $_FILES[$file]['error'];
                    }
                    $attach_id = media_handle_upload( $file, $post_id);
                }
            }
            if ($attach_id > 0) {
                update_post_meta($post_id,'_thumbnail_id',$attach_id);
            }
    };


    //////////////////////////////////////////////////////////
    ////////            String translation            ////////
    ////////    --> This adds all the translations    ////////
    ////////    to Polylangs string translations      ////////
    ////////    that can be modified in WP.           ////////        
    //////////////////////////////////////////////////////////


    include 'assets/sections/string-translations.php';


    //////////////////////////////////////////////////////////
    ////////       adding search bar ajax support     ////////
    //////////////////////////////////////////////////////////


    // the ajax function
    add_action('wp_ajax_data_fetch' , 'data_fetch');
    add_action('wp_ajax_nopriv_data_fetch','data_fetch');
    function data_fetch(){

        $the_query = new WP_Query( array( 'posts_per_page' => 5, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'recipe' ) );
        if( $the_query->have_posts() ) :
            while( $the_query->have_posts() ): $the_query->the_post(); ?>

                <?php
                    include 'assets/sections/search-results-show.php';
                ?>

            <?php endwhile;
            wp_reset_postdata();  
        else: 
            echo '<h3>Ei tuloksia haulle</h3>';
        endif;

        die();
    }


    // add the ajax fetch js
    add_action( 'wp_footer', 'ajax_fetch' );
    function ajax_fetch() {
    ?>
    <script type="text/javascript">
    function fetchResults(){
        var keyword = jQuery('#searchInput').val();
        if(keyword == ""){
            jQuery('#datafetch').html("");
        } else {
            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: { action: 'data_fetch', keyword: keyword  },
                success: function(data) {
                    jQuery('#datafetch').html( data );
                }
            });
        }
        

    }
    </script>

    <?php
    }

