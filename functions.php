<?php
/*
  ======================================
    Include scripts
  ======================================
 */

function clf_script_enqueue(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'3.3.5', 'all');
    wp_enqueue_style('Fontawesome', get_template_directory_uri().'/css/font-awesome.css', array(),'3.3.5', 'all');
    wp_enqueue_style('Animate-css', get_template_directory_uri().'/css/animate.css', array(),'3.3.5', 'all');
    wp_enqueue_style('Montez-font', get_template_directory_uri().'/css/Montez-Regular.css', array(),'3.3.5', 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', array(),'3.3.5', 'all');
    
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', array(), '1.12.1', true);
    wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/js/jquery.migrate.js', array(), '1.12.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.12.1', true);
    wp_enqueue_script('imageloaded', get_template_directory_uri().'/js/jquery.imagesloaded.min.js', array(), '1.12.1', true);
    wp_enqueue_script('retina', get_template_directory_uri().'/js/retina-1.1.0.min.js', array(), '1.12.1', true);
    wp_enqueue_script('scroll', get_template_directory_uri().'/js/plugins-scroll.js', array(), '1.12.1', true);
    wp_enqueue_script('waypoint', get_template_directory_uri().'/js/waypoint.min.js', array(), '1.12.1', true);
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array(), '1.12.1', true);
}
add_action('wp_enqueue_scripts','clf_script_enqueue');


/*
  ======================================
    Activate menus
  ======================================
 */

function clf_theme_setup(){
    add_theme_support('menus');

    register_nav_menu('accessoires','Accessoires');
    register_nav_menu('carterie','Carterie');
    register_nav_menu('papeterie','Papeterie');
}
add_action('init','clf_theme_setup');


/*
  ======================================
    Sidebar functions
  ======================================
 */
function clf_widget_setup(){
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Menu standard',
            'before_widget' => '<section id="%1$s" class="widget %2$s section">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
}
add_action('init','clf_widget_setup');



/*
  ======================================
    Theme support functions
  ======================================
 */

//To add custom background to the appearance panel
//add_theme_support('custom-background');
//To add custom header to the appearance panel
add_theme_support('custom-header');
//To add featured image to the post options
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('service','image','video'));

/*
  ======================================
    Custom post type
  ======================================
 */

function clf_carousel_post_type(){
    $labels = array(
        'name' => 'Page d\'accueil',
        'singular_name' => 'Slide',
        'add_new' => 'Ajouter un slide',
        'all_items' => 'Tous les slides',
        'add_new_item' => 'Ajouter un slide',
        'edit_item' => 'Modifier slide',
        'new_item' => 'Nouveau slide',
        'featured_image ' => 'Photo',
        'view_item' => 'Voir le slide',
        'search_item' => 'Rechercher un slide',
        'not_found' => 'Aucun slide trouvé',
        'not_found_in_trash' => 'Aucun slide trouvé dans la corbeille',
        'parent_item_colon' => 'Slide parent'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'pubicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'slide'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array(
            'title',
            'thumbnail',
        ),
        'menu_position' => 6,
        'exclude_from_search' => false
    );
    register_post_type('slide', $args);
}

function clf_produits_post_type(){
    $labels = array(
        'name' => 'Nos produits',
        'singular_name' => 'Produit',
        'add_new' => 'Ajouter un produit',
        'all_items' => 'Tous les produits',
        'add_new_item' => 'Ajouter un produit',
        'edit_item' => 'Modifier produit',
        'new_item' => 'Nouveau produit',
        'featured_image ' => 'Photo',
        'view_item' => 'Voir le produit',
        'search_item' => 'Rechercher un produit',
        'not_found' => 'Aucun produit trouvé',
        'not_found_in_trash' => 'Aucun produit trouvé dans la corbeille',
        'parent_item_colon' => 'Produit parent'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'pubicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'produit'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('categorie'),
        'menu_icon' => 'dashicons-products',
        'supports' => array(
            'title',
            'thumbnail',
        ),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('produit', $args);
}

add_action('init','clf_carousel_post_type');
add_action('init','clf_produits_post_type');

function clf_custom_taxonomies() {
    //Add new taxonomy hierarchical
    $labels = array(
        'name' => 'Catégories',
        'singular_name' => 'Catégorie',
        'search_items' => 'Rechercher catégories',
        'all_items' => 'Toute les catégories',
        'parent_item' => 'Catégorie parent',
        'parent_item_colon' => 'Catégorie parent:',
        'edit_item' => 'Modifier une catégorie',
        'update_item' => 'Mettre à jour une catégorie',
        'add_new_item' => 'Ajouter une nouvelle catégorie de produits',
        'new_item_name' => 'Nouveau nom de catégorie',
        'menu_name' => 'Catégories',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'categorie')
    );

    register_taxonomy('categorie', array('produit','page'), $args);
}
add_action('init','clf_custom_taxonomies');

/*
  ======================================
    Include walker file
  ======================================
 */

/*require get_template_directory().'/inc/walker.php';*/