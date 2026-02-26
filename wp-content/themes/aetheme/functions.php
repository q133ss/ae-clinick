<?php 
require_once('inc/options.php');
//require_once('inc/options2.php');
//require_once('inc/slider.php');
require_once('inc/personal.php');
require_once('inc/tech.php');

add_theme_support( 'post-thumbnails' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'header', 'header menu' );
  register_nav_menu( 'footer1', 'footer menu 1' );
  register_nav_menu( 'footer2', 'footer menu 2' );
}

function uslugi_post_type() {
    $labels = array(
        'name'                => _x( 'Услуги', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Услуги', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Услуги', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'Все услуги', 'twentythirteen' ),
        'view_item'           => __( 'Смотреть услугу', 'twentythirteen' ),
        'add_new_item'        => __( 'Добавить новые услуги', 'twentythirteen' ),
        'add_new'             => __( 'Добавить услугу', 'twentythirteen' ),
        'edit_item'           => __( 'Ред. услугу', 'twentythirteen' ),
        'update_item'         => __( 'Загрузить фото', 'twentythirteen' ),
        'search_items'        => __( 'Поиск услуги', 'twentythirteen' ),
        'not_found'           => __( 'Не найдено', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
    
        'menu_icon' =>  'dashicons-portfolio',
        'label'               => __( 'uslugi', 'twentythirteen' ),
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

    register_post_type( 'uslugi', $args
 );

}
 
add_action( 'init', 'uslugi_post_type', 0 );

function my_meta_box_post() {
    add_meta_box( 'my-meta-box-id1', 'Дополнительные поля', 'my_meta_box1', 'uslugi', 'normal', 'high' );
   
} add_action( 'add_meta_boxes', 'my_meta_box_post' );

function my_meta_box1( $post ) {

    $icon1 = get_post_meta( $post->ID, 'icon1', true );
    $icon2 = get_post_meta( $post->ID, 'icon2', true );
    $bgtext = get_post_meta( $post->ID, 'bgtext', true );

    echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Иконка 1 (для главной): </strong>
 </label><br>
 <input type="text" name="icon1" id="icon1" value="' .$icon1. '" />';
 echo '<br>';

    echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Иконка 2 (виджета): </strong>
 </label><br>
 <input type="text" name="icon2" id="icon1" value="' .$icon2. '" />';
 echo '<br>';

    echo '<br>';
 echo '<label for="my_meta_box_text">
 <strong>Текст для "шапки":  </strong>
 </label><br>
 <textarea name="bgtext" id="bgtext" style="height:200px; width:100%;" />' .$bgtext. '</textarea>';
 echo '<br>';

    }

    add_action('save_post', 'so_save_metabox1');

function so_save_metabox1(){  
    global $post;

if(isset($_POST["icon1"])){
        $selected = $_POST['icon1'];
        update_post_meta($post->ID, 'icon1', $selected);
    }

    if(isset($_POST["icon2"])){
        $selected = $_POST['icon2'];
        update_post_meta($post->ID, 'icon2', $selected);
    }

    if(isset($_POST["bgtext"])){
        $selected = $_POST['bgtext'];
        update_post_meta($post->ID, 'bgtext', $selected);
    }

}

add_filter( 'excerpt_length', function(){
    return 10;
} );

add_filter('excerpt_more', function($more) {
    return ' ';
});

function main_send(){
    
$typeform = $_POST['typeform'];

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];
$usl = $_POST['usl'];
$time = $_POST['time'];

if($name) { $message1 = 'Имя: '.$name."\r\n"; }
if($phone) { $message1 .= 'Телефон: '.$phone."\r\n"; }
if($email) { $message1 .= 'E-mail: '.$email."\r\n"; }
if($date) { $message1 .= 'Дата: '.$date."\r\n"; }
if($usl) { $message1 .= 'Услуга: '.$usl."\r\n"; }
if($time) { $message1 .= 'Время: '.$time."\r\n"; }
if($message) { $message1 .= 'Сообщение: '.$message."\r\n"; }

// $tomail = 'wordpressnik.ya@gmail.com';
 $tomail = get_option('emailform-link');
if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
}

$uploadedfile       = $_FILES['file'];
$upload_overrides   = array( 'test_form' => false );
$movefile           = wp_handle_upload( $uploadedfile, $upload_overrides );

if( $movefile ) {
    //echo "File is valid, and was successfully uploaded.\n";
    //var_dump( $movefile);
    $attachments = $movefile[ 'file' ];
    wp_mail($tomail, $typeform, $message1, $headers, $attachments);
} else {
    echo "Possible file upload attack!\n";
}

}

add_action('wp_ajax_main', 'main_send');
add_action('wp_ajax_nopriv_main', 'main_send');

function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 5; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 5; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '<<'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '>>'; //текст ссылки "Следующая страница"
  $a['type'] = 'plain';

  if ($max > 1) echo '<div id="paginationnews" style="margin-bottom: 20px; text-align: center;" class="light-theme simple-pagination">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}

function hwl_home_pagesize( $query ) {

if( (! is_admin()) && (is_post_type_archive('uslugi')) && ($query->get('post_type') !== 'post') ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 15 );
        return;
    }
  
} 
add_action( 'pre_get_posts', 'hwl_home_pagesize', 1 );