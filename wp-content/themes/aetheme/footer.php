<footer>
   <div id="fc">
      <div id="f1">
         <div><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo B.svg" alt="Логотип AEclinic" width=70%></a></div>
         <div id="fco">
            <div id="fct"><span class="phone_class"><a
               href="tel:<?php echo get_option('tel1-link'); ?>"><?php echo get_option('tel1-link'); ?></a></span>
            </div>
            <div id="fca"><span><?php echo get_option('adr1-link'); ?></span></div>
            <div id="fce"><span><a
               href="mailto:<?php echo get_option('email1-link'); ?>"><?php echo get_option('email1-link'); ?></a></span>
            </div>
         </div>
         <div id="fcopytr">
            <p>© 2018-2026 Все права защищены.</p>
            <p>Имеются противопоказания.</p>
            <p>Необходимо проконсультироваться со специалистом.</p>
            <p>Данный сайт не является публичной офертой</p>
         </div>
      </div>
      <div id="f2">
        <div id="ftab">
            <div>
               <div>Понедельник</div>
               <div>09:00 - 21:00</div>
            </div>
            <div>
               <div>Вторник</div>
               <div>09:00 - 21:00</div>
            </div>
            <div>
               <div>Среда</div>
               <div>09:00 - 21:00</div>
            </div>
            <div>
               <div>Четверг</div>
               <div>09:00 - 21:00</div>
            </div>
            <div>
               <div>Пятница</div>
               <div>09:00 - 21:00</div>
            </div>
            <div>
               <div>Суббота</div>
               <div>09:00 - 21:00</div>
            </div>
            <div>
               <div>Воскресение</div>
               <div>выходной</div>
            </div>
         </div>
	  </div>
      <div id="f3">
         <h3>Ссылки</h3>
         <?php wp_nav_menu([
            'theme_location' => 'footer1',
            'container' => false,
            ]); ?>
		    <br>
		  <iframe src="https://yandex.ru/sprav/widget/rating-badge/33102715559?type=award" width="150" height="50" frameborder="0"></iframe>
      </div>
   </div>
</footer>
<footer id="white">
   <div id="uppage"><img src="<?php echo get_template_directory_uri(); ?>/img/uppage2.png" alt="Вверх"></div>
   <div id="f2g">
      <div>
         <div id="inn">
            <p>ООО "АЕ-Косметология"</p>
            <p>ИНН/КПП: 3664231650 / 366401001</p>
            <p>ОГРН: 1173668055483</p>
         </div>
      </div>	
		<div>
		</div>
	   <div id="si">
		 <a target="_blank" href="<?php echo get_option('vk-link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/vk-but.png" alt="VK"></a>
		 <a target="_blank" href="<?php echo get_option('dzen-link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zen-but.png" alt="Дзен"></a>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/theme-mode.js?v=2.0"></script>
<script src="https://kit.fontawesome.com/da499b4b05.js" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="text/javascript" src="/wp-content/themes/aetheme/plug/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/tuupola/jquery_lazyload@2.x/lazyload.min.js"></script>


