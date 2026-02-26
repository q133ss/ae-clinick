<section id="mpnews">
	<div class="zg">	<h2 id="mainh2">Новости и акции</h2></div>
	<div id="nlist"  data-aos="fade-up"   data-aos-duration="1000">
	
 <?php	
$args = array(
	'numberposts' => 3,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
$posts = get_posts( $args );
foreach($posts as $post){ setup_postdata($post);

$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
 ?>	 

<div>
	<div><HR><a href="<?php echo get_permalink(); ?>" title
="<?php echo the_title(); ?>"><div class="bim lazyload" data-src="<?php echo $thumb_url[0]; ?>" style="background-image:url();"></div></a></div>
	<div><time><?php echo the_time('j F Y'); ?></time></div>
	<div align=center><a href="<?php echo get_permalink(); ?>"><h3><?php echo the_title(); ?></h3></a></div>
	<div><?php echo get_the_excerpt(); ?></div>
</div>

     <?php } wp_reset_postdata(); ?>

	</div>
	<div id="bt"  data-aos="fade-up"   data-aos-duration="1000"><a href="/category/news/"><button>Читать все новости</button></a></div>
</section>