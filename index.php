<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CATARMAN SK FEDERATION</title>
	<link rel="stylesheet" href="./assets/bs5/css/bootstrap.min.css">
	<link rel="shortcut icon" href="./assets/images/fed.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<style>
		body {
			background-color: #F6F9FB;
			font-family: 'Open Sans', sans-serif;
			width: 100vw;
			scroll-behavior: smooth;
		}

		body::-webkit-scrollbar {
			display: none;
		}

		#carouselExampleIndicators .carousel-item {
			background-color: #000;
			width: 100%;
		}

		#carouselExampleIndicators .carousel-item img {
			opacity: 0.3;
			height: 100vh;
			object-fit: cover;
			object-position: center;
		}

		.navbar .navbar-nav .nav-link {
			color: black;
			font-size: 1.1em;
			padding: 0.5em 2em;
			font-weight: bold;
		}

		.navbar .navbar-nav .nav-link:hover {
			color: #1B1D38;
			background-color: #f5f6f7;
		}

		.navbar-brand img:hover {
			transform: scale(1.1);
			transition: 0.3s ease-in-out;
		}

		.carousel-indicators [data-bs-target] {
			border-radius: 50%;
			width: 10px;
			height: 10px;
			background-color: #efefef;
			border: none;
			margin: 0 5px;
		}

		@media screen and (min-width: 768px) {
			.navbar-brand img {
				width: auto;
			}

			.navbar-brand {
				margin-right: 0;
				padding: 0 1em;
			}
		}
	</style>
</head>

<body>
	<header>
		<?php include './components/navbar.php'; ?>
	</header>

	<main>
		<?php include './components/carousel.php'; ?>

		<div class="container-lg mt-5 mb-0 vh-100 d-flex justify-content-center align-items-center">
			<div class="row">
				<div class="col-md-4">
					<img src="./assets/images/fed.png" alt="logo" class="img-fluid">
				</div>
				<div class="col-md-8">
					<h1 class="text-center fw-bold">Sample Text</h1>
					<p class="text-center px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus amet nostrum magni reiciendis consequuntur a, maiores cumque quae omnis in voluptate saepe eveniet, cum id eius odio dignissimos enim esse! Laborum saepe, magni quis nesciunt sed, fugiat esse odio asperiores tempora quam assumenda! Autem saepe obcaecati veniam deleniti! Magni officia est mollitia dignissimos nesciunt totam beatae cumque maiores, quasi impedit a magnam dolor modi ratione deserunt dolorum nobis ea ipsam blanditiis nemo alias repudiandae quidem similique doloremque? Odit placeat modi quaerat. Dignissimos eum quaerat fuga nam delectus doloremque iusto eligendi quibusdam error molestiae reprehenderit explicabo laborum, porro adipisci labore nulla.</p>
				</div>
			</div>
		</div>

		<div class="container-lg vh-100 d-flex justify-content-center align-items-center bg-light">
			<div class="row">
				<div class="col-md-8">
					<h2 class="text-center">Sample Information</h2>
					<p class="text-muted">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam error tempore sunt ullam eligendi quibusdam aut dolores excepturi sed rem laudantium, natus deleniti odit accusantium ipsam in quisquam? Minima saepe, quis quos perferendis quam consectetur ipsa fugit nulla architecto nesciunt hic, eveniet recusandae praesentium similique tempora corporis debitis voluptatum possimus?
					</p>
				</div>
				<div class="col-md-4 text-center rounded-3 shadow-lg py-4">
					<div id="verticalCarousel" class="carousel slide vertical" data-bs-touch="false" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FCatarmanSKFed%2Fposts%2Fpfbid0h3UZLq7WJuKwWqWCuQP6xLYAu48bAMiEPFS9jXC64CYDYrPfqf6er9NYWDeYvUhXl&show_text=true&width=500" width="400" height="530" style="border:none;overflow:hidden" scrolling="yes" frameborder="2" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
							</div>
							<div class="carousel-item">
								<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FCatarmanSKFed%2Fposts%2Fpfbid02pPB8cNXjpZmN3TewsFXQUSCCBFGnMbRseWDV7NCoGBVhBFP7FJpLMc1XXSjAcJEwl&show_text=true&width=500" width="400" height="530" style="border:none;overflow:hidden" scrolling="yes" frameborder="2" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
							</div>
							<div class="carousel-item">
								<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FCatarmanSKFed%2Fposts%2Fpfbid02Zozs5vduAqS948gcEmA8NBHsbgTSTS4TWev8txpFCqMoZVUHCQ3YQfYG8K2ShGK7l&show_text=true&width=500" width="400" height="530" style="border:none;overflow:hidden" scrolling="yes" frameborder="2" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		</div>

	</main>



	<?php include './components/footer.php'; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>