<script>
   lazyload();
       $('#ifacts').slick({
           slidesToShow: 1,
           slidesToScroll: 1,
           arrows: false,
           dots: false,
           autoplay: true,
           autoplaySpeed: 10000,
       });
       $(document).ready(function () {
           $('#menuico').on('click', function () {
               console.log('111');
               $('header .c nav').toggle('show');
               // $('header nav').css('top', $("header").height());
           });
       });
       $('#uslide').slick({
           lazyLoad: 'ondemand',
           slidesToShow: 3,
           slidesToScroll: 1,
           infinite: true,
           variableWidth: true,
           centerMode: true,
           arrows: false,
           dots: true,
           easing: 'easeOutElastic',
       });
       $('#ulist > div:not(.nn)').on('click', function (e) {
           e.stopPropagation();
           e.preventDefault();
           // результаты во внедренном коде не будут начинатся с 0
           // где-то на самой странице есть еще 2 li + сам тэг body
           // попробуйте заменить селекторы на `ul.test li` - тогда индексы будут начиная 0
           $(this).addClass('active');
           $(this).siblings().removeClass('active')
           if ($('#ulist > div').index(e.target) >= 1) {
               var numb = parseInt($('#ulist > div').index(e.target)) - 1;
               console.log('Клик был на элементе ' + numb);
               $('#uslide').slick('slickGoTo', numb, false);
           }
       });
       $('#uppage').on('click', function () {
           $('html, body').animate({scrollTop: 0}, '900');
       })
       // $('#s2').slick('slickGoTo', 3,  true); // 3 - slide number
       jQuery(document).ready(function () {
           $('ul li.blocks-gallery-item').each(function () {
                   $(this).find('img').wrap('<a href="' + $(this).find('img').attr('src') + '" data-fancybox="images" title=""></a>');
                   // console.log($(this).find('img').attr('src'));
               }
           );
           $("form").each(function () {
               let $form = $(this);
               $form.validate({
                   errorPlacement: function (error, element) {
                       return true;
                   }
               });
           });
           $("form input[type=submit], form button, #formazvonka form button, #formazvonka form input[type=submit]").click(function (event) {
               var formData = new FormData($(this).closest("form")[0]);
               event.preventDefault();
               let form = $(this).closest("form");
               let gtmEvent = form.data('gtm-event');
               if (form.valid()) {
                   $.ajax({
                       type: "POST",
                       url: form.attr("action"),
                       data: formData,
                       processData: false,
                       contentType: false,
                       success: function (response) {
                           switch (gtmEvent) {
                               case 'callback':
                                   gtag('event', 'otparvka_formy', {
                                       'event_category': 'form_zvonok',
                                       'event_action': 'send',
                                       'event_label': 'lead'
                                   })
                                   ym(49641007, 'reachGoal', 'form_zvonok')
                                   break;
                               case 'appointment':
                                   gtag('event', 'otparvka_formy', {
                                       'event_category': 'form_zayavka',
                                       'event_action': 'send',
                                       'event_label': 'lead'
                                   })
                                   ym(49641007, 'reachGoal', 'form_zayavka')
                                   break;
                               case 'feedback':
                                   gtag('event', 'form_sv', {
                                       'event_category': 'form_svyazi',
                                       'event_action': 'send',
                                       'event_label': 'lead'
                                   })
                                   ym(49641007, 'reachGoal', 'form_svyazi')
                                   break;
                           }
                           $.fancybox.close();
                           $(".bid-block").removeClass("active"), $("#popup-thank").addClass("active"), $("#popup-thank .thank__bird").addClass("active"), $("#popup-thank .thank__leg").addClass("animation"), setTimeout(function () {
                               $("#popup-thank .thank__leg").removeClass("animation").addClass("animation-stop")
                           }, 4500), setTimeout(function () {
                               $("#popup-thank").removeClass("active")
                           }, 1e4)
                       }
                   });
               }
           });
           $('.appointment').click(function () {
               gtag('event', 'click_zapisatsya', {
                   'event_category': 'click_zapisatsya',
                   'event_action': 'click',
                   'event_label': 'click'
               })
               ym(49641007, 'reachGoal', 'click_zapisatsya')
           });
       });
       $(document).ready(function () {
           $('.popup-close').on('click', function () {
               $("#popup-thank").removeClass("active");
           });
       });
       $('#stat #stat-list > div > div:nth-child(1) span').each(function () {
           var $this = $(this);
           jQuery({Counter: 0}).animate({Counter: $this.text()}, {
               duration: 4000,
               easing: 'swing',
               step: function () {
                   $this.text(Math.ceil(this.Counter));
               }
           });
       });
</script>
<div id="menuico" class="mi"></div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mask.min.js"></script>
<script>
   AOS.init({disable: 'mobile'});
   $(".datep").datepicker();
   $("#sng").slick();
   $(document).ready(function () {
       $('.timep').timepicker({
           timeFormat: 'H:mm',
           'minTime': '9:00',
           'maxTime': '20:30',
       });
   });
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="/wp-content/themes/aetheme/plug/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="/wp-content/themes/aetheme/plug/slick/slick-theme.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/before-after.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
   rel="stylesheet">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49641007 = new Ya.Metrika({
                    id:49641007,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            x = "https://mc.yandex.ru/metrika/watch.js",
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        for (var i = 0; i < document.scripts.length; i++) {
            if (document.scripts[i].src === x) { return; }
        }
        s.type = "text/javascript";
        s.async = true;
        s.src = x;

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49641007" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Rating Mail.ru counter --> 
<script type="text/javascript">
   var _tmr = window._tmr || (window._tmr = []);
   _tmr.push({id: "3186203", type: "pageView", start: (new Date()).getTime()});
   (function (d, w, id) {
     if (d.getElementById(id)) return;
     var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
     ts.src = "https://top-fwz1.mail.ru/js/code.js";
     var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
     if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
   })(document, window, "topmailru-code");
</script>
<noscript>
   <div>
      <img src="https://top-fwz1.mail.ru/counter?id=3186203;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
   </div>
</noscript>
<!-- Rating Mail.ru counter --> 
<!-- Обратный звонок -->
<script type="text/javascript" async src="https://vpbx047311465.domru.biz/callback.js" charset="utf-8"></script>
<!-- Онлайн запись -->
<div id="medflexRoundWidgetData" data-src="https://booking.medflex.ru/?user=68c1cd046481d25fcf2baea73ff1de00&isRoundWidget=true"></div> <script defer src="https://booking.medflex.ru/components/round/round_widget_button.js" charset="utf-8"></script>
</body>
</html>
