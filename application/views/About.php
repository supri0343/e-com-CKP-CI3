<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body>
	<div id="wrapper">
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php $this->load->view('partials/topbar.php',$list) ?>
				<div class="container-fluid">
					<hr>
					<div class="card">
						<div class="card-body">
							<?php foreach($data as $item) { ?>
							<?php if ($item->id % 2 == 0 ): ?>

							<div class="row">
								<div class="col-md-8">
									<strong>
										<h3 align="right"><?php echo $item->judul ?></h3>
									</strong>
									<strong>
										<h1 align="right"><?php echo $item->subjudul ?></h1>
									</strong>
									<div class="card">
									<p class="card-text justify" align="justify"><?php echo $item->deskripsi ?></p>
							</div>
								</div>
								<div class="col-md-4">
									<img width='100%' src="<?=base_url('assets/image/AboutUs/'. $item->gambar)?>"
										alt="Card image cap">
								</div>
							</div>
							<br />
							<?php elseif($item->id % 2 == 1): ?>
							<div class="row">
								<div class="col-md-4">
									<img width='100%' src="<?=base_url('assets/image/AboutUs/'.$item->gambar)?>"
										alt="Card image cap">
								</div>
								<div class="col-md-8">
								<strong>
										<h3><?php echo $item->judul ?></h3>
									</strong>
									<strong>
										<h1><?php echo $item->subjudul ?></h1>
									</strong>
									<div class="card">
									<p class="card-text justify" align="justify"><?php echo $item->deskripsi ?></p>
							</div>
								</div>
							</div>
							<?php endif ?>
							<br />
							<?php } ?>



							<!-- <div class="row">
								<div class="col-md-4">
									<img width='100%' src="<?=base_url('assets/image/home1.jpg')?>"
										alt="Card image cap">
								</div>
								<div class="col-md-8">
									<p class="card-text left" align="left">Some quick example text to build on the card
										title
										and make up the bulk
										of the
										card's content.</p>
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-8">
									<p class="card-text left" align="right">Some quick example text to build on the card
										title
										and make up the bulk
										of the
										card's content.</p>
								</div>
								<div class="col-md-4">
									<img width='100%' src="<?=base_url('assets/image/home1.jpg')?>"
										alt="Card image cap">
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>

</body>

</html>
