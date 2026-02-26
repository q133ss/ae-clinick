<?php

function tech_post_type() {
    $labels = array(
        'name'                => _x( 'Доп. настройки', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Доп. настройки', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Доп. настройки', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'Все Доп. настройки', 'twentythirteen' ),
        'view_item'           => __( 'Смотреть Доп. настройки', 'twentythirteen' ),
        'add_new_item'        => __( 'Добавить новые Доп. настройки', 'twentythirteen' ),
        'add_new'             => __( 'Добавить Доп. настройки', 'twentythirteen' ),
        'edit_item'           => __( 'Ред. Доп. настройки', 'twentythirteen' ),
        'update_item'         => __( 'Загрузить фото', 'twentythirteen' ),
        'search_items'        => __( 'Поиск Доп. настройки', 'twentythirteen' ),
        'not_found'           => __( 'Не найдено', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
    
        'menu_icon' =>  'dashicons-format-gallery',
        'label'               => __( 'tech', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array(  'title', 'editor', 'thumbnail',  'thumbnail' ),
        'show_in_rest' => true, // gutenberg
        'taxonomies'          => array( 'genres' ),
     'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
   
    );

    register_post_type( 'tech', $args
 );

}
 
add_action( 'init', 'tech_post_type', 0 );

function my_meta_box_post5() {
    add_meta_box( 'my-meta-box-id1', 'Дополнительные поля', 'my_meta_box5', 'tech', 'normal', 'high' );
   
} add_action( 'add_meta_boxes', 'my_meta_box_post5' );

function my_meta_box5( $post ) {

    $title1 = get_post_meta( $post->ID, 'title1', true );
    $title1id = get_post_meta( $post->ID, 'title1id', true );
     $title2 = get_post_meta( $post->ID, 'title2', true );
    $title2id = get_post_meta( $post->ID, 'title2id', true );
    $texttech = get_post_meta( $post->ID, 'texttech', true );
    $buttonname = get_post_meta( $post->ID, 'buttonname', true );
    $buttonlink = get_post_meta( $post->ID, 'buttonlink', true );

    }

    add_action('save_post', 'so_save_metabox5');

function so_save_metabox5(){  
    global $post;

if(isset($_POST["title1"])){
        $selected = $_POST['title1'];
        update_post_meta($post->ID, 'title1', $selected);
    }

    if(isset($_POST["title1id"])){
        $selected = $_POST['title1id'];
        update_post_meta($post->ID, 'title1id', $selected);
    }

if(isset($_POST["title2"])){
        $selected = $_POST['title2'];
        update_post_meta($post->ID, 'title2', $selected);
    }

    if(isset($_POST["title2id"])){
        $selected = $_POST['title2id'];
        update_post_meta($post->ID, 'title2id', $selected);
    }

    if(isset($_POST["texttech"])){
        $selected = $_POST['texttech'];
        update_post_meta($post->ID, 'texttech', $selected);
    }

    if(isset($_POST["buttonname"])){
        $selected = $_POST['buttonname'];
        update_post_meta($post->ID, 'buttonname', $selected);
    }

    if(isset($_POST["buttonlink"])){
        $selected = $_POST['buttonlink'];
        update_post_meta($post->ID, 'buttonlink', $selected);
    }

}