<section id="sng">
 <?php	
$args = array(
	'numberposts' => 20,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'post_type'   => 'slider',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
$posts = get_posts( $args );
foreach($posts as $post){ setup_postdata($post);
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  $title1 = get_post_meta( $post->ID, 'title1', true );
    $title1id = get_post_meta( $post->ID, 'title1id', true );
     $title2 = get_post_meta( $post->ID, 'title2', true );
    $title2id = get_post_meta( $post->ID, 'title2id', true );
    $textslider = get_post_meta( $post->ID, 'textslider', true );
    $buttonname = get_post_meta( $post->ID, 'buttonname', true );
    $buttonlink = get_post_meta( $post->ID, 'buttonlink', true );
 ?>	 
<div id="s1-list">
<div class="s lazyload" style="background-image: url();" data-src="<?php echo $thumb_url[0]; ?>">
<h2 id="<?php echo $title1id; ?>"  data-animation-in="fadeIn" data-delay-in="2" data-duration-in="2" data-animation-out="fadeOUt" data-delay-out="2" data-duration-out="2"><?php echo $title1; ?></h2>
<h2 id="<?php echo $title2id; ?>"   data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="500"><?php echo $title2; ?></h2>
<div><?php echo $textslider; ?></div>
<a href="<?php echo get_post_meta( $post->ID, 'buttonlink', true ); ?>"><button  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000"><?php echo $buttonname; ?></button></a>
</div>
</div>
  <?php } wp_reset_postdata(); ?>
</section>