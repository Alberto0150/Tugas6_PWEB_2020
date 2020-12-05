<?php session_start();
    if(isset($_SESSION['nama_admin']))
    {
        ?>
            Selamat datang admin!
            <a href="../logout.php">Logout</a>
        <?php
    } else {
        ?> Anda tidak dapat mengakses halaman ini. silahkan kembali ke <a href="../index.php"> Homepage </a> <?php
    } 
?> 
   
