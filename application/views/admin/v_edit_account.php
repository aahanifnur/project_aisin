<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?= base_url('assets/'); ?>img/logo/logo.png" rel="icon">
	<title>RuangAdmin - Dashboard</title>
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/'); ?>css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<img width="100px" height="90px" src="<?= base_url('assets/'); ?>img/logo/aisin.png">
				</div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('user'); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">
			<div class="sidebar-heading">
				Features
			</div>
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
					<i class="far fa-fw fa-window-maximize"></i>
					<span>Menu</span>
				</a>
				<div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Izin Pekerjaan Khusus</h6>
						<a class="collapse-item" href="alerts.html">High Place Work</a>
						<a class="collapse-item" href="alerts.html">Confined Space</a>
						<a class="collapse-item" href="buttons.html">Hot Work</a>
						<a class="collapse-item" href="dropdowns.html">General</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Addons
			</div>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/akun_kontraktor'); ?>">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Akun Kontraktor</span></a>
			</li>
			<hr class="sidebar-divider">

			<li class="nav-item">
				<a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt fa-fw"></i>
					<span>Logout</span>
				</a>
			</li>

			<hr class="sidebar-divider">
			<div class="version" id="">Version 1.1 2022</div>
		</ul>
		<!-- Sidebar -->
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<!-- TopBar -->
				<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
					<button id="sidebarToggleTop" class="btn rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<ul class="navbar-nav ml-auto">
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-white small"><?= $user['name']; ?></span>
								<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') .  $user['image']; ?>">
							</a>

							<!-- dropdown user information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
			<!-- Topbar -->

			<!-- Container Fluid-->
			<div class="container-login">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-lg-6 col-md-9 col-sm-10">
						<div class="card shadow-sm my-4">
							<div class="card-body p-0">
								<!-- navbar -->


								<!-- end navbar -->
								<div class="row">
									<div class="col-lg-12">
										<div class="login-form">
											<div class="text-primary">
												<h5>Buat Akun</h5>
											</div>
											<p class="text-muted">Silakan buat akun sesuai dengan User Role, dan ubah sandi secara berkala</p>
											<p style="background-color: #fff3cd !important;
  padding: 20px;
  border-color: #ffecb5;
  color: #664d03;
  border-radius: 10px; ">

												<b>
													Keterangan Role ID : </b>
												<br>
												<br>
												<b>1</b> = Admin
												<br>
												<b>2</b> = P2K3L
												<br>
												<b>3</b> = GM
												<br>
												<b>4</b> = Kontraktor
												<br>
												<b>5</b> = Manager User
												<br>
												<b>6</b> = Manager Area
											</p>

											<form class="user" method="POST" action="<?= base_url('admin/ubah_akun'); ?>">
												<input type="hidden" class="form-control" id="id" name="id" placeholder="Full name" value="<?= $user['id'] ?>">

												<div class="form-group">
													<label for="">Name</label>
													<input type=name" class="form-control" id="name" name="name" placeholder="Full name" value="<?php echo $user['name'] ?>">
													<?= form_error('name', '<small class="text-danger">', '</small>'); ?>
												</div>
												<div class="form-group">
													<label for="">Email Address</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value=""><?= $user['email'] ?></input>
												</div>
												<div class=" form-group">
													<label for="">Password</label>
													<input type="password" class="form-control" id="password1" name="password1" placeholder="Password" value="<?= $user['password'] ?>">
													<?= form_error('password1', '<small class="text-danger">', '</small>'); ?>

												</div>
												<div class="form-group">
													<label>User Role ID</label>
													<select class="form-control mb-2" name="roleId" id="roleId">
														<option value="1">1 - Admin</option>
														<option value="2">2 - P2K3L</option>
														<option value="3">3 - GM</option>
														<option value="4">4 - Kontraktor</option>
														<option value="5">5 - Manager User</option>
														<option value="6">6 - Manager Area</option>
													</select>
												</div>

												<button type="submit" class="btn btn-primary btn-block">
													Update
												</button>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




			<!--Row-->

			<!-- Modal Logout -->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabelLogout">Are you sure?</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to logout?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
							<a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
						</div>
					</div>
				</div>
			</div>


			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>copyright &copy; <script>
								document.write(new Date().getFullYear());
							</script>
							<b><a href="#" target="_blank">AISIN Indonesia</a></b>
						</span>
					</div>
				</div>
			</footer>
			<!-- Footer -->
		</div>
	</div>

	<!-- Scroll to top -->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
</body>

</html>