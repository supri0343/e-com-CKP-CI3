<!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->

<nav class="navbar navbar-expand navbar-light bg-light">





	<!-- Topbar Navbar -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<img src="<?=base_url('assets/logo3x.png')?>">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('dashboard') ?>">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url("aboutus") ?>">About Us</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					Product
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">

					<?php foreach($list as $item) { ?>
					<a class="dropdown-item"
						href="<?= site_url('product/GetData_Product/'.$item->kode)?>"><?= $item->name ?></a>
					<?php } ?>

			</li>
		</ul>


		<form class="form-inline my-2 my-lg-0">
			<?php if ($this->session->userdata('status')=='login') : ?>
				<a class="nav-link" href="">Status Pesanan</a>
				<a class="nav-link" href="<?= site_url("auth/logout") ?>">Logout</a>
			<?php else : ?>
			<a class="nav-link" href="<?= site_url("auth") ?>">Login</a>
			<?php endif ?>

		</form>
	</div>
</nav>
