<?php get_header(); ?>
<section id="strsusl">
   <div class="c">
      <div>
         <h1>Актуальные новости и статьи</h1>
      </div>
      <div><span>Новости из жизни нашей клиники, рекомендации косметологов, специальные предложения</span></div>
   </div>
</section>
<section id="hk">
   <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
         {
             bcn_display();
         }?>
   </div>
</section>
<section id="catpage">
   <main>
<!-- 
	<div id="mainpost">
        <?php 
            $i = 0;
            	if (have_posts()) : 
            			while (have_posts()) : the_post(); 
            	$i++;
            	if($i == 1) {
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
		?>	
         <a href="<?php echo get_permalink(); ?>">
            <div style="background-image: url(<?php echo $thumb_url[0]; ?>);">
               <div><time>Опубликовано: <?php echo the_time('j F Y'); ?></time></div>
               <div>
                  <h2><?php the_title(); ?></h2>
               </div>
            </div>
         </a>
         <?php
            }
            endwhile;
            endif;
            ?>
      </div> 
-->
      <div id="ctulist">
		  <?php 
            $a = 0;
            	if (have_posts()) : 
            			while (have_posts()) : the_post(); 
            	
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            $a++;
            if($a > 0) {
            			?>
         <div>
            <hr><a href="<?php echo get_permalink(); ?>">
               <div class="ifc" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
            </a>
            <div><time>Опубликовано: <?php echo the_time('j F Y'); ?></time></div>
            <div align=center>
               <a href="<?php echo get_permalink(); ?>">
                  <h2><?php the_title(); ?></h2>
               </a>
            </div>
            <div><?php echo get_the_excerpt(); ?></div>
         </div>
		 <?php
            }
            endwhile;
            endif;
            ?>
      </div>
      <div class="pagination"><?php if (function_exists('wp_corenavi')) wp_corenavi(); ?></div>
   </main>
   <aside>
      <div id="ib">
         <div>
            <div>
               <h3><?php echo get_option('titlecyt-link'); ?></h3>
            </div>
            <div id="op"><?php echo get_option('cyt-link'); ?></div>
         </div>
      </div>
      <div id="ct">
         <div id="czg">
            <h3>Категории</h3>
         </div>
         <div id="ctlist">
            <?php echo get_option('category-link'); ?>
         </div>
      </div>
      <div id="ifacts">
         <?php $args = array(
            'numberposts' => 20,
            
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'tech',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            );
            $posts = get_posts( $args );
            foreach($posts as $post){ setup_postdata($post);
            the_post(); the_content(); ?>
         <?php } wp_reset_postdata(); ?>
      </div>
      <?php /*
         <div id="ifact">
         	<div><h3>Интересный факт</h3></div>
         	<div>Лишние объемы часто бывают неразрешимой проблемой Лишние объемы часто бывают неразрешимой проблемой.</div>
         	<div><button>Наши услуги</button></div>
         </div> */ ?>
   </aside>
</section>
<?php get_footer(); ?>