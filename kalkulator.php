<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<p>Masukkan Angka ke 1</p>
		<input type="input" name="angka1">
		<p>Masukkan Angka ke 2</p>
		<input type="input" name="angka2">
		<select name="option">
			<option value="penjumlahan">+</option>
			<option value="pengurangan">-</option>
			<option value="perkalian">*</option>
			<option value="pembagian">/</option>
		</select>
		<button type="submit" name="submit">Hasil</button>
	</form>
	<?php 
		if(isset($_POST['submit'])){
			$bil1 = $_POST['angka1'];
			$bil2 = $_POST['angka2'];
			$opsi = $_POST['option'];
				if($opsi==="penjumlahan"){
					$bil3 = $bil1+$bil2;
				}elseif($opsi==="pengurangan"){
					$bil3 = $bil1-$bil2;
				}elseif($opsi==="perkalian"){
					$bil3 = $bil1*$bil2;
				}elseif($opsi==="pembagian"){
					$bil3 = $bil1/$bil2;
				}
		}
	 ?>
	 <?php if(isset($_POST['submit'])) {?>
	 	<p>Hasil dari <?php echo $opsi ?> = <?php echo $bil3 ?></p>
	 <?php } ?>
</body>
</html>