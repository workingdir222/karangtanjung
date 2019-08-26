<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karangtanjung
 */

?>

	</div><!-- #content -->

	<div class="container-fluid" style="background-color:#053775">
		<div class="container pt-5 pb-3">
			<div class="row">
				<div class="col-3">
				<aside id="text-2" class="widget widget_text"><h4 class="widgettitle text-white mb-4">Pelayanan</h4>	
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'container_class' => 'textwidget footer-text' ) ); ?>	
				</aside>
				</div>
				<div class="col-3">
					<aside id="text-3" class="widget widget_text"><h4 class="widgettitle text-white mb-4">Pemerintahan</h4>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'container_class' => 'textwidget footer-text' ) ); ?>	
					</aside>
				</div>
				<div class="col-3">
					<aside id="text-4" class="widget widget_text"><h4 class="widgettitle text-white mb-4">Media Sosial</h4>			
					<div class="textwidget footer-text"> 
						<ul>
							<li class="fb"><a href="#">Facebook</a></li>
							<li class="tw"><a href="#">Twitter</a></li>
							<li class="yt"><a href="#">YouTube </a></li>
							<li class="ig"><a href="#">Instagram</a></li>
							<li class="pt"><a href="#">Pinterest</a></li>
						</ul>
					</div>
					</aside>
				</div>
				<div class="col-3">
				<aside id="custom-contact-info-2" class="widget widget_custom_contact_info_entries footer-text footer-text">
					<h4 class="widgettitle text-white mb-4">Kontak Kecamatan</h4>
					<span class="street-address address-icon"><p class="text-white">Pagadungan, Karangtanjung, Kabupaten Pandeglang, Banten 42251</p></span>
					<span class="contact_widget_url web-icon">
						<a class="text-white" href="http://karangtanjung.pandeglangkab.go.id">karangtanjung.pandeglangkab.go.id</a>
					</span>
					<span class="contact_widget_email email-icon">
						<a class="text-white" href="mailto:%69nfo%40kara%6e%67tan%6aung%2e%70an%64%65%67%6ca%6eg%6bab.g%6f%2eid">
							info@karangtanjung.pandeglangkab.go.id
						</a>
					</span>
					<span class="contact_widget_phone ph-icon">
						<p class="text-white">0252-12345678</p>
					</span>
				</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color:#104382">
		<div class="container text-white pt-3 pb-3">
		Karangtanjung © 2019. All rights reserved.
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
