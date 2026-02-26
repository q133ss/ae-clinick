<?php get_header(); ?>
<?php if(is_page(166)){
   echo '<section id="strsusl">
   	<div class="c">
   	<div><h1>Цены на услуги в AEclinic</h1></div>
	</div>
   </section>'; } ?>
<?php  the_post(); the_content(); ?>
<?php get_footer(); ?>