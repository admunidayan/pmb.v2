<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<!-- lgo -->
	<link rel="shortcut icon" href="<?php echo base_url($brand); ?>">
	<!-- css bootsrap 4.0 beta -->
	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
	<!-- css font awesome -->
	<link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>">
	<!-- css font css pribadi -->
	<link rel="stylesheet" href="<?php echo base_url('asset/css/custom.css'); ?>">
	<!-- jquery terlebih dahulu -->
	<script src="<?php echo base_url('asset/js/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script>
	<!-- js bootstrap v.4 butuh pooper.js -->
	<script src="<?php echo base_url('asset/js/popper.min.js'); ?>" type="text/javascript"></script>
	<!-- js bootstrap v.4 -->
	<script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="login-box border border-info">
					<h2 class="text-center border border-top-0 border-left-0 border-right-0 border-secondary bts-bwh">Login</h2>
					<form action="<?php echo base_url('index.php/login/proses_login/') ?>" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Nomor Registrasi</label>
							<input type="text" name="username" class="form-control form-control-lg border border-info" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nomor registrasi">
							<small id="emailHelp" class="form-text text-muted">Gunakan Nomor Registrasi anda</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control form-control-lg border border-info" id="exampleInputPassword1" placeholder="Password">
							<small id="emailHelp" class="form-text text-muted">Password dapat terdiri dari gabungan simbol, angka dan huruf</small>
						</div>
						<button type="submit" style="width:100%;" class="btn btn-info btn-lg">Submit</button>
					</form>
					<div class="text-center">
						<p class="text-secondary bts-ats">Copy Right <?php echo $brand.' '.date('Y'); ?></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="register-box border border-warning">
					<h2 class="text-center border border-top-0 border-left-0 border-right-0 border-secondary bts-bwh">Daftar Baru</h2>
					Untuk dapat melakukan pendaftaran, isi form yang terdapat di link di bawah ini.<hr/>
					<a href="<?php echo base_url('index.php/peserta/daftar/') ?>" class="btn btn-warning btn-lg" style="width: 100%">Daftar Baru</a><hr/>
					Gunakan data valid saat mengisi formulir pendaftaran "Penerimaan Mahasiswa Baru". <br/><span class="text-danger">Hati hati terhadap segala jenis penipuan, kami tidak meminta bayaran didepan.</span><br/>Kami sangat menantikan kalian bergabung bersama kami :)<hr/>
					<div class="text-center">
						<p class="text-secondary bts-ats">Copy Right <?php echo $brand.' '.date('Y'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>