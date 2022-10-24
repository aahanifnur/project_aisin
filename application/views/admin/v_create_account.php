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
  border-radius: 10px;">

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
								<?= $this->session->flashdata('message') ?>

								<form class="user" method="POST" action="<?= base_url('admin/buat_akun'); ?>">
									<div class="form-group">
										<label for="">Name</label>
										<input type=name" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name') ?>">
										<?= form_error('name', '<small class="text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="">Email Address</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
										<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
									</div>
									<div class=" form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="">Password</label>
											<input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
											<?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
										</div>
										<div class="col-sm-6">
											<label for="">Confirm Password</label>
											<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
											<?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
										</div>
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
										Register Account
									</button>

								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--Row-->