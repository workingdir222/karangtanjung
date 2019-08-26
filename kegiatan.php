<?php
/*
Template Name: Kegiatan
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

<div id="content" class="container-fluid mb-5">
	<div id="primary" class="container">
		<div class="text-left mb-3">
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

<div class="container-fluid">

<?php
get_footer();