<?php
$username="system";
$password="Afniva02";
$database="Localhost/orcl";

$koneksi = oci_connect($username,$password,$database);

$kursor = ocicommit($koneksi);
?>