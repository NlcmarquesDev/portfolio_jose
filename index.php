<?php
include('views/partials/header.php');
include('views/partials/navbar.php');

$jsonString = file_get_contents('projects.json');

$data = json_decode($jsonString, true);

$projects = $data['projects'];


if ($_GET['email'] == 'send') {
	$subject = 'Meeting';
	$messageEmail = 'Hallo, José
I would be interested to receive further details about…
Best Regards
Your name.....
	';

	// header('location:index.php#contact');
	// exit();
}


?>

<!-- Content-->
<div class="wil-content">

	<!-- HERO -->
	<section class="awe-section" id="hero">
		<div class="container">
			<div class="page-title">
				<h2 class="page-title__title">Hello, my name is José Marques.<br>I
					<div class="typing__module">
						<div class="typed-strings"><span>'m a web developer</span><span> do web applications</span><span>'m a full stack developer</span>
						</div><span class="typed"></span>
				</h2>
				<p class="page-title__text"></p>
				<div class="page-title__divider"></div>
			</div>
	</section>
	<!-- End / HERO -->


	<!-- WORKS -->
	<section class="awe-section bg-gray" id="work">
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
	<!-- End / works -->

	<!-- ABOUT ME-->
	<section class="awe-section">
		<div class="container">
			<div class="page-title pb-40">
				<h2 class="page-title__title">About me</h2>
				<div class="page-title__divider"></div>
			</div>

		</div>
	</section>
	<section class="awe-section bg-gray" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-5 my-auto "><img class="rounded-circle" src="assets/images/myself.png" alt="">
				</div>
				<div class="col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">

					<!-- about -->
					<div class="mt-30">
						<h2 class="about__title">José Marques</h2>
						<!-- <p class="about__subtitle">Just Keep Scrolling! How To Design Lengthy, Lengthy Pages</p> -->
						<p class="about__text">👋 Junior Full Stack Developer passionate about technology and innovation.</p>
						<p class="about__text">I love transforming ideas into functional and intuitive web applications, always seeking the best solutions for each challenge.</p>
						<p class="about__text">My development journey has taken me to Belgium, where the adventure of living in a new country has inspired me to set new goals and explore new paths.</p>
						<p class="about__text">I believe that curiosity and the willingness to learn are the keys to creating quality software.</p>
						<a href="index.php?email=send">
							<p class="about__text"><b>Let's build something amazing together!</b></p>
						</a>

						<!-- about -->
						<div class="mt-3">
							<h5 class="about__title my-5">Frontend Skills</h5>
							<div class="d-flex flex-wrap gap-5">
								<svg xmlns="http://www.w3.org/2000/svg" height="60" width="56" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#f90b0b" d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" height="60" width="56" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#1091f4" d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3 .1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2 .1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#FFD43B" d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#dc82de" d="M301.8 378.9c-.3 .6-.6 1.1 0 0zm249.1-87a131.2 131.2 0 0 0 -58 13.5c-5.9-11.9-12-22.3-13-30.1-1.2-9.1-2.5-14.5-1.1-25.3s7.7-26.1 7.6-27.2-1.4-6.6-14.3-6.7-24 2.5-25.3 5.9a122.8 122.8 0 0 0 -5.3 19.1c-2.3 11.7-25.8 53.5-39.1 75.3-4.4-8.5-8.1-16-8.9-22-1.2-9.1-2.5-14.5-1.1-25.3s7.7-26.1 7.6-27.2-1.4-6.6-14.3-6.7-24 2.5-25.3 5.9-2.7 11.4-5.3 19.1-33.9 77.3-42.1 95.4c-4.2 9.2-7.8 16.6-10.4 21.6-.4 .8-.7 1.3-.9 1.7 .3-.5 .5-1 .5-.8-2.2 4.3-3.5 6.7-3.5 6.7v.1c-1.7 3.2-3.6 6.1-4.5 6.1-.6 0-1.9-8.4 .3-19.9 4.7-24.2 15.8-61.8 15.7-63.1-.1-.7 2.1-7.2-7.3-10.7-9.1-3.3-12.4 2.2-13.2 2.2s-1.4 2-1.4 2 10.1-42.4-19.4-42.4c-18.4 0-44 20.2-56.6 38.5-7.9 4.3-25 13.6-43 23.5-6.9 3.8-14 7.7-20.7 11.4-.5-.5-.9-1-1.4-1.5-35.8-38.2-101.9-65.2-99.1-116.5 1-18.7 7.5-67.8 127.1-127.4 98-48.8 176.4-35.4 189.8-5.6 19.4 42.5-41.9 121.6-143.7 133-38.8 4.3-59.2-10.7-64.3-16.3-5.3-5.9-6.1-6.2-8.1-5.1-3.3 1.8-1.2 7 0 10.1 3 7.9 15.5 21.9 36.8 28.9 18.7 6.1 64.2 9.5 119.2-11.8 61.8-23.8 109.9-90.1 95.8-145.6C386.5 18.3 293-.2 204.6 31.2c-52.7 18.7-109.7 48.1-150.7 86.4-48.7 45.6-56.5 85.3-53.3 101.9 11.4 58.9 92.6 97.3 125.1 125.7-1.6 .9-3.1 1.7-4.5 2.5-16.3 8.1-78.2 40.5-93.7 74.7-17.5 38.8 2.9 66.6 16.3 70.4 41.8 11.6 84.6-9.3 107.6-43.6s20.2-79.1 9.6-99.5c-.1-.3-.3-.5-.4-.8 4.2-2.5 8.5-5 12.8-7.5 8.3-4.9 16.4-9.4 23.5-13.3-4 10.8-6.9 23.8-8.4 42.6-1.8 22 7.3 50.5 19.1 61.7 5.2 4.9 11.5 5 15.4 5 13.8 0 20-11.4 26.9-25 8.5-16.6 16-35.9 16-35.9s-9.4 52.2 16.3 52.2c9.4 0 18.8-12.1 23-18.3v.1s.2-.4 .7-1.2c1-1.5 1.5-2.4 1.5-2.4v-.3c3.8-6.5 12.1-21.4 24.6-46 16.2-31.8 31.7-71.5 31.7-71.5a201.2 201.2 0 0 0 6.2 25.8c2.8 9.5 8.7 19.9 13.4 30-3.8 5.2-6.1 8.2-6.1 8.2a.3 .3 0 0 0 .1 .2c-3 4-6.4 8.3-9.9 12.5-12.8 15.2-28 32.6-30 37.6-2.4 5.9-1.8 10.3 2.8 13.7 3.4 2.6 9.4 3 15.7 2.5 11.5-.8 19.6-3.6 23.5-5.4a82.2 82.2 0 0 0 20.2-10.6c12.5-9.2 20.1-22.4 19.4-39.8-.4-9.6-3.5-19.2-7.3-28.2 1.1-1.6 2.3-3.3 3.4-5C434.8 301.7 450.1 270 450.1 270a201.2 201.2 0 0 0 6.2 25.8c2.4 8.1 7.1 17 11.4 25.7-18.6 15.1-30.1 32.6-34.1 44.1-7.4 21.3-1.6 30.9 9.3 33.1 4.9 1 11.9-1.3 17.1-3.5a79.5 79.5 0 0 0 21.6-11.1c12.5-9.2 24.6-22.1 23.8-39.6-.3-7.9-2.5-15.8-5.4-23.4 15.7-6.6 36.1-10.2 62.1-7.2 55.7 6.5 66.6 41.3 64.5 55.8s-13.8 22.6-17.7 25-5.1 3.3-4.8 5.1c.5 2.6 2.3 2.5 5.6 1.9 4.6-.8 29.2-11.8 30.3-38.7 1.6-34-31.1-71.4-89-71.1zm-429.2 144.7c-18.4 20.1-44.2 27.7-55.3 21.3C54.6 451 59.3 421.4 82 400c13.8-13 31.6-25 43.4-32.4 2.7-1.6 6.6-4 11.4-6.9 .8-.5 1.2-.7 1.2-.7 .9-.6 1.9-1.1 2.9-1.7 8.3 30.4 .3 57.2-19.1 78.3zm134.4-91.4c-6.4 15.7-19.9 55.7-28.1 53.6-7-1.8-11.3-32.3-1.4-62.3 5-15.1 15.6-33.1 21.9-40.1 10.1-11.3 21.2-14.9 23.8-10.4 3.5 5.9-12.2 49.4-16.2 59.2zm111 53c-2.7 1.4-5.2 2.3-6.4 1.6-.9-.5 1.1-2.4 1.1-2.4s13.9-14.9 19.4-21.7c3.2-4 6.9-8.7 10.9-13.9 0 .5 .1 1 .1 1.6-.1 17.9-17.3 30-25.1 34.8zm85.6-19.5c-2-1.4-1.7-6.1 5-20.7 2.6-5.7 8.6-15.3 19-24.5a36.2 36.2 0 0 1 1.9 10.8c-.1 22.5-16.2 30.9-25.9 34.4z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#6e49df" d="M333.5 201.4c0-22.1-15.6-34.3-43-34.3h-50.4v71.2h42.5C315.4 238.2 333.5 225 333.5 201.4zM517 188.6c-9.5-30.9-10.9-68.8-9.8-98.1c1.1-30.5-22.7-58.5-54.7-58.5H123.7c-32.1 0-55.8 28.1-54.7 58.5c1 29.3-.3 67.2-9.8 98.1c-9.6 31-25.7 50.6-52.2 53.1v28.5c26.4 2.5 42.6 22.1 52.2 53.1c9.5 30.9 10.9 68.8 9.8 98.1c-1.1 30.5 22.7 58.5 54.7 58.5h328.7c32.1 0 55.8-28.1 54.7-58.5c-1-29.3 .3-67.2 9.8-98.1c9.6-31 25.7-50.6 52.1-53.1v-28.5C542.7 239.2 526.5 219.6 517 188.6zM300.2 375.1h-97.9V136.8h97.4c43.3 0 71.7 23.4 71.7 59.4c0 25.3-19.1 47.9-43.5 51.8v1.3c33.2 3.6 55.5 26.6 55.5 58.3C383.4 349.7 352.1 375.1 300.2 375.1zM290.2 266.4h-50.1v78.4h52.3c34.2 0 52.3-13.7 52.3-39.5C344.7 279.6 326.1 266.4 290.2 266.4z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#2e9e7c" d="M356.9 64.3H280l-56 88.6-48-88.6H0L224 448 448 64.3h-91.1zm-301.2 32h53.8L224 294.5 338.4 96.3h53.8L224 384.5 55.7 96.3z" />
								</svg>
							</div>
						</div>
						<div class="mt-30">
							<h5 class="about__title my-5">Backend Skills</h5>
							<div class="d-flex flex-wrap gap-5">
								<svg xmlns="http://www.w3.org/2000/svg" height="70" width="70" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#08a173" d="M316.3 452c-2.1 0-4.2-.6-6.1-1.6L291 439c-2.9-1.6-1.5-2.2-.5-2.5 3.8-1.3 4.6-1.6 8.7-4 .4-.2 1-.1 1.4 .1l14.8 8.8c.5 .3 1.3 .3 1.8 0L375 408c.5-.3 .9-.9 .9-1.6v-66.7c0-.7-.3-1.3-.9-1.6l-57.8-33.3c-.5-.3-1.2-.3-1.8 0l-57.8 33.3c-.6 .3-.9 1-.9 1.6v66.7c0 .6 .4 1.2 .9 1.5l15.8 9.1c8.6 4.3 13.9-.8 13.9-5.8v-65.9c0-.9 .7-1.7 1.7-1.7h7.3c.9 0 1.7 .7 1.7 1.7v65.9c0 11.5-6.2 18-17.1 18-3.3 0-6 0-13.3-3.6l-15.2-8.7c-3.7-2.2-6.1-6.2-6.1-10.5v-66.7c0-4.3 2.3-8.4 6.1-10.5l57.8-33.4c3.7-2.1 8.5-2.1 12.1 0l57.8 33.4c3.7 2.2 6.1 6.2 6.1 10.5v66.7c0 4.3-2.3 8.4-6.1 10.5l-57.8 33.4c-1.7 1.1-3.8 1.7-6 1.7zm46.7-65.8c0-12.5-8.4-15.8-26.2-18.2-18-2.4-19.8-3.6-19.8-7.8 0-3.5 1.5-8.1 14.8-8.1 11.9 0 16.3 2.6 18.1 10.6 .2 .8 .8 1.3 1.6 1.3h7.5c.5 0 .9-.2 1.2-.5 .3-.4 .5-.8 .4-1.3-1.2-13.8-10.3-20.2-28.8-20.2-16.5 0-26.3 7-26.3 18.6 0 12.7 9.8 16.1 25.6 17.7 18.9 1.9 20.4 4.6 20.4 8.3 0 6.5-5.2 9.2-17.4 9.2-15.3 0-18.7-3.8-19.8-11.4-.1-.8-.8-1.4-1.7-1.4h-7.5c-.9 0-1.7 .7-1.7 1.7 0 9.7 5.3 21.3 30.6 21.3 18.5 0 29-7.2 29-19.8zm54.5-50.1c0 6.1-5 11.1-11.1 11.1s-11.1-5-11.1-11.1c0-6.3 5.2-11.1 11.1-11.1 6-.1 11.1 4.8 11.1 11.1zm-1.8 0c0-5.2-4.2-9.3-9.4-9.3-5.1 0-9.3 4.1-9.3 9.3 0 5.2 4.2 9.4 9.3 9.4 5.2-.1 9.4-4.3 9.4-9.4zm-4.5 6.2h-2.6c-.1-.6-.5-3.8-.5-3.9-.2-.7-.4-1.1-1.3-1.1h-2.2v5h-2.4v-12.5h4.3c1.5 0 4.4 0 4.4 3.3 0 2.3-1.5 2.8-2.4 3.1 1.7 .1 1.8 1.2 2.1 2.8 .1 1 .3 2.7 .6 3.3zm-2.8-8.8c0-1.7-1.2-1.7-1.8-1.7h-2v3.5h1.9c1.6 0 1.9-1.1 1.9-1.8zM137.3 191c0-2.7-1.4-5.1-3.7-6.4l-61.3-35.3c-1-.6-2.2-.9-3.4-1h-.6c-1.2 0-2.3 .4-3.4 1L3.7 184.6C1.4 185.9 0 188.4 0 191l.1 95c0 1.3 .7 2.5 1.8 3.2 1.1 .7 2.5 .7 3.7 0L42 268.3c2.3-1.4 3.7-3.8 3.7-6.4v-44.4c0-2.6 1.4-5.1 3.7-6.4l15.5-8.9c1.2-.7 2.4-1 3.7-1 1.3 0 2.6 .3 3.7 1l15.5 8.9c2.3 1.3 3.7 3.8 3.7 6.4v44.4c0 2.6 1.4 5.1 3.7 6.4l36.4 20.9c1.1 .7 2.6 .7 3.7 0 1.1-.6 1.8-1.9 1.8-3.2l.2-95zM472.5 87.3v176.4c0 2.6-1.4 5.1-3.7 6.4l-61.3 35.4c-2.3 1.3-5.1 1.3-7.4 0l-61.3-35.4c-2.3-1.3-3.7-3.8-3.7-6.4v-70.8c0-2.6 1.4-5.1 3.7-6.4l61.3-35.4c2.3-1.3 5.1-1.3 7.4 0l15.3 8.8c1.7 1 3.9-.3 3.9-2.2v-94c0-2.8 3-4.6 5.5-3.2l36.5 20.4c2.3 1.2 3.8 3.7 3.8 6.4zm-46 128.9c0-.7-.4-1.3-.9-1.6l-21-12.2c-.6-.3-1.3-.3-1.9 0l-21 12.2c-.6 .3-.9 .9-.9 1.6v24.3c0 .7 .4 1.3 .9 1.6l21 12.1c.6 .3 1.3 .3 1.8 0l21-12.1c.6-.3 .9-.9 .9-1.6v-24.3zm209.8-.7c2.3-1.3 3.7-3.8 3.7-6.4V192c0-2.6-1.4-5.1-3.7-6.4l-60.9-35.4c-2.3-1.3-5.1-1.3-7.4 0l-61.3 35.4c-2.3 1.3-3.7 3.8-3.7 6.4v70.8c0 2.7 1.4 5.1 3.7 6.4l60.9 34.7c2.2 1.3 5 1.3 7.3 0l36.8-20.5c2.5-1.4 2.5-5 0-6.4L550 241.6c-1.2-.7-1.9-1.9-1.9-3.2v-22.2c0-1.3 .7-2.5 1.9-3.2l19.2-11.1c1.1-.7 2.6-.7 3.7 0l19.2 11.1c1.1 .7 1.9 1.9 1.9 3.2v17.4c0 2.8 3.1 4.6 5.6 3.2l36.7-21.3zM559 219c-.4 .3-.7 .7-.7 1.2v13.6c0 .5 .3 1 .7 1.2l11.8 6.8c.4 .3 1 .3 1.4 0L584 235c.4-.3 .7-.7 .7-1.2v-13.6c0-.5-.3-1-.7-1.2l-11.8-6.8c-.4-.3-1-.3-1.4 0L559 219zm-254.2 43.5v-70.4c0-2.6-1.6-5.1-3.9-6.4l-61.1-35.2c-2.1-1.2-5-1.4-7.4 0l-61.1 35.2c-2.3 1.3-3.9 3.7-3.9 6.4v70.4c0 2.8 1.9 5.2 4 6.4l61.2 35.2c2.4 1.4 5.2 1.3 7.4 0l61-35.2c1.8-1 3.1-2.7 3.6-4.7 .1-.5 .2-1.1 .2-1.7zm-74.3-124.9l-.8 .5h1.1l-.3-.5zm76.2 130.2l-.4-.7v.9l.4-.2z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" height="80" width="80" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#0676cb" d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#ff2450" d="M504.4 115.8a5.7 5.7 0 0 0 -.3-.7 8.5 8.5 0 0 0 -.5-1.3 6 6 0 0 0 -.5-.7 9.4 9.4 0 0 0 -.7-.9c-.2-.2-.5-.4-.8-.6a8.8 8.8 0 0 0 -.9-.7L404.4 55.6a8 8 0 0 0 -8 0L300.1 111h0a8.1 8.1 0 0 0 -.9 .7 7.7 7.7 0 0 0 -.8 .6 8.2 8.2 0 0 0 -.7 .9c-.2 .2-.4 .5-.5 .7a9.7 9.7 0 0 0 -.5 1.3c-.1 .2-.2 .4-.3 .7a8.1 8.1 0 0 0 -.3 2.1V223.2l-80.2 46.2V63.4a7.8 7.8 0 0 0 -.3-2.1c-.1-.2-.2-.5-.3-.7a8.4 8.4 0 0 0 -.5-1.2c-.1-.3-.4-.5-.5-.7a9.4 9.4 0 0 0 -.7-.9 9.5 9.5 0 0 0 -.8-.6 9.8 9.8 0 0 0 -.9-.7h0L115.6 1.1a8 8 0 0 0 -8 0L11.3 56.5h0a6.5 6.5 0 0 0 -.9 .7 7.8 7.8 0 0 0 -.8 .6 8.2 8.2 0 0 0 -.7 .9c-.2 .3-.4 .5-.6 .7a7.9 7.9 0 0 0 -.5 1.2 6.5 6.5 0 0 0 -.3 .7 8.2 8.2 0 0 0 -.3 2.1v329.7a8 8 0 0 0 4 7l192.5 110.8a8.8 8.8 0 0 0 1.3 .5c.2 .1 .4 .2 .6 .3a7.9 7.9 0 0 0 4.1 0c.2-.1 .4-.2 .6-.2a8.6 8.6 0 0 0 1.4-.6L404.4 400.1a8 8 0 0 0 4-7V287.9l92.2-53.1a8 8 0 0 0 4-7V117.9A8.6 8.6 0 0 0 504.4 115.8zM111.6 17.3h0l80.2 46.2-80.2 46.2L31.4 63.4zm88.3 60V278.6l-46.5 26.8-33.7 19.4V123.5l46.5-26.8zm0 412.8L23.4 388.5V77.3L57.1 96.7l46.5 26.8V338.7a6.9 6.9 0 0 0 .1 .9 8 8 0 0 0 .2 1.2h0a5.9 5.9 0 0 0 .4 .9 6.4 6.4 0 0 0 .4 1v0a8.5 8.5 0 0 0 .6 .8 7.6 7.6 0 0 0 .7 .8l0 0c.2 .2 .5 .4 .8 .6a8.9 8.9 0 0 0 .9 .7l0 0 0 0 92.2 52.2zm8-106.2-80.1-45.3 84.1-48.4 92.3-53.1 80.1 46.1-58.8 33.6zm184.5 4.6L215.9 490.1V397.8L346.6 323.2l45.8-26.2zm0-119.1L358.7 250l-46.5-26.8V131.8l33.7 19.4L392.4 178zm8-105.3-80.2-46.2 80.2-46.2 80.2 46.2zm8 105.3V178L455 151.2l33.7-19.4v91.4h0z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path fill="#0f0f0f" d="M216.3 158.4H137C97 147.9 6.5 150.6 6.5 233.2c0 30.1 15 51.2 35 61-25.1 23-37 33.9-37 49.2 0 11 4.5 21.1 17.9 26.8C8.1 383.6 0 393.4 0 411.7c0 32.1 28.1 50.8 101.6 50.8 70.8 0 111.8-26.4 111.8-73.2 0-58.7-45.2-56.5-151.6-63l13.4-21.6c27.3 7.6 118.7 10 118.7-67.9 0-18.7-7.7-31.7-15-41.1l37.4-2.8zm-63.4 241.9c0 32.1-104.9 32.1-104.9 2.4 0-8.1 5.3-15 10.6-21.5 77.7 5.3 94.3 3.4 94.3 19.1zm-50.8-134.6c-52.8 0-50.5-71.2 1.2-71.2 49.5 0 50.8 71.2-1.2 71.2zm133.3 100.5v-32.1c26.8-3.7 27.2-2 27.2-11V203.6c0-8.5-2.1-7.4-27.2-16.3l4.5-32.9H324v168.7c0 6.5 .4 7.3 6.5 8.1l20.7 2.8v32.1zm52.5-244.3c-23.2 0-36.6-13.4-36.6-36.6s13.4-35.8 36.6-35.8c23.6 0 37 12.6 37 35.8s-13.4 36.6-37 36.6zM512 350.5c-17.5 8.5-43.1 16.3-66.3 16.3-48.4 0-66.7-19.5-66.7-65.5V194.8c0-5.4 1.1-4.1-31.7-4.1V154.5c35.8-4.1 50-22 54.5-66.3h38.6c0 65.8-1.3 61.8 3.3 61.8H501v40.7h-60.6v97.2c0 6.9-4.9 51.4 60.6 26.8z" />
								</svg>

							</div>
						</div>



					</div><!-- End /  -->

				</div>
			</div>
		</div>
	</section>
	<!-- End / ABOUT -->

	<!-- Contact -->
	<section class="awe-section">
		<div class="container">

			<!-- page-title -->
			<div class="page-title pb-40">
				<h2 class="page-title__title">Get in touch</h2>
				<div class="page-title__divider"></div>
			</div><!-- End / page-title -->

		</div>
	</section>
	<section class="awe-section bg-gray" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-3 ">

					<!-- contact -->
					<div class="contact">
						<div class="contact__icon"><i class="pe-7s-note"></i></div>
						<h3 class="contact__title">address</h3>
						<div class="contact__text">Spinnerijstaat,4</div>
						<div class="contact__text">8930 - Lauwe</div>
						<div class="contact__text">BELGIUM</div>
					</div><!-- End / contact -->


					<!-- contact -->
					<div class="contact">
						<div class="contact__icon"><i class="pe-7s-back"></i></div>
						<h3 class="contact__title">call me</h3>
						<div class="contact__text">+32 468 43 18 23</div>
					</div><!-- End / contact -->


					<!-- contact -->
					<div class="contact">
						<div class="contact__icon"><i class="pe-7s-voicemail"></i></div>
						<h3 class="contact__title">e-mail</h3>
						<div class="contact__text"><a href="#">nunolcmarques@gmail.com</a></div>
					</div><!-- End / contact -->

				</div>
				<div class="col-md-7 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
					<div class="form-wrapper">

						<!-- form-item -->
						<div class="form-item form-item--half">
							<input class="" type="text" name="input" placeholder="your email" />
						</div><!-- End / form-item -->
						<!-- form-item -->
						<div class="form-item">
							<input class="" type="text" name="input" placeholder="<?= isset($subject) ? $subject : 'Subject' ?>" />
						</div><!-- End / form-item -->

						<!-- form-item -->
						<div class="form-item text-dark">
							<textarea class="text-dark" placeholder="<?= isset($messageEmail) ? $messageEmail : 'Your message' ?>" style="min-height:200px;"></textarea>
						</div><!-- End / form-item -->

						<!-- form-item -->
						<div class="form-item">
							<a class="md-btn md-btn--primary md-btn--lg " href="#">Send message
							</a>
						</div><!-- End / form-item -->

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End / Contact -->


</div>





<?php
include('views/partials/footer.php');
?>