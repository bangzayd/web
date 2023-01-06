<?php session_start(); include"koneksi.php";?>
<?php

require_once (__DIR__.'/router.php');

get('/web', 'web/index.php');
get('/web/sadmin', 'web/sadmin.php');
post('/web/validasi', 'web/validasi.php');
get('/web/logout', 'web/logout.php');


get('/web/tambah-proses', 'web/tambah-proses.php');
post('/web/proses-simpan', 'web/proses-simpan.php');

get('/web/form-ubah/$id', 'web/form-ubah.php');
post('/web/proses-ubah', 'web/proses-ubah.php');

get('/web/proses-hapus', 'web/proses-hapus.php');





any('/404','web/views/404.php');



