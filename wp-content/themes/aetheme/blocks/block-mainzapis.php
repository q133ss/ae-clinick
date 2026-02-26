<section id="zapis">
    <div id="zaptwo">
        <div data-aos="fade-up" data-aos-duration="1000">
            <div><img src="<?php echo block_field('image'); ?>" alt=""></div>
            <div class="cb1">
                <div>
                    <h3><?php echo block_field('title1'); ?></h3>
                    <p><?php echo block_field('desc1'); ?>
                    </p>
                </div>
            </div>
            <?php /*
<div class="cb1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/fphone.png);">
<div>
	<h3><?php echo block_field('title2'); ?></h3>
	<p><?php echo block_field('desc2'); ?>
</p>
</div>
	</div>
*/ ?>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000">
            <div>
                <div id="zf"><h3>Записаться на прием</h3></div>
                <div id="op">
                    <p><?php echo block_field('main-desc'); ?></p>
                </div>
                <form action="/wp-admin/admin-ajax.php?action=main" data-gtm-event="appointment">
                    <div><input type="text" placeholder="Фамилия и имя" name="name" required></div>
                    <div><input type="text" placeholder="E-mail" name="email"></div>
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