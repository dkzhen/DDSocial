<?php
include 'database.php';
$nama = stripslashes($_POST['nama']);
$email= $_POST['email'];
$username = strtolower(stripslashes($_POST['username']));
$password = mysqli_real_escape_string($conn,$_POST['password']);
if (!empty($username) || !empty($email) || !empty($password)){
    $cekUsername=mysqli_query($conn,"SELECT * FROM users where username='$username'");
    $cekEmail=mysqli_query($conn,"SELECT * FROM users where email='$email'");
    $jmlUsername=mysqli_num_rows($cekUsername);
    $jmlEmail=mysqli_num_rows($cekEmail);
    if($jmlUsername>0){
        echo"<script>alert('Username Sudah Digunakan');window.location.href='../Components/register.php';</script>";
        die();
    }else if($jmlEmail>0){
        echo"<script>alert('Email Sudah Digunakan');window.location.href='../Components/register.php';</script>";
        die();
    }else{
        // function randomString(){
        //     $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        //     $charLength=strlen($char);
        //     $passwordGenerator='';
        //     $length = 200;
        //     for($i=0; $i<$length; $i++ ){
        //         $passwordGenerator .=$char [rand(0, $charLength-1)];
        //     }
        //     return $passwordGenerator;
        // }

        
        $password_encrypt = password_hash($password, PASSWORD_DEFAULT);
        // var_dump($password_encrypt);
        $input = mysqli_query($conn,"insert into users (nama,email,username,password) values('$nama','$email','$username','$password_encrypt')");
        if($input){
            echo"<script>alert('Pendaftaran Akun Berhasil ');window.location.href='../Components/login.php';</script>";
        }else{
             echo"<script>alert('Pendaftaran Akun Gagal!');window.location.href='../Components/register.php';</script>";
        }
    }
}
?>