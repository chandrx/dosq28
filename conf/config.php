<?php

// cek koneksi

$koneksi=mysqli_connect("localhost", "root", "", "dosq");

// jika tidak konek kita cek

if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}

// buat ngehubungin ke web
$main_url = "http//localhost/dosq28";

?>