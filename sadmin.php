<?php include"koneksi.php";?>

<body class="p-3 mb-2 bg-succes text-white">
		<?php 
		if($_SESSION['level']=='super_admin'){ 
			$query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY username");
			?>
			<?php include"1.php";?>
		<?php }
		else{
			echo"Anda tidak berhak untuk melihat halaman ini, Silahkan ";
			echo "<a href='/web'>Login</a>";	
		}
	 ?>
</body>
