<?php
session_start();
$db = new mysqli ( "localhost" , "root" , "" , "abcs" );
echo $db->connect_errno?'Koneksi gagal : '.$db->connect_error:'';
if(isset($_POST['username']) && ($_POST['password'])){
	$username = $db->real_escape_string($_POST['username']);
	$password = $db->real_escape_string(md5($_POST['password']));
	$sql = "select * from user where username = '$username' AND password = '$password'";
	$result = $db->query($sql);
	if ($result->num_rows == 1){
		$row = $result->fetch_object();
		$_SESSION['username'] = $row->username;
		$_SESSION['level'] = $row->level;
		header("location:sadmin");
	}else{
		$_SESSION['pesan']="Username atau Password salah";
		header("location:/");
	}
}else{
	$_SESSION['pesan']="Username atau password tidak boleh kosong";
	header("location:/");
}
?>
