<?php
    include("../koneksi.php");
    // if(isset($_POST['submit'])){
        
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
            $gambar = $_FILES["fileToUpload"]["name"];
            $fileId = substr($id, 3, 3);
            $target_dir = "../images/";
            $imgName = 'img-'.$kat.'-'.$fileId.'.'.substr($gambar, -3, 3);
            $target_file = $target_dir .$imgName;
            
            $sql = "insert into tools (id, nama, kategori, stock, deskripsi, gambar) values ('$id' ,'$nama', '$kat', '$stock', '$desc', '$imgName');";
            
            try{
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo 'BERHASIL';
                    
                    // $target_dir = "../images/";
                    // $target_file = $target_dir .'img-'.$kat.'-'.$fileG.'-'.$gambar;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    // Check if file already exists
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    header('Location: success.php');
                } else {
                    echo 'Failed. Item already exist.';
                }
                
            } catch (Exception $e){
                echo 'FAILED';
            }
    // }
    
?>