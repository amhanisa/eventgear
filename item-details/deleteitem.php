<?php
    include("../koneksi.php");
    // if(isset($_POST['submit'])){
        if(isset($_GET['id']) && isset($_GET['img'])){
            $id = $_GET['id'];
            $img = $_GET['img'];
            $sql = "delete from tools where id='$id';";
            try{
                mysqli_query($conn, $sql);
                unlink('../images/'.$img);
                header('Location: ../');
            } catch (Exception $e){
                echo 'FAILED';
            }
        } else {
            echo 'POST GAMASUK';
        }
    // }
    
?>