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
					<div class="clearfix">

						<!-- <hr> -->
						<?php if ($this->session->flashdata('success')) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('success') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php elseif($this->session->flashdata('error')) : ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('error') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php endif ?>
						<div class="card shadow">
							<div class="card-header"><strong>Data About Us </strong>
								<div class="float-right">

									<a href="<?= site_url('aboutus/export') ?>" class="btn btn-danger btn-sm"><i
											class="fa fa-file-pdf"></i>&nbsp;&nbsp;Cetak</a>
									<a href="<?= site_url('aboutus/tambah/') ?>"
										class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>

								</div>
							</div>


							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<td>No</td>
												<td>Judul</td>
												<td>Sub Judul</td>
												<td>Gambar</td>
												<td>Preview Gambar</td>
												<td>Deskripsi</td>
												<td>Aksi</td>

											</tr>
										</thead>
										<tbody>
											<?php foreach ($data as $item): ?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?=$item->judul ?></td>
												<td><?=$item->subjudul ?></td>
												<td><?=$item->gambar ?></td>
												<td width="40%"> <img width="50%"
														src="<?=base_url('assets/image/AboutUs/'.$item->gambar)?>"></td>
												<td><?= $item->deskripsi ?></td>

												<td  width="8%">
													<a href="<?= site_url('aboutus/view/' . $item->id) ?>"
														class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
													<a onclick="return confirm('apakah anda yakin?')"
														href="<?= site_url('aboutus/hapus/' . $item->id) ?>"
														class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
												</td>

											</tr>
											<?php endforeach ?>
										</tbody>
									</table>
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
