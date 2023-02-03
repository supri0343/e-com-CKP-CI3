<!DOCTYPE html>

<html lang="en">

<head>

	<title>Login</title>

	<!-- Vendors styles-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/simplebar/css/simplebar.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendors/simplebar.css">
	<!-- Main styles for this application-->
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<style>
		#load {
			width: 100%;
			height: 100%;
			position: fixed;
			text-indent: 100%;
			background: #e0e0e0 url('<?php echo base_url().'assets/img/loading.gif'?>') no-repeat center;
			z-index: 1;
			opacity: 0.4;
			background-size: 8%;
		}

	</style>
</head>

<body>
	<form action="<?php echo site_url('auth/login')?>" method="POST">

		<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
			<!-- <div id="load" >Loading...</div> -->
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="card-group d-block d-md-flex row">
							<div class="card col-md-7 p-4 mb-0">
								<div class="card-body">
									<h1>Login</h1>

									<?php if($this->session->flashdata('error')) : ?>
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<?= $this->session->flashdata('error') ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<?php endif ?>
                  
									<p class="text-medium-emphasis">Sign In to your account</p>
									<div class="input-group mb-3"><span class="input-group-text">
											<svg class="icon">
												<use xlink:href="<?php echo base_url(); ?>assets/vendors/@coreui/icons/svg/free.svg#cil-user">
												</use>
											</svg></span>
										<input class="form-control" type="text" placeholder="Username" name="username" id="username" required>
									</div>
									<div class="input-group mb-4"><span class="input-group-text">
											<svg class="icon">
												<use
													xlink:href="<?php echo base_url(); ?>assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked">
												</use>
											</svg></span>
										<input class="form-control" type="password" placeholder="Password" name="password" id="password" required>
									</div>
									<div class="row">
										<div class="col-6 ">
											<button class="btn btn-primary px-4" id="sign_in" type="submit">Login</button>
										</div>
										<!-- <div class="col-6 text-end">
                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                      </div> -->
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- CoreUI and necessary plugins-->
	<script src="<?php echo base_url(); ?>/assets/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/simplebar/js/simplebar.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery-1.9.1.min.js"></script>
	<!-- <script text="text/javascript">
    
    $(document).ready(function(){
    	$("#load").hide();
        $("#sign_in").click(function(){       	
            //console.log($("#filtersearch").val());
            $("#load").show();
            $.ajax({
                method: 'GET',
                url: '<?php site_url('auth/login')?>',
                data: {username: $("#username").val(), password:$("#password").val()},
                dataType: "json",
                success: function(response){
                  $("#load").hide();

                  window.location = '<?php echo base_url();?>dashboard';
              
                },
                error: function(response){
                  $("#load").hide();
                  // redirect(base_url().'login?alert=gagal');
                  window.location = '<?php site_url('auth');?>';
                  alert("Login Gagal, Username dan Password Anda Salah !!!");
                }
            })
        })
      })
      

    </script> -->


</body>

</html>
