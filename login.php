<?php session_start();
include "koneksi.php";
$nama_admin=$_POST['nama_admin'];
$password=md5($_POST['password']);

$laporan1 ="";
$laporan2 ="";
$rekaplaporan ="";
if(empty($_POST['nama_admin']))
{
    $laporan1 = "Username ";
}
if (empty($_POST['password']))
{
    $laporan2 = "Password ";
}

$query=mysqli_query($db,"SELECT * 
    FROM data_admin 
    WHERE nama_admin = '$nama_admin'
    AND PASSWORD = '$password'");

$cek=mysqli_num_rows($query);

if($cek){
    $_SESSION['nama_admin']=$nama_admin;
    ?>Anda berhasil login. silahkan menuju menu utama<a href="admin_file/loginadmin.php"> Homepage admin </a><?php
}
else{
    if($laporan1 != "" && $laporan2 != "")
    {
        $rekaplaporan = "{$laporan1} dan {$laporan2} ";
    }
    else if ($laporan1 != "" && $laporan2 == "")
    {
        $rekaplaporan = $laporan1;
    }
    else if ($laporan1 == "" && $laporan2 != "")
    {
        $rekaplaporan = $laporan2;
    }
    $rekaplaporan = $rekaplaporan." belum anda isikan";
    echo "<script type='text/javascript'>alert('$rekaplaporan');</script>";
    ?>Anda gagal login. silahkan kembali <a href="index.php"> Homepage</a><?php
    // echo mysqli_error();
}
?>