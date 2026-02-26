<section id="cyt">
	<div class="c">
		<div  data-aos="fade-up"   data-aos-duration="1000"><h2><?php echo block_field('title'); ?></h2>
		<p><?php echo block_field('desc'); ?></p>
		<div id="avtor"  data-aos="fade-up"   data-aos-duration="1000"><?php echo block_field('autor'); ?></div>
		<a href="<?php echo block_field('link'); ?>"><button  data-aos="fade-up"   data-aos-duration="1000">Подробнее о нас</button></a>
		</div>
		<div class="i" style="background-image: url(<?php echo block_field('image'); ?>);">
		</div>
	</div>
</section>