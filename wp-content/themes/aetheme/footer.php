<footer>
   <div id="fc">
      <div id="f1">
         <div><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo B.svg" alt="Логотип AEclinic" width=70% loading="lazy" decoding="async"></a></div>
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
		  <iframe src="https://yandex.ru/sprav/widget/rating-badge/33102715559?type=award" width="150" height="50" frameborder="0" loading="lazy"></iframe>
      </div>
   </div>
</footer>
<footer id="white">
   <div id="uppage"><img src="<?php echo get_template_directory_uri(); ?>/img/uppage2.png" alt="Вверх" loading="lazy" decoding="async"></div>
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
		 <a target="_blank" href="<?php echo get_option('vk-link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/vk-but.png" alt="VK" loading="lazy" decoding="async"></a>
		 <a target="_blank" href="<?php echo get_option('dzen-link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zen-but.png" alt="Дзен" loading="lazy" decoding="async"></a>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/theme-mode.js?v=2.0"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/aetheme/plug/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-validation/additional-methods.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-lazyload/lazyload.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/aos/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mask.min.js"></script>
<script>
(function (window, document) {
    function onLoad(fn) {
        if (document.readyState === 'complete') {
            fn();
            return;
        }
        window.addEventListener('load', fn, { once: true });
    }

    function onIdle(fn, timeout) {
        if ('requestIdleCallback' in window) {
            window.requestIdleCallback(fn, { timeout: timeout || 3000 });
            return;
        }
        window.setTimeout(fn, 1500);
    }

    window.aeLoadScript = function (src, attrs) {
        var s = document.createElement('script');
        var first = document.scripts[0];
        s.src = src;
        attrs = attrs || {};
        if (attrs.async) { s.async = true; }
        if (attrs.defer) { s.defer = true; }
        if (attrs.id) { s.id = attrs.id; }
        if (attrs.charset) { s.charset = attrs.charset; }
        first.parentNode.insertBefore(s, first);
        return s;
    };

    window.aeAfterLoadIdle = function (fn) {
        onLoad(function () {
            onIdle(fn, 4000);
        });
    };
})(window, document);
</script>
<script>
(function (window, document, $) {
    if (!$) {
        return;
    }

    function aeNormalizeSlickDotsAria($slider) {
        var $buttons;
        var total;
        if (!$slider || !$slider.length) {
            return;
        }
        $buttons = $slider.find('.slick-dots li button');
        total = $buttons.length;
        if (!total) {
            return;
        }
        $buttons.each(function (index) {
            this.setAttribute('aria-label', (index + 1) + ' of ' + total);
        });
    }

    function aeInitSlickWhenVisible(selector, initFn) {
        var el = document.querySelector(selector);
        if (!el || !$.fn || !$.fn.slick) {
            return;
        }
        if (!('IntersectionObserver' in window)) {
            initFn($(el));
            return;
        }
        var started = false;
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!started && (entry.isIntersecting || entry.intersectionRatio > 0)) {
                    started = true;
                    io.disconnect();
                    initFn($(el));
                }
            });
        }, { rootMargin: '250px 0px' });
        io.observe(el);
    }

    function aeApplyDeferredUlistIcons() {
        var container = document.getElementById('ulist');
        if (!container) {
            return;
        }
        if (window.matchMedia && window.matchMedia('(max-width: 900px)').matches) {
            return;
        }

        function applyAll() {
            var nodes = container.querySelectorAll('[data-bg]');
            nodes.forEach(function (node) {
                var src = node.getAttribute('data-bg');
                if (src) {
                    node.style.backgroundImage = 'url(' + src + ')';
                    node.removeAttribute('data-bg');
                }
            });
        }

        if (!('IntersectionObserver' in window)) {
            applyAll();
            return;
        }

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting || entry.intersectionRatio > 0) {
                    io.disconnect();
                    applyAll();
                }
            });
        }, { rootMargin: '250px 0px' });
        io.observe(container);
    }

    function aeTrackEventSafe(name, payload) {
        if (window.gtag) {
            window.gtag('event', name, payload);
        }
    }

    function aeYandexGoalSafe(goal) {
        if (window.ym) {
            window.ym(49641007, 'reachGoal', goal);
        }
    }

    var aeAosInitialized = false;

    function aeRefreshAos(hard) {
        if (!window.AOS) {
            return;
        }
        if (hard && typeof window.AOS.refreshHard === 'function') {
            window.AOS.refreshHard();
            return;
        }
        if (typeof window.AOS.refresh === 'function') {
            window.AOS.refresh();
        }
    }

    function aeInitAosSafe() {
        if (!window.AOS || typeof window.AOS.init !== 'function') {
            return;
        }
        if (!aeAosInitialized) {
            window.AOS.init({ disable: 'mobile' });
            aeAosInitialized = true;
        } else {
            aeRefreshAos(true);
        }
    }

    function aeLoadThirdParty() {
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter49641007 = new Ya.Metrika({
                        id: 49641007,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    });
                } catch (e) {}
            });

            var n = d.getElementsByTagName('script')[0];
            var x = 'https://mc.yandex.ru/metrika/watch.js';
            var s = d.createElement('script');
            var f = function () { n.parentNode.insertBefore(s, n); };
            var i;
            for (i = 0; i < d.scripts.length; i += 1) {
                if (d.scripts[i].src === x) {
                    return;
                }
            }
            s.type = 'text/javascript';
            s.async = true;
            s.src = x;
            if (w.opera === '[object Opera]') {
                d.addEventListener('DOMContentLoaded', f, false);
            } else {
                f();
            }
        })(document, window, 'yandex_metrika_callbacks');

        window._tmr = window._tmr || [];
        window._tmr.push({ id: '3186203', type: 'pageView', start: (new Date()).getTime() });
        (function (d, w, id) {
            if (d.getElementById(id)) {
                return;
            }
            var ts = d.createElement('script');
            ts.type = 'text/javascript';
            ts.async = true;
            ts.id = id;
            ts.src = 'https://top-fwz1.mail.ru/js/code.js';
            var f = function () {
                var s = d.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ts, s);
            };
            if (w.opera === '[object Opera]') {
                d.addEventListener('DOMContentLoaded', f, false);
            } else {
                f();
            }
        })(document, window, 'topmailru-code');

        if (window.aeLoadScript) {
            window.aeLoadScript('https://vpbx047311465.domru.biz/callback.js', { async: true, charset: 'utf-8' });
            window.aeLoadScript('https://booking.medflex.ru/components/round/round_widget_button.js', { defer: true, charset: 'utf-8' });
        }
    }

    $(function () {
        var $uslide = $('#uslide');
        var $ulistItems = $('#ulist > div:not(.nn)');

        if (typeof window.lazyload === 'function') {
            window.lazyload();
            window.setTimeout(function () {
                aeRefreshAos(true);
            }, 200);
        }

        aeApplyDeferredUlistIcons();
        window.setTimeout(function () {
            aeRefreshAos(true);
        }, 350);

        aeInitSlickWhenVisible('#ifacts', function ($slider) {
            if ($slider.hasClass('slick-initialized')) {
                return;
            }
            $slider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                autoplay: true,
                autoplaySpeed: 10000
            });
            aeRefreshAos(true);
        });

        aeInitSlickWhenVisible('#uslide', function ($slider) {
            if ($slider.hasClass('slick-initialized')) {
                return;
            }
            $slider.on('init reInit setPosition', function () {
                aeNormalizeSlickDotsAria($(this));
                aeRefreshAos(true);
            }).slick({
                lazyLoad: 'ondemand',
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                variableWidth: true,
                centerMode: true,
                arrows: false,
                dots: true,
                easing: 'easeOutElastic'
            });
            aeRefreshAos(true);
        });

        $('#menuico').on('click', function () {
            $('header .c nav').toggle('show');
        });

        $ulistItems.on('click', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            if ($uslide.length && $.fn && $.fn.slick && $uslide.hasClass('slick-initialized') && $('#ulist > div').index(e.target) >= 1) {
                var numb = parseInt($('#ulist > div').index(e.target), 10) - 1;
                $uslide.slick('slickGoTo', numb, false);
            }
        });

        $('#uppage').on('click', function () {
            $('html, body').animate({ scrollTop: 0 }, 900);
        });

        if ($.fn && $.fn.fancybox) {
            $('ul li.blocks-gallery-item').each(function () {
                var $img = $(this).find('img');
                if ($img.length && !$img.parent().is('a')) {
                    $img.wrap('<a href="' + $img.attr('src') + '" data-fancybox="images" title=""></a>');
                }
            });
        }

        if ($.fn && $.fn.validate) {
            $('form').each(function () {
                $(this).validate({
                    errorPlacement: function () {
                        return true;
                    }
                });
            });
        }

        $('form input[type=submit], form button, #formazvonka form button, #formazvonka form input[type=submit]').on('click', function (event) {
            var form = $(this).closest('form');
            var formData;
            var gtmEvent;
            if (!form.length) {
                return;
            }
            if ($.fn && $.fn.validate && typeof form.valid === 'function' && !form.valid()) {
                event.preventDefault();
                return;
            }

            formData = new FormData(form[0]);
            gtmEvent = form.data('gtm-event');
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData,
                processData: false,
                contentType: false,
                success: function () {
                    switch (gtmEvent) {
                        case 'callback':
                            aeTrackEventSafe('otparvka_formy', { event_category: 'form_zvonok', event_action: 'send', event_label: 'lead' });
                            aeYandexGoalSafe('form_zvonok');
                            break;
                        case 'appointment':
                            aeTrackEventSafe('otparvka_formy', { event_category: 'form_zayavka', event_action: 'send', event_label: 'lead' });
                            aeYandexGoalSafe('form_zayavka');
                            break;
                        case 'feedback':
                            aeTrackEventSafe('form_sv', { event_category: 'form_svyazi', event_action: 'send', event_label: 'lead' });
                            aeYandexGoalSafe('form_svyazi');
                            break;
                    }
                    if ($.fancybox && $.fancybox.close) {
                        $.fancybox.close();
                    }
                    $('.bid-block').removeClass('active');
                    $('#popup-thank').addClass('active');
                    $('#popup-thank .thank__bird').addClass('active');
                    $('#popup-thank .thank__leg').addClass('animation');
                    setTimeout(function () {
                        $('#popup-thank .thank__leg').removeClass('animation').addClass('animation-stop');
                    }, 4500);
                    setTimeout(function () {
                        $('#popup-thank').removeClass('active');
                    }, 10000);
                }
            });
        });

        $('.appointment').on('click', function () {
            aeTrackEventSafe('click_zapisatsya', { event_category: 'click_zapisatsya', event_action: 'click', event_label: 'click' });
            aeYandexGoalSafe('click_zapisatsya');
        });

        $('.popup-close').on('click', function () {
            $('#popup-thank').removeClass('active');
        });

        $('#stat #stat-list > div > div:nth-child(1) span').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 4000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });

        aeInitAosSafe();
        window.setTimeout(function () {
            aeRefreshAos(true);
        }, 0);
        window.setTimeout(function () {
            aeRefreshAos(true);
        }, 900);
        window.addEventListener('load', function () {
            aeRefreshAos(true);
        });
        if (document.fonts && document.fonts.ready && typeof document.fonts.ready.then === 'function') {
            document.fonts.ready.then(function () {
                aeRefreshAos(true);
            });
        }
        document.addEventListener('visibilitychange', function () {
            if (!document.hidden) {
                aeRefreshAos(true);
            }
        });
        if ($.fn && $.fn.slick && $('#sng').length && !$('#sng').hasClass('slick-initialized')) {
            $('#sng').slick();
        }

        if (window.aeAfterLoadIdle) {
            window.aeAfterLoadIdle(aeLoadThirdParty);
        } else {
            aeLoadThirdParty();
        }
    });
})(window, document, window.jQuery);
</script>
<div id="menuico" class="mi"></div>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/aos/aos.css"/>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/aetheme/plug/slick/slick.css?v=1.1"/>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/aetheme/plug/slick/slick-theme.css?v=1.1"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/before-after.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">
<noscript><div><img src="https://mc.yandex.ru/watch/49641007" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<noscript>
   <div>
      <img src="https://top-fwz1.mail.ru/counter?id=3186203;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
   </div>
</noscript>
<div id="medflexRoundWidgetData" data-src="https://booking.medflex.ru/?user=68c1cd046481d25fcf2baea73ff1de00&isRoundWidget=true"></div>
</body>
</html>
