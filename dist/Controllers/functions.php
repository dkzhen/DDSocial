<?php
include "database.php";

function input($data){
    global $conn;
$text=$data['textarea'];
$input =$data['input'];
$images = upload();
    if (!$images){ // ! === false
        return false; // jika gmbr tdk berhasil upload return false/mati
    }

    $query = "INSERT INTO datas VALUES('$text','$input')"; 
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['images']['name'];
    $ukuranFile = $_FILES['images']['size'];
    $error = $_FILES['images']['error'];
    $tmpName = $_FILES['images']['tmp_name'];

    // cek ada images yg diupload
    if($error === 4){
        echo"<script>alert('Upload Gagal');</script>";
        return false;
    }
     //cek jenis file
    $typeFileValid = ['jpg','jpeg','png']; // menentukan valid ekstensi yg diperbolehkan
    $typeFile = explode('.', $namaFile); // memecah string $namaFile menjadi array(mengambil .jpgnya)
    $typeFile = strtolower(end($typeFile)); // memaksa ekstensi huruf kecil + mengambil array yg paling akhir (jpg ny)
    if (!in_array($typeFile, $typeFileValid)){ // mencari string di dlm array (jika yg diupload selain diatas gagal)
        echo"<script>alert('yang anda upload bukan images!');</script>";
        return false;
    }
    // cek size 
    if ($ukuranFile > 1000000) { // max 1Mb dlm bit
        echo"<script>alert('Ukuran terlau besar');</script>";
        return false;
    }
    
    // mengganti nama images nya
    $namaFileBaru = uniqid(); // mengganti dngan string random
    $namaFileBaru .= "."; // menggabungkn dengan titik
    $namaFileBaru .= $typeFile; // ditambah ekstensi file (jpg png dLL)
    
    // lolos cek images
    move_uploaded_file($tmpName, '../Assets/images/'.$namaFileBaru);
    return $namaFileBaru;
}
?>