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

							<h1>CHECKOUT</h1>
							<div class="checkout">

								<div class="row">

									<div class="col-md-4 order-md-2 mb-4 ">
										<h4 class="d-flex justify-content-between align-items-center mb-3">
											<span class="text-muted">Deskripsi Barang</span>

										</h4>
										<ul class="list-group mb-3">
											<li class="list-group-item d-flex justify-content-between lh-condensed">
												<div>
													<?php $imageURL = base_url('assets/image/'.$produk->gambar) ?>
													<img src="<?php echo $imageURL; ?>" width="100%" />
													<h3 class="my-0">Nama : <?php echo $produk->nama_produk; ?></h3>
													<h5 class="my-0">Stok : (<?php echo $produk->stok; ?>)</h5>
													<h5 class="my-0">Harga : Rp.<?php echo $produk->harga; ?></h5>
													<h7 class="my-0">Deskripsi : <?php echo $produk->deskripsi; ?></h7>
												</div>
											</li>
										</ul>
									</div>
									<div class="col-md-8 order-md-1 list-group-item ">
										<h4 class="mb-3">Contact Details</h4>
										<form method="post">
											<div class="mb-3">
												<label for="name">Name</label>
												<input type="text" class="form-control" name="name"
													value="<?php echo !empty($custData['nama'])?$custData['nama']:''; ?>"
													placeholder="Enter name" required>

											</div>
											<div class="mb-3">
												<label for="email">Email</label>
												<input type="email" class="form-control" name="email"
													value="<?php echo !empty($custData['email'])?$custData['email']:''; ?>"
													placeholder="Enter email" required>

											</div>
											<div class="mb-3">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" name="phone"
													value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>"
													placeholder="Enter contact no" required>

											</div>
											<div class="mb-3">
												<label for="address">Address</label>
												<input type="text" class="form-control" name="address"
													value="<?php echo !empty($custData['alamat'])?$custData['alamat']:''; ?>"
													placeholder="Enter address" required>

											</div>

											<div class="mb-3">
												<label for="qty">Qty Order</label>
												<input type="number" class="form-control" name="qty"
													value="<?php echo !empty($custData['qty_order'])?$custData['qty_order']:''; ?>"
													placeholder="Enter Qty" required>

											</div>
											<input class="btn btn-success btn-lg btn-block" type="submit"
												name="placeOrder" value="Place Order">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
</body>

</html>
