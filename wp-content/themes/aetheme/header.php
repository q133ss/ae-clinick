<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
      <meta charset="UTF-8">
	  <meta name="zen-verification" content="aDxtCHrdcqAzbNqVHBHto8WHtAMOCvJZt4aHH8hrbZLFrCgxzIP7jf9rRLwXL4wV" /> 
      <title><?php echo wp_get_document_title(); ?></title>
      <script>
         (function () {
            var root = document.documentElement;
            var mode = 'light';
            var active = 'light';
            root.setAttribute('data-ae-theme-mode', mode);
            root.setAttribute('data-ae-theme-active', active);
            root.style.colorScheme = active;
         })();
      </script>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=1.20">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/web.css?v=1.20">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css?v=1.20">
      <?php wp_head(); ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme-mode.css?v=2.1">
   </head>
   <body>
      <header>
         <div class="c">
            <div id="hl">
               <div><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo B.svg" alt="Логотип AEclinic"></a>
                  <!--
                  <button type="button" id="ae-theme-toggle" aria-label="Theme mode" title="Theme: system">
                     <span class="ae-theme-toggle__icon" aria-hidden="true">SYS</span>
                  </button>
                  -->
               </div>
               <div>
                  <div class="phone_class">+7(473) 202-17-17</div>
                  <div>Телефон</div>
               </div>
               <div>
                  <div>Воронеж,
                     ул. Кропоткина 10
                  </div>
                  <div>Адрес</div>
               </div>
               <div>
                  <div>ПН - СБ 09:00-21:00,
                     ВС - выходной
                  </div>
                  <div>Время работы</div>
               </div>
            </div>
         </div>
         <div id="headerline"></div>
         <div class="c">
            <nav>
               <?php wp_nav_menu([
                  'theme_location' => 'header',
                  'container' => false,
                  ]); ?>
            </nav>
         </div>
      </header>
