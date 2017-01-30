<?php

add_action( 'init', 'register_section_type' );
add_action( 'init', 'register_portfolio_type' );

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function register_section_type() {

    $labels = array(
        'name'                => "Sections",
        'singular_name'       => "Section",
        'add_new'             => "Ajouter une section à la page principale",
        'add_new_item'        => "Ajouter une nouvelle section",
        'edit_item'           => "Éditer la section",
        'new_item'            => "Nouvelle section",
        'view_item'           => "Voir la section",
        'search_items'        => "Rechercher la nouvelle section",
        'not_found'           => "Aucune section trouvee",
        'not_found_in_trash'  => "Aucune section trouvee dans la poubelle",
        'menu_name'           => "Sections",
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'lkes sections de la page principale',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'supports'            => array(
            'title', 'editor', 'author', 'thumbnail',
            'page-attributes', 'post-formats'
            )
    );

    register_post_type( 'sections', $args );
}

function register_portfolio_type() {

    $labels = array(
        'name'                => "Réalisations",
        'singular_name'       => "Réalisation",
        'add_new'             => "Ajouter une Réalisation à la page principale",
        'add_new_item'        => "Ajouter une nouvelle Réalisation",
        'edit_item'           => "Éditer la Réalisation",
        'new_item'            => "Nouvelle Réalisation",
        'view_item'           => "Voir la Réalisation",
        'search_items'        => "Rechercher la nouvelle Réalisation",
        'not_found'           => "Aucune Réalisation trouvee",
        'not_found_in_trash'  => "Aucune Réalisation trouvee dans la poubelle",
        'menu_name'           => "Portfolio",
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'les items du portfolio',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'supports'            => array(
            'title', 'editor', 'author', 'thumbnail',
            'page-attributes', 'post-formats'
            )
    );

    register_post_type( 'portfolio', $args );
}
?>