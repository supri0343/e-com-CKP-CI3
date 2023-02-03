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
				<?php $this->load->view('partials/topbar.php',$list) ?>
				<div class="container-fluid">
					<hr>
					<!-- Three columns of text below the carousel -->
					<div class="card">
						<div class="card-body">
							<div class="row">

								<?php foreach($produk as $item) { ?>
								<div class="col-sm-2">
									<div class="card mb-4 shadow-sm">
										<img class="card-img-top" src="<?=base_url('assets/image/produk/'.$kode.'/'.$item->gambar)?>"
											alt="<?= $item->nama_produk ?>">
										<div class="card-body">
											<h2><a
													href="<?= base_url('berita/read/'.$item->nama_produk) ?>"><?= $item->nama_produk ?></a>
											</h2>
											<p class="card-text">Stok :<?= ($item->stok)?></p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<a href="<?= site_url('Transaksi/checkout/'.$item->id) ?>"
														class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"></i>
														CheckOut</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
