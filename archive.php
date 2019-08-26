<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karangtanjung
 */

get_header();
?>

<div class="container-fluid" style="background-color:#ffc740; height:130px;">
	<div class="container h-100">
		<div class="row no-gutters h-100">
			<div class="col-12 h-100">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-right">
							<h1 style="font-size: 29.8px;" class="font-weight-bold mb-0 mt-0">Kecamatan Karang Tanjung</h1>
							<h4>Pemerintah Kabupaten Pandeglang</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="content" class="container-fluid mt-5">

	<div id="primary" class="container">
		<main id="main" class="row mb-5">

			<div class="col-8">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
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

<?php
get_footer();
