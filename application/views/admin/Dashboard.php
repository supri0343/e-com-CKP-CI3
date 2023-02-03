<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title ?></title>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body>
	<div id="wrapper">

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php',$list) ?>

				<div class="container-fluid">
					<hr>
					<div class="row">
						<div class="col-md-auto">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<!-- <div class="carousel-item active">
								<img class="d-block w-100" src="<?=base_url('assets/image/home1.jpg')?>" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?=base_url('assets/image/home2.jpg')?>" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?=base_url('assets/image/home3.jpg')?>" alt="Third slide">
							</div> -->
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button"
									data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button"
									data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>


				</div>

			</div>


			<?php $this->load->view('partials/js.php') ?>

</body>

</html>
