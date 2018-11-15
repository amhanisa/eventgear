<?php
    include("../koneksi.php");
    // if(isset($_POST['submit'])){
        if(isset($_POST['nama']) && isset($_POST['stock']) && isset($_POST['kategori'])){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $stock = $_POST['stock'];
            $kat = $_POST['kategori'];
            $desc = $_POST['desc'];
            if($kat=="Proyektor"){$kat = "proyektor";}
            if($kat=="Screen"){$kat = "screen";}
            if($kat=="Sound System"){$kat = "soundsystem";}
            if($kat=="LED Video Display"){$kat = "led";}
            if($kat=="TV"){$kat = "tv";}
            if($kat=="Lighting"){$kat = "lampu";}
            if($kat=="Tenda"){$kat = "tenda";}
            $sql = "update tools set id='$id', nama='$nama', kategori='$kat', stock='$stock', deskripsi='$desc' where id='$id';";
            try{
                mysqli_query($conn, $sql);
                echo 'BERHASIL';
            } catch (Exception $e){
                echo 'FAILED';
            }
        } else {
            echo 'POST GAMASUK';
        }
    // }
    
?>