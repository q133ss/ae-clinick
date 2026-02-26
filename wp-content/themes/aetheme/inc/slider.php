<?php

function slider_post_type() {
    $labels = array(
        'name'                => _x( 'Слайдер', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Слайдер', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Слайдеры', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'Все Слайдер', 'twentythirteen' ),
        'view_item'           => __( 'Смотреть услугу', 'twentythirteen' ),
        'add_new_item'        => __( 'Добавить новые Слайдер', 'twentythirteen' ),
        'add_new'             => __( 'Добавить услугу', 'twentythirteen' ),
        'edit_item'           => __( 'Ред. услугу', 'twentythirteen' ),
        'update_item'         => __( 'Загрузить фото', 'twentythirteen' ),
        'search_items'        => __( 'Поиск Слайдер', 'twentythirteen' ),
        'not_found'           => __( 'Не найдено', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
    
        'menu_icon' =>  'dashicons-format-gallery',
        'label'               => __( 'slider', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array(  'title', 'thumbnail',  'thumbnail' ),
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

    register_post_type( 'slider', $args
 );

}
 
add_action( 'init', 'slider_post_type', 0 );

function my_meta_box_post2() {
    add_meta_box( 'my-meta-box-id1', 'Дополнительные поля', 'my_meta_box2', 'slider', 'normal', 'high' );
   
} add_action( 'add_meta_boxes', 'my_meta_box_post2' );

function my_meta_box2( $post ) {

    $title1 = get_post_meta( $post->ID, 'title1', true );
    $title1id = get_post_meta( $post->ID, 'title1id', true );
     $title2 = get_post_meta( $post->ID, 'title2', true );
    $title2id = get_post_meta( $post->ID, 'title2id', true );
    $textslider = get_post_meta( $post->ID, 'textslider', true );
    $buttonname = get_post_meta( $post->ID, 'buttonname', true );
    $buttonlink = get_post_meta( $post->ID, 'buttonlink', true );

    echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Заголовок 1: </strong>
 </label><br>
 <input type="text" name="title1" id="title1" value="' .$title1. '" />';
 echo '<br>';

     echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>ID Заголовка 1: </strong>
 </label><br>
 <input type="text" name="title1id" id="title1id" value="' .$title1id. '" />';
 echo '<br>';



     echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Заголовок 2: </strong>
 </label><br>
 <input type="text" name="title2" id="title2" value="' .$title2. '" />';
 echo '<br>';

     echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>ID Заголовка 2: </strong>
 </label><br>
 <input type="text" name="title2id" id="title2id" value="' .$title2id. '" />';
 echo '<br>';

    echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Содержимое слайдера:  </strong>
 </label><br>
 <textarea name="textslider" id="textslider" style="height:200px; width:100%;" />' .$textslider. '</textarea>';
 echo '<br>';

     echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Имя кнопки: </strong>
 </label><br>
 <input type="text" name="buttonname" id="buttonname" value="' .$buttonname. '" />';
 echo '<br>';

      echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Ссылка кнопки: </strong>
 </label><br>
 <input type="text" name="buttonlink" id="buttonlink" value="' .$buttonlink. '" />';
 echo '<br>';

    }

    add_action('save_post', 'so_save_metabox2');

function so_save_metabox2(){  
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

    if(isset($_POST["textslider"])){
        $selected = $_POST['textslider'];
        update_post_meta($post->ID, 'textslider', $selected);
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