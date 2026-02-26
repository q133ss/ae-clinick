<?php get_header(); ?>
<section id="sng">
   <?php
      $args = array(
          'numberposts' => 20,      
          'orderby' => 'date',
          'order' => 'ASC',
          'post_type' => 'slider',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      );
      $posts = get_posts($args);
      foreach ($posts as $post) {
          setup_postdata($post);      
          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);      
          $title1 = get_post_meta($post->ID, 'title1', true);
          $title1id = get_post_meta($post->ID, 'title1id', true);
          $title2 = get_post_meta($post->ID, 'title2', true);
          $title2id = get_post_meta($post->ID, 'title2id', true);      
          $textslider = get_post_meta($post->ID, 'textslider', true);      
          $buttonname = get_post_meta($post->ID, 'buttonname', true);
          $buttonlink = get_post_meta($post->ID, 'buttonlink', true);     
          ?>
   <div id="s1-list">
      <div class="s" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
         <h2 id="<?php echo $title1id; ?>" data-animation-in="fadeIn" data-delay-in="2" data-duration-in="2"
            data-animation-out="fadeOUt" data-delay-out="2"
            data-duration-out="2"><?php echo $title1; ?></h2>
         <h2 id="<?php echo $title2id; ?>" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500"><?php echo $title2; ?></h2>
         <div><?php echo $textslider; ?></div>
         <a href="<?php echo get_post_meta($post->ID, 'buttonlink', true); ?>">
         <button data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="1000"><?php echo $buttonname; ?></button>
         </a>
      </div>
   </div>
   <?php }
      wp_reset_postdata(); ?>
</section>
<section id="uslugi">
   <div class="zg">
      <h2 id="mainh2">Наши услуги</h2>
   </div>
   <div id="twosliders">
      <div id="ulist" data-aos="fade-up" data-aos-duration="1000">
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
                $icon1 = trim((string) get_post_meta($post->ID, 'icon1', true));
                $icon_attr = $icon1 !== '' ? ' data-bg="' . esc_url($icon1) . '"' : '';
                ?>
         <div<?php echo $icon_attr; ?>><?php the_title(); ?></div>
         <?php }
            wp_reset_postdata(); ?>
      </div>
      <div id="uslide" data-aos="fade-up" data-aos-duration="1000">
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
         <div>
            <div><img src="<?php echo $thumb_url[0]; ?>" alt=""></div>
            <div>
               <a href="<?php echo get_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
               </a>
            </div>
            <div><?php echo get_the_excerpt(); ?></div>
         </div>
         <?php }
            wp_reset_postdata(); ?>
      </div>
   </div>
</section>
<section id="cyt">
   <div class="c">
      <div data-aos="fade-up" data-aos-duration="1000">
         <h2>AEclinic — это место, где
            комфортно.
         </h2>
         <p>«Идея создать новую клинику врачебной косметологии в центре города вызвана потребностью пациентов в
            профессиональном медицинском взгляде на эстетику. Наш многолетний опыт позволяет подобрать, как
            традиционные, так и самые современные терапевтические программы. Мы создаём индивидуальные программы
            омоложения и оздоровления организма, снижения массы тела, формирующие новый образ жизни и
            обеспечивающие контроль над возрастом.
         </p>
         <div id="avtor" data-aos="fade-up" data-aos-duration="1000">Главный врач AEclinic, Абрамова Елена
            Петровна
         </div>
         <button data-aos="fade-up" data-aos-duration="1000">Подробнее о нас</button>
      </div>
      <div class="i" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/cyt-i.png);">
      </div>
   </div>
</section>
<section id="akc">
   <div class="zg">
      <h2>Акции</h2>
   </div>
   <div id="aklist">
      <div data-aos="fade-up" data-aos-duration="1000"
         style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/foto_ban.png);"></div>
      <div data-aos="fade-up" data-aos-duration="1000"
         style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/13_AEClinic_site1430x560.png);"></div>
      <div data-aos="fade-up" data-aos-duration="1000"
         style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/14_AEClinic_site1430x560.png);"></div>
      <div data-aos="fade-up" data-aos-duration="1000"
         style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/15_AEClinic_site1430x560.png);"></div>
   </div>
