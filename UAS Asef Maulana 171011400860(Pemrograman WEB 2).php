<html>
<head>
	<title>UAS Asef Maulana 171011400860 (Pemrogramana WEB 2</title>
	<style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			width: 120px:;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 150px;
			cursor: pointer;
		}
		label {
			width: 150px;
			display: block;
			float: left;
		}
		.checkbox, .radio {
			float:none;
			width: auto;
		}
		.row::after {
			content: "";
			display: block;
			clear:both;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
		.options {
			float:left;
		}
	</style>
</head>
<body>
	<h1 align="center">FORM COVID19</h1>
	<div class="row">
			<label>Nama Wilayah</label>
			<select name="area">
				<?php $options = array('DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa tengah');
				foreach ($options as $area) {
					$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
					echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
				}?>
			</select>
	<form action="" method="post">
		<div class="row">
			<label>Jumlah Positif</label>
			<input type="text" name="Positif" value="<?=isset($_POST['Positif']) ? $_POST['Positif'] : ''?>"/>
		</div>
		<div class="row">
			<label>Jumlah Dirawat</label>
			<input type="text" name="Dirawat" value="<?=isset($_POST['Dirawat']) ? $_POST['Dirawat'] : ''?>"/>
		</div>
		<div class="row">
			<label>Jumlah Sembuh</label>
			<input type="text" name="Sembuh" value="<?=isset($_POST['Sembuh']) ? $_POST['Sembuh'] : ''?>"/>
		</div>
		<div class="row">
			<label>Jumlah Meninggal</label>
			<input type="Jumlah Meninggal" name="Meninggal" value="<?=isset($_POST['Meninggal']) ? $_POST['Meninggal'] : ''?>"/>
		</div>
		<div class="row">
			<label>Nama Operator</label>
			<input type="text" name="Operator" value="<?=isset($_POST['Operator']) ? $_POST['Operator'] : ''?>"/>
		</div>
		<div class="row">
			<label>NIM Mahasiswa</label>
			<input type="text" name="NIM" value="<?=isset($_POST['NIM']) ? $_POST['NIM'] : ''?>"/>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="Simpan"/>
		</div>
	</form>
	
	<?php

		echo '<h1 align="center">Data Pemantauan Daerah Covid-19 Wilayah DKI Jakarta <br>'.'</h1></td>';
		echo '<h1 align="center">Per 18 April 2021 ' . $tgl=date("G:i:s"). '<br></h1></td>';
		echo '<table width = 1350 border = 1 >';
		echo '<h1 align="center">'. $_POST['Operator'] . $_POST['NIM']. '<br></h1></td>';
		echo '<table width = 1350 border = 2 >';
		echo '<td>Positif<br>' . $_POST['Positif'] . '</td>';
		echo '<td>Dirawat<br> ' . $_POST['Dirawat'] . '</td>';
		echo '<td>Sembuh<br> ' . $_POST['Sembuh'] . '</td>';
		echo '<td>Meninggal<br> ' . $_POST['Meninggal'] . '</td>';

//Catatan harus Diisi Agar Terlihat Seperti Hasil Screenshotnya Terimkasih		
?>
		
</body>
</html>