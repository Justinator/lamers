<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// display the plugin settings page
function display_welcome_page() {
	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<h2>Working in Your WordPress Dashboard</p>
		<h3>Posts</h3>
		<p>
		Posts are all your sites blog posts
		</p>
		<h3>Media</h3>
		<p>
		Media is where you upload all assets such as images and PDFs. To sort through all your media, use the first select box to select from the various media types that your library may hold. To sort content by date use the second select box to select an upload date.
		</p>
		<h3>Pages</h3>
		<p>
		This is where you will find all of your site's primary pages
		</p>
		<h3>Lamers Tour & Travel</h3>
		<p>
		This is where you will configure your tours
		</p>
		<h3>Lamers Job Openings</h3>
		<p>
		This is where you will configure your job openings
		</p>
		<h3>Caldera Forms</h3>
		<p>
		This is the form plugin used for the contact form and the request a quote form. Here you can manage form settings, edit form fields, and view and resend user form entries, if or when needed.
		</p>
		<h3>Appearance</h3>
		<p>
		This is where you will make some changes to the appearance of your website menus. Ie. primary navigation, footer menu links etc… This site uses menus in a number of locations including the services, connect routes, and fleet menus. To edit any of the sites menus, navigate to Appearance > Menus then select a menu from the select box at the top of the screen and then click "Select" to edit. When done click "Save" to make your changes.
		</p>
		<h3>Users</h3>
		<p>
		Users allows you to add new users if you need to give access to additional employees who are going to add tours, edit job posts, or additional blog authors
		</p>
		<h3>All-in-One WP Migration</h3>
		<p>
		Allows you to easily create backups of your website
		</p>
		<h3>Settings</h3>
		<p>
		This is where you can edit some of the basic settings of your site. Some additional tools like the notification bar settings will be found in here as well.
		</p>
		<h3>Options</h3>
		<p>
		The options page is where you will edit Global Blocks that are used throughout your site. These live here to allow editing once and then take effect on every page that those blocks live on.
		</p>
		<h3>Lamers Locations</h3>
		<p>
		Here is where you will manage current or add new Lamers locations
		</p>

	</div>
	<?php
}
