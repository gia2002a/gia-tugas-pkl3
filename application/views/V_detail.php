<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	</head>

	<body>
		<?php
		foreach ($data as $d) {
		?>

		<!-- Bagian Card -->
		<div class="card" style="width: 18rem;">
		  <img src="<?php echo base_url('assets/image/' . $d['gambar']) ?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title"><?= $d['nama_barang'] ?></h5>
		    <p class="card-text"><?= $d['harga'] ?></p>
		    <p class="card-text"><?= $d['stok'] ?></p>
		    <a href="<?= site_url('kata/detail_barang' . $d['id_barang']) ?>" class="btn btn-primary">Beli</a>
		  </div>
		</div>

		<?php } ?>
	</body>
</html>