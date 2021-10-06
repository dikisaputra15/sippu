<?php
	$png = file_get_contents("assets/img/kablebak.png");
	$pngbase64 = base64_encode($png);

	$gbr = $pdf['qr_code'];
	$bar = file_get_contents("assets/img/$gbr");
	$barcode = base64_encode($bar);

	$fot = $pdf['foto'];
	$barfot = file_get_contents("uploads/$fot");
	$foto = base64_encode($barfot);
?>

<center><img src='data:image;base64,<?= $pngbase64;?>' style="width: 90px; height: 90px;"></center>
<H3 align="center">PEMERINTAHAN KABUPATEN LEBAK</H3>
<H3 align="center"><b>DINAS PERINDUSTRIAN DAN PERDAGANGAN</b></H3>

<H1 align="center"><U>SURAT IZIN TEMPAT USAHA (SITU)</U></H1>
<H3 align="center">NOMOR : 503/ 66-SITU/DPMPTSP/2019</H3>

<h3 align="center">Memberikan Izin Tempat Usaha Kepada</h3>

<table>
	<tr>
		<td><h3>Nama Perusahaan</h3></td>
		<td>:</td>
		<td><h3><?= $pdf['nama_perusahaan']; ?></h3></td>
	</tr>
	<tr>
		<td><h3>Alamat Perusahaan</h3></td>
		<td>:</td>
		<td><h3><?= $pdf['alamat_perusahaan']; ?></h3></td>
	</tr>
	<tr>
		<td><h3>Nama Pemilik/penanggung jawab</h3></td>
		<td>:</td>
		<td><h3><?= $pdf['nama_pemilik']; ?></h3></td>
	</tr>
	<tr>
		<td><h3>NPWP</h3></td>
		<td>:</td>
		<td><h3><?= $pdf['npwp']; ?></h3></td>
	</tr>
</table><br>
<p align="justify">dengan ketentuan bahwa perusahaan tersebut harus memenuhi persyaratan berdasarkan peraturan daerah kabupaten lebak no 41 tahun 2001 tentang izin gangguan dan tempat usaha sebagaimana telah diubah dengan peraturan daerah kabupaten lebak no 5 tahun 2006 tentang perubahan atas peraturan daerah kabupaten lebak nomor 41 tahun 2001. surat izin tempat usaha (SITU) ini sebagai dasar untuk mengajukan surat izin lainnya kepada instansi yang berwenang mengeluarkannya. surat izin tempat usaha (SITU) ini berlaku selama 5 (lima) tahun.</p>

<p align="right">dikeluarkan di Rangkasbitung</p>
<p align="right">Tanggal 29 mei 2021</p>

<table width="700px">
	<tr>
		<td><img style="width: 120px; height: 120px;" src='data:image;base64,<?= $barcode;?>'"></td>
		<td><img style="width: 120px; height: 120px;" src='data:image;base64,<?= $foto;?>'"></td>
		<td>
			<p align="right">a.n BUPATI LEBAK <br>
			KEPALA DPMPTSP KABUPATEN LEBAK <br><br><br><br>
			ALKADRI, S.IP <br>
			NIP. 197101051992021002</p>  
		</td>
	</tr>
</table>