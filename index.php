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
			<div class="page-title">
				<h2 class="page-title__title">Hello, my name is José Marques.<br>I

					<!-- typing__module -->
					<div class="typing__module">
						<div class="typed-strings"><span>'m a web developer</span><span> do web applications</span><span>'m a full stack developer</span>
						</div><span class="typed"></span>
					</div><!-- End / typing__module -->
				</h2>
				<p class="page-title__text"></p>
				<div class="page-title__divider"></div>
			</div><!-- End / page-title -->

		</div>
	</section>
	<!-- End / Section -->


	<!-- Section -->
	<section class="awe-section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 ">
					<div class="title">
						<h2 class="title__title">Things I've done...</h2>
					</div>
				</div>
			</div>
			<?php include('views/works.php'); ?>
		</div>
	</section>
	<!-- End / Section -->

</div>
<!-- End / Content-->


<?php
include('views/partials/footer.php');
?>