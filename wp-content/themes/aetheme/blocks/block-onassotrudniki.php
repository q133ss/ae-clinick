<section id="spissotr">
<div id="solist">
 <?php	
$args = array(
	'numberposts' => 20,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'post_type'   => 'personal',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
$posts = get_posts( $args );
foreach($posts as $post){ setup_postdata($post);
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
   $dolzhnost = get_post_meta( $post->ID, 'dolzhnost', true );
    $fio = get_post_meta( $post->ID, 'fio', true );
     $linkzapis = get_post_meta( $post->ID, 'linkzapis', true );
$slug = $post->post_name
     ?>
	<div class="s">
<div class="im"><div style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div></div>
<div class="oo">
<div><h4><?php echo $dolzhnost;?></h4></div>
<div><h3><?php echo $fio;?></h3></div>
<div><a data-fancybox data-src="#hidden-<?php echo $slug; ?>" href="javascript:;" ><?php echo get_the_content(); ?></a></div>
<div><a target="_blank" href="<?php echo $linkzapis; ?>"><button>Записаться</button></a></div>
<div style="display: none;max-width: 400px;" id="hidden-<?php echo $slug; ?>" >
<?php echo get_the_content(); ?>
</div>
</div>
</div>
  <?php } wp_reset_postdata(); ?>
</div>
</section>