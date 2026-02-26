<section id="license">
<div class="zg">	<h2 id="mainh2">Наши документы</h2></div>
	<div id="lic-list"  data-aos="fade-up"   data-aos-duration="1000">
	<?php if(block_field('image1', false)) { ?><div>	<a href="<?php echo block_field('image1'); ?>" data-fancybox="images"><img class="lazyload" data-src="<?php echo block_field('image1'); ?>" alt="Лицензии"></a>
		<p><?php echo block_field('title1'); ?></p></div><?php } ?>
	<?php if(block_field('image2', false)) { ?><div>	<a href="<?php echo block_field('image2'); ?>" data-fancybox="images"><img class="lazyload" data-src="<?php echo block_field('image2'); ?>" alt="Лицензии"></a><p><?php echo block_field('title2'); ?></p></div><?php } ?>
	<?php if(block_field('image3', false)) { ?><div>	<a href="<?php echo block_field('image3'); ?>" data-fancybox="images"><img class="lazyload" data-src="<?php echo block_field('image3'); ?>" alt="Лицензии"></a><p><?php echo block_field('title3'); ?></p></div><?php } ?>
	<?php if(block_field('image4', false)) { ?><div>	<a href="<?php echo block_field('image4'); ?>" data-fancybox="images"><img class="lazyload" data-src="<?php echo block_field('image4'); ?>" alt="Лицензии"></a><p><?php echo block_field('title4'); ?></p></div><?php } ?>
<?php if(block_field('image5', false)) { ?>	<div>	<a href="<?php echo block_field('image5'); ?>" data-fancybox="images"><img class="lazyload" data-src="<?php echo block_field('image5'); ?>" alt="Лицензии"></a><p><?php echo block_field('title5'); ?></p></div><?php } ?>
	</div>
</section>