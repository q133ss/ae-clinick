<?php get_header(); ?>
<section id="strsusl">
   <div class="c">
      <div>
         <h1>Наши услуги</h1>
      </div>
      <div><span>Актуальная информация об услугах и их подробное описание</span></div>
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
               <div></div>
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
            <a href="<?php echo get_permalink(); ?>">
               <div class="ifc" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
            </a>
            <div></div>
            <div>
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
               <h3>В день рождения!</h3>
            </div>
            <div id="op">Всегда действует скидка 10% на все услуги в Ваш день рождения!
               Еще больше акций и скидок в разделе “Акции”!
            </div>
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
   </aside>
</section>
<?php get_footer(); ?>