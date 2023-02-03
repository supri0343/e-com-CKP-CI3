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
						<?php if($this->session->flashdata('error')) : ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('error') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php endif ?>
							<div class="float-left">
								<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
							</div>

						</div>
						<div class="col-md-12">
							<div class="card shadow">
								<div class="card-header"><strong>Isi Form Dibawah Ini!</strong>
									<div class="float-right">									
										<a href="<?= site_url('aboutus') ?>"
											class="btn btn-secondary btn-sm"><i
												class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>						
									</div>
								</div>
								<div class="card-body">
								<?php if (!empty($data)) : ?>
									<form action="<?= site_url('aboutus/proses_ubah/' .$data->id) ?>" id="form-tambah"
										method="POST">
										<?php else: ?>
											<form action="<?= site_url('aboutus/proses_tambah') ?>" id="form-tambah"
										method="POST">
										<?php endif ?>
										
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Judul</strong></label>
												<input type="area" name="judul" placeholder="Judul" autocomplete="off"
													class="form-control" required
													value="<?php echo !empty($data->judul)?$data->judul:''; ?>">
											</div>
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Sub Judul</strong></label>
												<input  type="text" name="subjudul" placeholder="Sub Judul" autocomplete="off"
													class="form-control" required
													value="<?php echo !empty($data->subjudul)?$data->subjudul:''; ?>">																												
											</div>
										</div>
						
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Gambar</strong></label>
												<input type="area" name="gambar" placeholder="Gambar" autocomplete="off"
													class="form-control" required
													value="<?php echo !empty($data->gambar)?$data->gambar:''; ?>">
											</div>
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Deskripsi</strong></label>
												<textarea  type="text" name="deskripsi" placeholder="Deskripsi" autocomplete="off"
													class="form-control" required
													value="<?php echo !empty($data->deskripsi)?$data->deskripsi:''; ?>">
													<?php echo !empty($data->deskripsi)?$data->deskripsi:''; ?>
										</textarea>
									
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
