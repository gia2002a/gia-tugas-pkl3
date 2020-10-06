<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Belajar Fungsi String</h3>
	<?php echo ucfirst("Nama saya Indrii"); ?><br>
	<?php echo ucwords("Saya biasa berangkat jam 6 pagi dan saya suka mengkoding"); ?>

	<?php  
	$kalimat= "smkn2 sukabumi";
	echo substr($kalimat,4); 
	?>

	<?php 
		$kalimat ="satu dua tiga empat lima";
		$arr_kalimat1=explode(" ",$kalimat ); var_dump($arr_kalimat1);

			 ?><br>
			 <?php 
			 	$angka1 = 1999.12345; echo number_format($angka1); echo "<br>";
			 	$angka2 = 1999.99; echo number_format($angka2); echo "<br>";
			 	$angka3=  1999.888;echo number_format($angka3);echo "<br>";
			 	$angka4=  1999;echo number_format($angka4,3);
			  ?>


</body>
</html>