

<?php
// memanggil file siswa.php
require_once 'model.php';

if (isset($_GET['id'])) {
    // membuat objek siswa
    $siswa = new siswa();

	$x0 = $_GET['id'];

	// delete data siswa
    $siswa->delete($x0);
}					
?>