</section>
<section id="license">
   <div class="zg">
      <h2 id="mainh2">Лицензии и сертификаты</h2>
   </div>
   <div id="lic-list" data-aos="fade-up" data-aos-duration="1000">
      <div>
         <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/lic/lic5_565x800.jpg" alt=""></a>
         <p>Лицензия</p>
      </div>
      <div>
         <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/lic/lic3_565x800.jpg" alt=""></a>
         <p>Лицензия</p>
      </div>
      <div>
         <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/lic/lic4_565x800.jpg" alt=""></a>
         <p>Лицензия</p>
      </div>
      <div>
         <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/lic/lic2_565x800.jpg" alt=""></a>
         <p>Лицензия</p>
      </div>
      <div>
         <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/lic/lic1_565x800.jpg" alt=""></a>
         <p>Лицензия</p>
      </div>
   </div>
</section>
<section id="stat">
   <div class="c">
      <div id="stat-list" data-aos="fade-up" data-aos-duration="1000">
         <div>
            <div><span>10</span></div>
            <div>Отходы организаций общественного питания</div>
         </div>
         <div>
            <div><span>1000</span>+</div>
            <div>Красивых и здоровых
               пациентов
            </div>
         </div>
         <div>
            <div><span>351</span></div>
            <div>Количество
               косметологических услуг
            </div>
         </div>
         <div>
            <div><span>365</span></div>
            <div>Дней в году
               с заботой о вас
            </div>
         </div>
      </div>
   </div>
</section>
<section id="mpnews">
   <div class="zg">
      <h2 id="mainh2">Новости</h2>
   </div>
   <div id="nlist" data-aos="fade-up" data-aos-duration="1000">
      <?php
         $args = array(
             'numberposts' => 3,        
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
      <div>
         <div><img src="<?php echo $thumb_url[0]; ?>" alt=""></div>
         <div>
            <time><?php echo the_time('j F Y'); ?></time>
         </div>
         <div>
            <a href="<?php echo get_permalink(); ?>">
               <h3><?php echo the_title(); ?></h3>
            </a>
         </div>
         <div><?php echo get_the_excerpt(); ?></div>
      </div>
      <?php }
         wp_reset_postdata(); ?>
   </div>
   <div id="bt" data-aos="fade-up" data-aos-duration="1000"><a href="/category/news/">
      <button>Читать все новости</button>
      </a>
   </div>
</section>
<section id="mpline">
   <div class="c" data-aos="fade-up" data-aos-duration="1000">
      <span>Вы можете позвонить нам по номеру: 8 (473) 202-17-17      или </span> <a data-fancybox=""
         data-src="#hidden-content"
         href="javascript:;">
      <button>Заказать звонок</button>
      </a>
   </div>
</section>
<section id="zapis">
   <div id="zaptwo">
      <div data-aos="fade-up" data-aos-duration="1000">
         <div><img src="<?php echo get_template_directory_uri(); ?>/img/appointment-3.png" alt=""></div>
         <div class="cb1">
            <div>
               <h3>Before the Appoinment</h3>
               <p>You can sign up for free alerts and reminders about registration, test preparation and more
                  at the Cure.
               </p>
            </div>
         </div>
         <div class="cb1"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/fphone.png);">
            <div>
               <h3>Before the Appoinment</h3>
               <p>You can sign up for free alerts and reminders about registration, test preparation and more
                  at the Cure.
               </p>
            </div>
         </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="1000">
         <div>
            <div id="zf">
               <h3>Записаться на прием</h3>
            </div>
            <div id="op">
               <p>Пожалуйста наберите нам на номер
                  <mark><span aria-hidden="true">&#9742;</span> + 7 473 202 17 17</mark>
                  если хотите
                  связаться по срочному вопросу. Мы проконсультируем вас и ответим на все инетересующие вас
                  вопросы.
               </p>
            </div>
            <form action="/wp-admin/admin-ajax.php?action=main" data-gtm-event="appointment">
               <div><input type="text" placeholder="Фамилия и имя" name="name" required></div>
               <div><input type="text" placeholder="E-mail" name="email" required></div>
               <div><input type="text" placeholder="Номер телефона" name="phone" required></div>
               <div><input type="text" class="datep" placeholder="дд.мм.гггг" name="date"></div>
               <div><input type="text" placeholder="услуга" name="usl"></div>
               <div><input type="text" class="timep" placeholder="Выбрать время" name="time"></div>
               <div><textarea id="" cols="30" rows="10" placeholder="Дополнительное сообщение"
                  name="message"></textarea></div>
               <input type="hidden" name="typeform" value="Записаться на прием">
               <div><input type="submit" value="Отправить"></div>
            </form>
         </div>
      </div>
   </div>
</section>
<section id="yamap">
   <div id="map"></div>
</section>
<?php get_footer(); ?>
