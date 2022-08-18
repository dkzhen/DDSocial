<?php include 'database.php';

function upload(){
    $namaFile = $_FILES['images']['name'];
    $ukuranFile = $_FILES['images']['size'];
    $error = $_FILES['images']['error'];
    $tmpName = $_FILES['images']['tmp_name'];

    // cek ada images yg diupload
    if($error === 4){
        echo"<script>alert('Post Berhasil di Upload');
        document.location.href='../public/App/index.php';</script>";
        return true;
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
    move_uploaded_file($tmpName, '../public/Assets/images/'.$namaFileBaru);
    return $namaFileBaru;
}
    session_start();
    $text=$_POST['textarea'];
    $audience=$_POST['audience'];
    $nama = $_SESSION['user'];
    $images = upload();
    if (!$images){ // ! === false
        return false; // jika gmbr tdk berhasil upload return false/mati
    }

    $query = "INSERT INTO datas VALUES('','$nama','$text','$audience','$images')"; 
    mysqli_query($conn,$query);
?>
<script>
alert('Post Berhasil di Upload');
document.location.href="../public/App/index.php";    
</script>
