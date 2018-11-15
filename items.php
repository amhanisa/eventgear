<?php
    include('koneksi.php');
    Class Items {
        
        private $id, $nama, $kategori, $stock, $deskripsi, $gambar;
        public $items;

        // function __construct( $id, $nama, $kategori, $stock, $deskripsi, $gambar ) {
            
        //     $this->id = $id;
        //     $this->nama = $nama;
        //     $this->kategori = $kategori;
        //     $this->stock = $stock;
        //     $this->deskripsi = $deskripsi;
        //     $this->gambar = $gambar;
        // }

        function get_Item() {
            $koneksi = new connect();
            $conn = $koneksi->get_conn();
            $sql = "select * from tools";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount==0){
                exit("Not found.");
            } else {
                while($row = mysqli_fetch_assoc($result)){
                    $item = array();
                    $id = $row['id']; $nama = $row['nama'];
                    $kategori = $row['kategori']; $stock = $row['stock'];
                    $deskripsi = $row['deskripsi']; $gambar = $row['gambar'];
                    $item = array(
                        "item"=>array(
                            "id"=>$id, 
                            "nama"=>$nama,
                            "kategori"=>$kategori,
                            "stock"=>$stock,
                            "deskripsi"=>$deskripsi,
                            "gambar"=>$gambar
                        )
                        
                    );
                    $items; $i = 0;
                    foreach($item as $a => $b) {
                        echo "Key= " . $a . ", Value= " . $b;
                        echo "<br>";
                        foreach($)
                    }
                    echo "<br>";
                    
                }
            }
        }



    }
?>