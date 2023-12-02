<?php 
 
//membangun koneksi
$username="mbd";
$password="123";
$database="Localhost/orcl";

$conn=oci_connect($username,$password,$database);

if(!$conn){
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
} else {
	echo "koneksi berhasil";
}


?>