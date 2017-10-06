<div class="wrap">
		<h1><?php esc_html_e( 'Login/Logout Redirect', 'wp-active-stats' ); ?></h1>
		<form method="post" action="options.php"> 
			<?php settings_fields( 'primary-logoing-logout-settings-group' ); ?>
			<?php do_settings_sections( 'primary-logoing-logout-settings-group' ); ?>
			<div class="bsf-primary-menu-wrap">
				<table class="form-table">
					<tr valign="top">
						<th scope="row"><?php _e( 'Login Redirect to Page', 'bsf-primary-menu' ); ?></th>
						<td>
							<input type="text" class="bsf-login" name="login_url" value="<?php echo get_option( 'login_url' ); ?> "/>
							<div class="bsf-menu-example">Example: <?php echo site_url() . '/sample-page';?></div>
						</td>
					</tr>	
					<tr valign="top">
						<th scope="row"><?php _e( 'Logout Redirect to Page', 'bsf-primary-menu' ); ?></th>
						<td>
							<input type="text" class="bsf-logout" name="logout_url" value="<?php echo get_option( 'logout_url' ); ?> "/>
							<div class="bsf-menu-example">Example: <?php echo site_url() . '/sample-page';?></div>
						</td>
					</tr>	
				</table>
			</div>
			<?php submit_button(); ?>
		</form>
</div>

	