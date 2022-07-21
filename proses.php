<?php

	$pengirim	=$_POST['pengirim'];
	$notelp1	=$_POST['notelp1'];
	$alamat1	=$_POST['alamat1'];
	$penerima	=$_POST['penerima'];
	$notelp2	=$_POST['notelp2'];
	$alamat2	=$_POST['alamat2'];
	$jarak 		=$_POST['ijarak'];
	$biaya		=$_POST['ototal'];

	echo"<head><title>JASA PENGIRIMAN</head></title>";
	$fp=fopen("file.txt","a+");
	fputs($fp,"$pengirim|$notelp1|$alamat1|$penerima|$notelp2|$alamat2|$jarak|$biaya\n");
	fclose($fp);

	echo"Terima Kasih Atas Partisipasi Anda <br>";
	echo"<a href=lihatdetail.php> Lihat detail </a><br>";
?>