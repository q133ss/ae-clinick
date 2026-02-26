<section id="uslugi">
<div class="zg"><h2 id="mainh2">Наши услуги</h2></div>
<div id="twosliders">
<div id="ulist"  data-aos="fade-up"   data-aos-duration="1000">
<div class="nn">Услуги</div>
 <?php	
$args = array(
	'numberposts' => 20,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'post_type'   => 'uslugi',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
$posts = get_posts( $args );
foreach($posts as $post){ setup_postdata($post);
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
 ?>	 
<div style="background-image: url(<?php echo get_post_meta( $post->ID, 'icon1', true ); ?>);"><?php the_title(); ?></div>
     <?php } wp_reset_postdata(); ?>
</div>
<div id="uslide"  data-aos="fade-up"   data-aos-duration="1000">
 <?php	
$args = array(
	'numberposts' => 20,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'post_type'   => 'uslugi',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
$posts = get_posts( $args );
foreach($posts as $post){ setup_postdata($post);
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
 ?>	 
<div>
	<div><a href="<?php echo get_permalink(); ?>"><img data-lazy="<?php echo $thumb_url[0]; ?>" alt="Услуги"></a></div>
	<div><a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a></div>
	<div><?php echo get_the_excerpt(); ?></div>
</div>
     <?php } wp_reset_postdata(); ?>
</div>
</div>
</section>