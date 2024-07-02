<?php
include('views/partials/header.php');
include('views/partials/navbar.php');

$jsonString = file_get_contents('projects.json');

$data = json_decode($jsonString, true);

$projects = $data['projects'];
?>

<!-- Content-->
<div class="wil-content">

	<!-- Section -->
	<section class="awe-section">
		<div class="container">

			<!-- page-title -->
			<div class="page-title pb-40">
				<h2 class="page-title__title">Let see what I did</h2>
				<p class="page-title__text">Lorem ipsum dolor sit amet, consectetur </p>
				<div class="page-title__divider"></div>
			</div><!-- End / page-title -->

		</div>
	</section>
	<!-- End / Section -->


	<!-- Section -->
	<section class="awe-section bg-gray">
		<div class="container">
			<?php include('views/works.php'); ?>
		</div>
	</section>
	<!-- End / Section -->

</div>
<!-- End / Content-->

<?php
include('views/partials/footer.php');
?>