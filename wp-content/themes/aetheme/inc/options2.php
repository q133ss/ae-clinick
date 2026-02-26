<?php // create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu1');

function baw_create_menu1() {

	add_submenu_page( 'options-general.php', 'Sidebar', 'Боковая колонка', 'manage_options', 'sidebar-icon-setting', 'baw_settings_page1' ); 

	//call register settings function
	add_action( 'admin_init', 'register_mysettings1' );
}

function register_mysettings1() {
	//register our settings

	register_setting( 'soc-icon-link-group1', 'title-cyt-link' );
	register_setting( 'soc-icon-link-group1', 'cyt-link' );
	register_setting( 'soc-icon-link-group1', 'category-link' );

}

function baw_settings_page1() {
?>
<div class="wrap">
<h2>Боковая колонка</h2>
<form method="post" action="options.php">
    <?php settings_fields( 'soc-icon-link-group1' ); ?>
<table class="form-table">
	<tr valign="top">
        <th scope="row">Заголовок цитаты</th>
        <td><input type="text" name="title-cyt-link" value="<?php echo get_option('title-cyt-link'); ?>" /></td>
    </tr>
	<tr valign="top">
        <th scope="row">Цитата:</th>
        <td><textarea name="cyt-link" id="" cols="30" rows="10"><?php echo get_option('cyt-link'); ?></textarea></td>
    </tr>
    <tr valign="top">
        <th scope="row">Категории:</th>
            <td><textarea name="category-link" id="" cols="30" rows="10"><?php echo get_option('category-link'); ?></textarea></td>
    </tr>
</table><br><br>
<hr><br><br>
<hr><br><br>
<h2>Настройки форм обратной связи</h2>
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>
</div> <?php
} 