<?php
include 'database.php';

session_start();
$username = ($_POST['username']);
$password = ($_POST['password']);
if (!empty($username) || !empty($password)){
    $seq=mysqli_query($conn,"SELECT * FROM users where username='$username'");
    $data=mysqli_fetch_assoc($seq);
    $jml=mysqli_num_rows($seq);
    if($jml>0){
        if(password_verify($password, $data['password'])){
            $_SESSION['user_autentification']="valid";
            $_SESSION['browser'] = md5($_SERVER['HTTP_USER_AGENT']);
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            $nama=mysqli_query($conn,"SELECT nama FROM users WHERE username='$username'");
            $dataNama=mysqli_fetch_assoc($nama);
            $_SESSION['user'] = $dataNama['nama'];
            header("Location: ../public/app/index.php");
        }else {
            echo"<script>alert('Password Salah!');window.location.href='../Components/login.php';</script>";
        }
    }else{
        echo"<script>alert('Username Salah!');window.location.href='../Components/login.php';</script>";
    }

}
?>