<?php

function personal_post_type() {
    $labels = array(
        'name'                => _x( 'Персонал', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Персонал', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Персонал', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'Весь персонал', 'twentythirteen' ),
        'view_item'           => __( 'Смотреть персонал', 'twentythirteen' ),
        'add_new_item'        => __( 'Добавить новый персонал', 'twentythirteen' ),
        'add_new'             => __( 'Добавить персонал', 'twentythirteen' ),
        'edit_item'           => __( 'Ред. персонал', 'twentythirteen' ),
        'update_item'         => __( 'Загрузить фото', 'twentythirteen' ),
        'search_items'        => __( 'Поиск Персонал', 'twentythirteen' ),
        'not_found'           => __( 'Не найдено', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
    
        'menu_icon' =>  'dashicons-businessman',
        'label'               => __( 'personal', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'editor', 'title', 'thumbnail',  'thumbnail' ),
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

    register_post_type( 'personal', $args
 );

}
 
add_action( 'init', 'personal_post_type', 0 );

function my_meta_box_post3() {
    add_meta_box( 'my-meta-box-id1', 'Дополнительные поля', 'my_meta_box3', 'personal', 'normal', 'high' );
   
} add_action( 'add_meta_boxes', 'my_meta_box_post3' );

function my_meta_box3( $post ) {

    $dolzhnost = get_post_meta( $post->ID, 'dolzhnost', true );
    $fio = get_post_meta( $post->ID, 'fio', true );
     $linkzapis = get_post_meta( $post->ID, 'linkzapis', true );

    echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Должность: </strong>
 </label><br>
 <input type="text" name="dolzhnost" id="dolzhnost" value="' .$dolzhnost. '" />';
 echo '<br>';

     echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>ФИО </strong>
 </label><br>
 <input type="text" name="fio" id="fio" value="' .$fio. '" />';
 echo '<br>';

     echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Ссылка для записи: </strong>
 </label><br>
 <input type="text" name="linkzapis" id="linkzapis" value="' .$linkzapis. '" />';
 echo '<br>';

    }

    add_action('save_post', 'so_save_metabox3');

function so_save_metabox3(){  
    global $post;

if(isset($_POST["dolzhnost"])){
        $selected = $_POST['dolzhnost'];
        update_post_meta($post->ID, 'dolzhnost', $selected);
    }

    if(isset($_POST["fio"])){
        $selected = $_POST['fio'];
        update_post_meta($post->ID, 'fio', $selected);
    }

if(isset($_POST["linkzapis"])){
        $selected = $_POST['linkzapis'];
        update_post_meta($post->ID, 'linkzapis', $selected);
    }

}