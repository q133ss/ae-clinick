<?php // create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {
	
	add_submenu_page( 'options-general.php', 'Настройки и контакты', 'Дополнительные настройки', 'manage_options', 'soc-icon-setting', 'baw_settings_page' ); 

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}

function register_mysettings() {

	//register our settings
	register_setting( 'soc-icon-link-group', 'tel1-link' );
	register_setting( 'soc-icon-link-group', 'adr1-link' );
	register_setting( 'soc-icon-link-group', 'email1-link' );
	register_setting( 'soc-icon-link-group', 'time1-link' );
	register_setting( 'soc-icon-link-group', 'emailform-link' );
	register_setting( 'soc-icon-link-group', 'dzen-link' );
	register_setting( 'soc-icon-link-group', 'vk-link' );
	register_setting( 'soc-icon-link-group', 'telegram-link' );
	register_setting( 'soc-icon-link-group', 'youtube-link' );
	register_setting( 'soc-icon-link-group', 'titlecyt-link' );
	register_setting( 'soc-icon-link-group', 'cyt-link' );
	register_setting( 'soc-icon-link-group', 'category-link' );
}

function baw_settings_page() {
?>
<div class="wrap">
	<form method="post" action="options.php">
   		<?php settings_fields( 'soc-icon-link-group' ); ?>
			<table class="form-table">
				<tr valign="top">
        			<th scope="row">Заголовок цитаты</th>
        			<td><input type="text" name="titlecyt-link" value="<?php echo get_option('titlecyt-link'); ?>" /></td>
				</tr>
				<tr valign="top">
        			<th scope="row">Цитата:</th>
			        <td><textarea name="cyt-link" id="" cols="30" rows="10"><?php echo get_option('cyt-link'); ?></textarea></td>
				</tr>
				<tr valign="top">
        				<th scope="row">Категории:</th>
            			<td><textarea name="category-link" id="" cols="30" rows="10"><?php echo get_option('category-link'); ?></textarea></td>
    			</tr>
				<h2>Контакные данные</h2>
				<tr valign="top">
        			<th scope="row">Телефон</th>
        			<td><input type="text" name="tel1-link" value="<?php echo get_option('tel1-link'); ?>" /></td>
        		</tr>
				<tr valign="top">
        			<th scope="row">Адрес</th>
					<td><textarea name="adr1-link" id="" cols="30" rows="10"><?php echo get_option('adr1-link'); ?></textarea></td>
				</tr>	
				<tr valign="top">
        			<th scope="row">E-Mail</th>
        			<td><input type="text" name="email1-link" value="<?php echo get_option('email1-link'); ?>" /></td>
    			</tr>
				<tr valign="top">
        			<th scope="row">Время работы</th>
        			<td><input type="text" name="time1-link" value="<?php echo get_option('time1-link'); ?>" /></td>
    			</tr>
			</table><br><br>
<hr><br><br>
<hr><br><br>
<h2>Настройки форм обратной связи</h2>
	<table class="form-table">
		<tr valign="top">
        	<th scope="row">E-mail для приема писем</th>
        	<td><input type="text" name="emailform-link" value="<?php echo get_option('emailform-link'); ?>" /></td>
    	</tr>       
	</table><br><br>
<hr><br><br>
<h2>Соц. сети</h2>
	<table class="form-table">
		<tr valign="top">
    	    <th scope="row">Дзен</th>
        	<td><input type="text" name="dzen-link" value="<?php echo get_option('dzen-link'); ?>" /></td>
    	</tr>
		<tr valign="top">
    	    <th scope="row">Группа VK</th>
        	<td><input type="text" name="vk-link" value="<?php echo get_option('vk-link'); ?>" /></td>
    	</tr>
		<tr valign="top">
    	    <th scope="row">Telegram</th>
        	<td><input type="text" name="telegram-link" value="<?php echo get_option('telegram-link'); ?>" /></td>
    	</tr>
		<tr valign="top">
        	<th scope="row">Youtube</th>
        	<td><input type="text" name="youtube-link" value="<?php echo get_option('youtube-link'); ?>" /></td>
    	</tr>
	</table>
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>
</div> <?php
 } 