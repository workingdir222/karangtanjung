<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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


				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
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

