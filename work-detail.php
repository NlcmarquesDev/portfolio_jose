<?php
include('views/partials/header.php');
include('views/partials/navbar.php');

$jsonString = file_get_contents('projects.json');

$data = json_decode($jsonString, true);

$projects = $data['projects'];

$projectById = [];
if (isset($_GET['id'])) {

	foreach ($projects as $project) {

		if ((int)$_GET['id'] === $project['id']) {
			array_push($projectById, $project);
		}
	}
}

if (empty($projectById)) {
	header('location:index.php');
	exit();
}

$project = $projectById[0];
?>

<!-- Content-->
<div class="wil-content">

	<!-- Section -->
	<section class="awe-section">
		<div class="container">

			<!-- page-title -->
			<div class="page-title pb-40">
				<h2 class="page-title__title"><?= $project['name'] ?></h2>
				<div class="page-title__divider"></div>
			</div><!-- End / page-title -->

		</div>
	</section>
	<!-- End / Section -->


	<!-- Section -->
	<section id="single-work" class="awe-section bg-gray">
		<div class="container">

			<!--  -->
			<div>
				<div class="work-detail__entry">
					<h3>Description</h3>
					<p><?= $project['description'] ?></p><br>
					<h3>Features</h3>
					<?php foreach ($project['features'] as $feature) : ?>
						<p><?= $feature ?></p><br>
					<?php endforeach ?>

					<a class="github-link" href="<?= $project['github'] ?>">
						<h3>GitHub Source Code - Click me! </h3>
					</a><br>
					<h3>Images</h3>
					<?php foreach ($project['images'] as $image) : ?>
						<div class="work-img pb-3"><img src="<?= $image ?>" alt=""></div>
					<?php endforeach ?>
					<?php if (isset($project['video'])) : ?>
						<div class=" ">
							<h3>Short video example</h3>
							<video class="mt-4 mx-auto" src="<?= $project['video'] ?>" type="video/mp4" width="720" height="540" controls="controls" autoplay="autoplay"></video>
						</div>
					<?php endif ?>
				</div>

				<div class="awe-text-center mt-50">
					<a class="md-btn md-btn--outline-primary " href="index.php">All works
					</a>
				</div>
			</div>
	</section>
	<!-- End / Section -->

</div>
<!-- End / Content-->


<?php
include('views/partials/footer.php');
?>