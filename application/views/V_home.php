<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>

		<nav class="navbar navbar-expand navbar-dark bg-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="nav-link">Home</a>
				</li>
			</ul>
		</nav>
		<?php
		foreach ($data as $d) {
		?>

		<!-- Bagian Card -->
		<div class="card" style="width: 18rem;">
		  
		  <div class="card-body">

		  <img src="<?php echo base_url('assets/image/' . $d['foto']) ?>" class="card-img-top" alt="...">
		    <h5 class="card-title"><?= $d['nama_penjual'] ?></h5>
		    <p class="card-text"><?= $d['alamat'] ?></p>
		    <a href="<?= site_url('kata/detail_penjual/' . $d['id_penjual']) ?>" class="btn btn-primary">Detail</a>
		  </div>
		</div>

		<?php } ?>
	</body>
</html>