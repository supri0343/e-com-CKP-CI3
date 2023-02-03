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
							<div class="card-header"><strong>List Pesanan </strong>
								<div class="float-right">
								<?php if ($this->session->userdata('role') == "admin") : ?>
									<a href="<?= site_url('barang/export') ?>" class="btn btn-danger btn-sm"><i
											class="fa fa-file-pdf"></i>&nbsp;&nbsp;Cetak</a>
											<?php endif ?>
								</div>
							</div>


							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<td>No</td>
												<td>Nama Pemesan</td>
												<td>Alamat Email</td>
												<td>No.Hp</td>
												<td>Alamat</td>
												<td>Nama Barang</td>
												<td>Kode Barang</td>
												<td>Gambar</td>
												<td>Jumlah Pembelian</td>
												<td>Status Pesan</td>
												<?php if ($this->session->userdata('role') == "admin") : ?>
												<td>Aksi</td>
												<?php endif ?>

											</tr>
										</thead>
										<tbody>
										<?php if ($listOrder) :?>
											<?php foreach ($listOrder as $order): ?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $order->nama ?></td>
												<td><?= $order->email ?></td>
												<td><?= $order->phone ?></td>
												<td><?= $order->alamat ?></td>
												<td><?= $order->nama_produk?></td>
												<td><?= $order->kode?></td>
												<td> <img width="40%"
														src="<?=base_url('assets/image/produk/'.$order->kode.'/'.$order->gambar)?>"></td>
												<td><?= $order->qty_order ?></td>
												<td><?= $order->status ?></td>
											
											<?php if ($this->session->userdata('role') == "admin") : ?>
												<td>
													<a href="<?= site_url('transaksi/view/' . $order->id) ?>"
														class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
													
												<?php endif ?>
											</tr>
											<?php endforeach ?>
											<?php endif ?>
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
