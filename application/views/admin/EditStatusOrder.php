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
								<!-- <h1 class="h3 m-0 text-gray-800"><?= $title ?></h1> -->
							</div>

						</div>
						<div class="col-md-12">
							<div class="card shadow">
								<div class="card-header"><strong><?= $title ?></strong>
									<div class="float-right">
										<a href="<?= site_url('transaksi') ?>" class="btn btn-secondary btn-sm"><i
												class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
									</div>
								</div>
								<div class="card-body">
									<form action="<?= site_url('transaksi/proses_ubah/'.$data->id) ?>" id="form-tambah"
										method="POST">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama_barang"><strong>Nama Pemesan</strong></label>
												<input type="text" name="nama" placeholder="Nama Pemesan"
													autocomplete="off" class="form-control" readonly
													value="<?php echo !empty($data->nama)?$data->nama:''; ?>">

											</div>
											<div class="form-group col-md-6">
												<label for="nama_barang"><strong>Alamat Email</strong></label>
												<input type="text" name="email" placeholder="Alamat Email"
													autocomplete="off" class="form-control" readonly
													value="<?php echo !empty($data->email)?$data->email:''; ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="stok"><strong>No.HP</strong></label>
												<input type="text" name="phone" placeholder="No.HP" class="form-control"
													readonly
													value="<?php echo !empty($data->phone)?$data->phone:''; ?>">
											</div>
											<div class="form-group col-md-6">
												<label for="satuan"><strong>Alamat</strong></label>
												<input type="text" name="alamat" placeholder="Alamat" autocomplete="off"
													class="form-control" readonly
													value="<?php echo !empty($data->alamat)?$data->alamat:''; ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Nama Barang</strong></label>
												<input type="text" name="nama_produk" class="form-control" readonly
													value="<?php echo !empty($data->nama_produk)?$data->nama_produk:''; ?>">
											</div>
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Kode Barang</strong></label>
												<input type="text" name="kode" placeholder="Deskripsi"
													autocomplete="off" class="form-control" readonly
													value="<?php echo !empty($data->kode)?$data->kode:''; ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Jumlah Pembelian</strong></label>
												<input type="number" name="qty_order" autocomplete="off"
													class="form-control" readonly
													value="<?php echo !empty($data->qty_order)?$data->qty_order:''; ?>">

											</div>
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Harga Pembelian</strong></label>
												<input type="number" name="harga_pembelian" placeholder="Gambar"
													autocomplete="off" class="form-control" readonly
													value="<?php echo !empty($data->harga_pembelian)?$data->harga_pembelian:''; ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Tanggal Pembelian</strong></label>
												<input type="date" name="total_bayar" placeholder="Gambar"
													autocomplete="off" class="form-control" readonly
													value="<?php echo !empty($data->tgl_order)?$data->tgl_order:''; ?>">
											</div>

											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Total Pembayaran</strong></label>
												<input type="number" name="total_bayar" placeholder="Gambar"
													autocomplete="off" class="form-control" readonly
													value="<?php echo !empty($data->total_bayar)?$data->total_bayar:''; ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Status Pesanan</strong></label>
												<select name="status" id="status" class="form-control" require>
													<option
														value="Sedang Diproses"
														<?= $data->status == 'Sedang Diproses' ? 'selected' : '' ?>>
														Sedang Diproses</option>
													<option
														value="Barang Dalam Pengiriman"
														<?= $data->status == 'Barang Dalam Pengiriman' ? 'selected' : '' ?>>
														Barang Dalam Pengiriman</option>
												</select>
											</div>
											<div class="form-group col-md-3">
												<label for="harga_beli"><strong>Gambar</strong></label>
												<img class="card-img-top" width="80%"
													src="<?=base_url('assets/image/'.$data->gambar)?>">
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
