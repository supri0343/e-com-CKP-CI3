<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title ?></title>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body>
	<div id="wrapper">
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('barang') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php',$list) ?>

				<div class="container-fluid">

					<hr>
					<div class="row">
						<div class="clearfix">
							<div class="float-left">
								<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
							</div>

						</div>
						<div class="col-md-12">
							<div class="card shadow">
								<div class="card-header"><strong>Isi Form Dibawah Ini!</strong>
									<div class="float-right">

										<?php if (!empty($barang)) : ?>
										<a href="<?= site_url('product/GetData_Product/'.$barang->kode) ?>"
											class="btn btn-secondary btn-sm"><i
												class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
										<?php else: ?>
										<a href="<?= site_url('product/GetData_Product/'.$kode) ?>"
											class="btn btn-secondary btn-sm"><i
												class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
										<?php endif ?>

										<!-- <a href="<?= site_url('product/GetData_Product/'.$barang->kode) ?>"
											class="btn btn-secondary btn-sm"><i
												class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a> -->
									</div>
								</div>
								<div class="card-body">
								<?php if (!empty($barang)) : ?>
									<form action="<?= site_url('product/proses_ubah/' .$barang->id) ?>" id="form-tambah"
										method="POST">
										<?php else: ?>
											<form action="<?= site_url('product/proses_tambah') ?>" id="form-tambah"
										method="POST">
										<?php endif ?>

									<!-- <form action="<?= site_url('product/proses_ubah/' .$barang->id) ?>" id="form-tambah"
										method="POST"> -->
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="kode"><strong>Kode Barang</strong></label>

												<select name="kode" id="satuan" class="form-control" required>
													<option
														value="HD_PLASTIK"
														<?= $kode == 'HD_PLASTIK' ? 'selected' : '' ?>>
														HD_PLASTIK</option>
													<option
														value="PE_PLASTIK"
														<?= $kode == 'PE_PLASTIK' ? 'selected' : '' ?>>
														PE_PLASTIK</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label for="nama_barang"><strong>Nama Barang</strong></label>
												<input type="text" name="nama" placeholder="Nama Barang"
													autocomplete="off" class="form-control" required
													value="<?php echo !empty($barang->nama_produk)?$barang->nama_produk:''; ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="stok"><strong>Stok</strong></label>
												<input type="number" name="stok" placeholder="Stok" autocomplete="off"
													class="form-control" required
													value="<?php echo !empty($barang->stok)?$barang->stok:''; ?>">
											</div>
											<div class="form-group col-md-6">
												<label for="satuan"><strong>Harga</strong></label>
												<input type="number" name="harga" placeholder="Harga" autocomplete="off"
													class="form-control" required
													value="<?php echo !empty($barang->harga)?$barang->harga:''; ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Gambar</strong></label>
												<input type="text" name="gambar" placeholder="Gambar" autocomplete="off"
													class="form-control" required
													value="<?php echo !empty($barang->gambar)?$barang->gambar:''; ?>">
											</div>
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Deskripsi</strong></label>
												<input type="text" name="deskripsi" placeholder="Deskripsi" autocomplete="off"
													class="form-control" required
													value="<?php echo !empty($barang->deskripsi)?$barang->deskripsi:''; ?>">
									
											</div>
										</div>
										<hr>
										<div class="form-group">
											<button type="submit" class="btn btn-primary"><i
													class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
											<button type="reset" class="btn btn-danger"><i
													class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- load footer -->
			<!-- <?php $this->load->view('partials/footer.php') ?> -->
		</div>



	</div>
</body>

</html>
