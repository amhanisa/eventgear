<?php
    include('../koneksi.php');
    session_start();
    
    if(isset($_SESSION["username"])){
        header('Location: ../');
    } else {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "select * from users where username='$username' and password='$password';";
                $result = mysqli_query($conn, $sql);
                $rowcount = mysqli_num_rows($result);
                if($rowcount!=0){
                    $_SESSION["username"] = "$username";
                    $_SESSION["permission"] = "";
                    $_SESSION["nama_user"] = "";
                    while($row = mysqli_fetch_assoc($result)){
                        $_SESSION["permission"] = $row['permission'];
                        $_SESSION["nama_user"] = $row['nama_user'];
                    }
                    header('Location: ../');
                } else {
                    header('Location: login_failed.html');
                }
            } else {
                header('Location: ../login');
            }
        } else {
            header('Location: ../login');
        }
    }
    
?>