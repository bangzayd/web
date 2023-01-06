
 
<?php
// memanggil file siswa.php
require_once 'model.php';
    
if (isset($_POST['simpan'])) {
	if (isset($_POST['a0'])) {

		// membuat objek siswa
    	$siswa = new siswa();

    	// ambil data hasil submit dari form
		$x0 = $_POST['a0'];
		$x1 = trim($_POST['a1']);
		$x2 = trim($_POST['a2']);
		$x3 = $_POST['a3'];
		$x4 = implode(", ", $_POST['a4']);
		$x5 = $_POST['a5'];
		$x6 = trim($_POST['a6']);
		$x7 = $_POST['a7'];
		$x8 = $_POST['a8'];
		$x9 = $_POST['a9'];

		// update data siswa
    	$siswa->update($x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x0);		
	}
}					
?>