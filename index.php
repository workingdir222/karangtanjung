<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karangtanjung
 */

get_header();
?>

<!-- <div id="bannerT">
	<div class="h-100">
		<div class="col-12 h-100">
			<div class="container pl-0 h-100">
				<div class="row h-100 align-items-center">
					<div class="col text-white text-right">
						<h1 style="font-weight: bold;font-size: 40px;">Kecamatan Karang Tanjung</h1>
						<p class="lead"></p><h2>Pemerintah Kabupaten Pandeglang</h2>
						<h4 style="color:yellow">BERKAH (Bersih, Elok, Ramah, Kuat, Aman, Hidup)</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div class="container-fluid pl-0 pr-0 ">
	<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/update-banner2.png' ?>" style="width:100%">
</div>

<div class="container-fluid" style="background-color:#323d38">

	<div class="container">
		<div class="row no-gutters">
			
			<div class="col-6" style="background-color: #323d38;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
							<h2>Profile Kementrian</h2>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-3"><a href="<?php echo site_url("/profile/gambaran-umum/") ?>"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/gambaran-singkat.jpg' ?>" title="edit-gadsden-1616084_1920" alt="edit-gadsden-1616084_1920"></a></div>
			

			<div class="col-3" style="background-color: #053775;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
						<a href="<?php echo site_url("/profile/gambaran-umum/") ?>"><h2 class="text-white">Gambaran Singkat</h2></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3" style="background-color: #6bc4b2;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
						<a href="<?php echo site_url("/profile/struktur-organisasi/") ?>"><h2 class="text-white">Struktur Organisasi</h2></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3"><a href="<?php echo site_url("/profile/struktur-organisasi/") ?>"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/truktur-organisasi.jpg' ?>" title="transportation-892948_1920" alt="transportation-892948_1920"></a></div>
			
			<div class="col-3" style="background-color: #d89e82;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
						<a href="<?php echo site_url("/profile/rencana-stratejik/") ?>"><h2 class="text-white">Rencana Stratejik</h2></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3"><a href="<?php echo site_url("/profile/rencana-stratejik/") ?>"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/rencana.jpg' ?>" title="artistic-conception-689793_1920" alt="artistic-conception-689793_1920"></a></div>

			<!-- <div class="col-3"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/infrastruktur.jpg' ?>" title="transportation-892948_1920" alt="transportation-892948_1920"></div>
			<div class="col-3" style="background-color: #2f3532;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
							<h2>Sarana dan Prasarana</h2>
						</div>
					</div>
				</div>
			</div> -->
			<!-- <div class="col-3" style="background-color: #3ec4c1;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
							<h2>Sumber Daya SKPD</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/team.jpg' ?>" title="artistic-conception-689793_1920" alt="artistic-conception-689793_1920"></div>
			<div class="col-3" style="background-color: #d89e82;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
							<h2>Program dan Kegiatan</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/program2.jpg' ?>" title="transportation-892948_1920" alt="transportation-892948_1920"></div> -->
		</div>
	</div>
</div>

<div class="container-fluid mb-5" style="background-color:#2f3532">
	<div id="primary" class="container">
		<div class="row">
			<div class="col-12 text-center pt-5 pb-5">
				<a href="<?php echo site_url("/profile") ?>" class="btn text-white btn-lg btn-outline-info">More Info</a>
			</div>
		</div>
	</div>
</div>

<div id="content" class="container-fluid">
	<div id="primary" class="container">
		<div class="text-center mb-5">
			<h1>Galeri Kegiatan</h1>
		</div>
		<div class="card-columns">

		<?php

		$args = array(
			'post_type'=> 'kegiatan',
			'order'    => 'ASC'
		);
		$the_query = new WP_Query( $args );

		while ( $the_query->have_posts() ) :
			$the_query -> the_post();
			?>
			
				<div class="card text-center">
				<a href="<?php echo get_permalink() ?>" rel="bookmark">
					<?php echo the_post_thumbnail() ?>
				</a>
					<div class="card-body">
						<!-- <h5 class="card-title"><?php echo get_the_title() ?></h5> -->
						<?php echo the_title( '<h5><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' ); ?>
					</div>
				</div>
			
			<?php
		endwhile;

		wp_reset_query();
		wp_reset_postdata();

		?>
		</div>
	</div>
</div>

<div id="content" class="container-fluid">

	<div id="primary" class="container mt-5">
		<div class="text-center mb-5">
			<h1>Berita</h1>
		</div>

		<main id="main" class="row mb-5">
			
			<div class="col-8">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div>
			<div class="col-4">
			<?php
			get_sidebar();
			?>
			</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<div class="container-fluid">

<?php
get_footer();
