<?php session_start(); include"koneksi.php";?>
<?php

require_once (__DIR__.'/router.php');

get('/', 'index.php');
get('/sadmin', 'sadmin.php');
post('/validasi', 'validasi.php');
get('/logout', 'logout.php');


get('/tambah-proses', 'tambah-proses.php');
post('/proses-simpan', 'proses-simpan.php');

get('/form-ubah/$id', 'form-ubah.php');
post('/proses-ubah', 'proses-ubah.php');

get('/proses-hapus', 'proses-hapus.php');





any('/404','views/404.php');



