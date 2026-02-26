<?php get_header(); ?>
<section id="strsusl">
   <div class="c">
      <div>
         <h1><?php the_title();
            the_post(); ?></h1>
      </div>
      <div>
         <?php echo get_post_meta($post->ID, 'bgtext', true); ?>
      </div>
   </div>
</section>
<section id="hk">
   <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
         bcn_display();
         } ?>
   </div>
</section>
<section id="sou">
   <aside>
      <div id="suds">
         <div id="ulistblue">
            <div class="nn">Услуги</div>
            <?php
               $args = array(
                   'numberposts' => 20,               
                   'orderby' => 'date',
                   'order' => 'ASC',             
                   'post_type' => 'uslugi',
                   'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
               );
               $posts = get_posts($args);
               foreach ($posts as $post) {
                   setup_postdata($post);               
                   $thumb_id = get_post_thumbnail_id();
                   $thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
                   ?>
            <div style="background-image: url(<?php echo get_post_meta($post->ID, 'icon1', true); ?>);"><a
               href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></div>
            <?php }
               wp_reset_postdata(); ?>
         </div>
      </div>
      <div id="conb">
         <div id="nmb">
            <div>
               <h3 class="phone_class">+7(473) 202-17-17</h3>
            </div>
            <div class="o">Консультация и запись</div>
         </div>
      </div>
      <div>
      </div>
     </aside>
   <main>
      <article>
         <?php
            $thumb_id = get_post_thumbnail_id($post->ID);
            $thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
            ?>
         <img src="<?php echo $thumb_url[0]; ?>" alt="AEclinic">
         <?php the_content(); ?>
      </article>
   </main>
</section>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/before-after.min.js"></script>
<script>
   $('.ba-slider').beforeAfter();
</script>
<?php get_footer(); ?>