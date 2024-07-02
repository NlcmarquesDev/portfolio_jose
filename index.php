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

					<!-- title -->
					<div class="title">
						<h2 class="title__title">Things I've done...</h2>
					</div><!-- End / title -->

				</div>
			</div>
			<div class="grid-css grid-css--masonry" data-col-lg="3" data-col-md="2" data-col-sm="2" data-col-xs="1" data-gap="30">
				<div class="grid__inner">
					<div class="grid-sizer"></div>
					<?php foreach ($projects as $project) : ?>
						<div class="grid-item">
							<div class="grid-item__inner">
								<div class="grid-item__content-wrapper">
									<!-- work -->
									<div class="work">
										<a href="work-detail.php?id=<?= $project['id'] ?>">
											<!-- hoverbox ef-slide-bottom -->
											<div class="hoverbox ef-slide-bottom light">
												<!-- hb_front -->
												<div class="hb_front"><img src="<?= $project['thumbnail'] ?>" alt="" />
												</div><!-- End / hb_front -->
												<!-- hb_back -->
												<div class="hb_back">
													<h2 class="work__title"><?= $project['name'] ?></h2><span class="work__text">View detail</span>
												</div><!-- End / hb_back -->
											</div><!-- End / hoverbox ef-slide-bottom -->
										</a>
									</div><!-- End / work -->
								</div>
							</div>
						</div>
					<?php endforeach ?>
					<div class="grid-item">
						<div class="grid-item__inner">
							<div class="grid-item__content-wrapper">
								<!-- work -->
								<div class="work"><a href="work-detail.html">
										<!-- hoverbox ef-move-top -->
										<div class="hoverbox ef-move-top light">
											<!-- hb_front -->
											<div class="hb_front"><img src="https://images.pexels.com/photos/609687/pexels-photo-609687.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="" />
											</div><!-- End / hb_front -->
											<!-- hb_back -->
											<div class="hb_back">
												<h2 class="work__title">How to Create and Manage SVG Sprites</h2><span class="work__text">View detail</span>
											</div><!-- End / hb_back -->

										</div><!-- End / hoverbox ef-move-top -->
									</a>
								</div><!-- End / work -->
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item__inner">
							<div class="grid-item__content-wrapper">

								<!-- work -->
								<div class="work"><a href="work-detail.html">

										<!-- hoverbox ef-slide-right -->
										<div class="hoverbox ef-slide-right light">

											<!-- hb_front -->
											<div class="hb_front"><img src="https://images.pexels.com/photos/754949/pexels-photo-754949.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="" />
											</div><!-- End / hb_front -->


											<!-- hb_back -->
											<div class="hb_back">
												<h2 class="work__title">Using Memes in Your Content</h2><span class="work__text">View detail</span>
											</div><!-- End / hb_back -->

										</div><!-- End / hoverbox ef-slide-right -->
									</a>
								</div><!-- End / work -->

							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item__inner">
							<div class="grid-item__content-wrapper">

								<!-- work -->
								<div class="work"><a href="work-detail.html">

										<!-- hoverbox ef-zoom-in -->
										<div class="hoverbox ef-zoom-in light">

											<!-- hb_front -->
											<div class="hb_front"><img src="https://images.pexels.com/photos/794578/pexels-photo-794578.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="" />
											</div><!-- End / hb_front -->


											<!-- hb_back -->
											<div class="hb_back">
												<h2 class="work__title">Is UX Really That Important?</h2><span class="work__text">View detail</span>
											</div><!-- End / hb_back -->

										</div><!-- End / hoverbox ef-zoom-in -->
									</a>
								</div><!-- End / work -->

							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item__inner">
							<div class="grid-item__content-wrapper">

								<!-- work -->
								<div class="work"><a href="work-detail.html">

										<!-- hoverbox ef-zoom-in -->
										<div class="hoverbox ef-zoom-in light">

											<!-- hb_front -->
											<div class="hb_front"><img src="https://images.pexels.com/photos/580649/pexels-photo-580649.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="" />
											</div><!-- End / hb_front -->


											<!-- hb_back -->
											<div class="hb_back">
												<h2 class="work__title">Best National Locations</h2><span class="work__text">View detail</span>
											</div><!-- End / hb_back -->

										</div><!-- End / hoverbox ef-zoom-in -->
									</a>
								</div><!-- End / work -->

							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item__inner">
							<div class="grid-item__content-wrapper">

								<!-- work -->
								<div class="work"><a href="work-detail.html">

										<!-- hoverbox ef-slide-right -->
										<div class="hoverbox ef-slide-right light">

											<!-- hb_front -->
											<div class="hb_front"><img src="https://images.pexels.com/photos/290386/pexels-photo-290386.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="" />
											</div><!-- End / hb_front -->


											<!-- hb_back -->
											<div class="hb_back">
												<h2 class="work__title">Best National Locations</h2><span class="work__text">View detail</span>
											</div><!-- End / hb_back -->

										</div><!-- End / hoverbox ef-slide-right -->
									</a>
								</div><!-- End / work -->

							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item__inner">
							<div class="grid-item__content-wrapper">

								<!-- work -->
								<div class="work"><a href="work-detail.html">

										<!-- hoverbox ef-move-right -->
										<div class="hoverbox ef-move-right light">

											<!-- hb_front -->
											<div class="hb_front"><img src="https://images.pexels.com/photos/792906/pexels-photo-792906.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="" />
											</div><!-- End / hb_front -->


											<!-- hb_back -->
											<div class="hb_back">
												<h2 class="work__title">Free PSD Files</h2><span class="work__text">View detail</span>
											</div><!-- End / hb_back -->

										</div><!-- End / hoverbox ef-move-right -->
									</a>
								</div><!-- End / work -->

							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item__inner">
							<div class="grid-item__content-wrapper">

								<!-- work -->
								<div class="work"><a href="work-detail.html">

										<!-- hoverbox ef-move-bottom -->
										<div class="hoverbox ef-move-bottom light">

											<!-- hb_front -->
											<div class="hb_front"><img src="https://images.pexels.com/photos/789140/pexels-photo-789140.jpeg?h=350&amp;auto=compress&amp;cs=tinysrgb" alt="" />
											</div><!-- End / hb_front -->


											<!-- hb_back -->
											<div class="hb_back">
												<h2 class="work__title">5 Ways to Use 404 Pages</h2><span class="work__text">View detail</span>
											</div><!-- End / hb_back -->

										</div><!-- End / hoverbox ef-move-bottom -->
									</a>
								</div><!-- End / work -->

							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item__inner">
							<div class="grid-item__content-wrapper">

								<!-- work -->
								<div class="work"><a href="work-detail.html">

										<!-- hoverbox ef-move-bottom -->
										<div class="hoverbox ef-move-bottom light">

											<!-- hb_front -->
											<div class="hb_front"><img src="https://images.pexels.com/photos/15382/pexels-photo.jpg?h=350&amp;auto=compress&amp;cs=tinysrgb" alt="" />
											</div><!-- End / hb_front -->


											<!-- hb_back -->
											<div class="hb_back">
												<h2 class="work__title">5 Ways to Use 404 Pages</h2><span class="work__text">View detail</span>
											</div><!-- End / hb_back -->

										</div><!-- End / hoverbox ef-move-bottom -->
									</a>
								</div><!-- End / work -->

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="awe-text-center mt-50">
				<a class="md-btn md-btn--outline-primary" href="#">all work
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