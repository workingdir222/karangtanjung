<?php
/*
Template Name: Profile
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

<div class="container-fluid" style="background-color:#323d38">

	<div class="container pb-5 pt-5">
		<div class="row no-gutters">
			
			<!-- <div class="col-6" style="background-color: #323d38;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
							<h2>Profile Kementrian</h2>
						</div>
					</div>
				</div>
			</div> -->
			
			<div class="col-3" style="background-color: #053775;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
						<a href="<?php echo site_url("/profile/gambaran-umum/") ?>"><h2 class="text-white">Gambaran Singkat</h2></a>
						</div>
					</div>
				</div>
            </div>

            <div class="col-3"><a href="<?php echo site_url("/profile/gambaran-umum/") ?>"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/gambaran-singkat.jpg' ?>" title="edit-gadsden-1616084_1920" alt="edit-gadsden-1616084_1920"></a></div>

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
            
            <div class="col-3"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/infrastruktur.jpg' ?>" title="transportation-892948_1920" alt="transportation-892948_1920"></div>
			
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
			
			<div class="col-3" style="background-color: #2f3532;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col text-white">
							<h2>Sarana dan Prasarana</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3" style="background-color: #3ec4c1;">
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
			<div class="col-3"><img class=" lazyloaded" src="<?php echo get_template_directory_uri() . '/images/program2.jpg' ?>" title="transportation-892948_1920" alt="transportation-892948_1920"></div>
		</div>
	</div>
</div>

<div class="container-fluid">

<?php
get_footer();
