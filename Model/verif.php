
<?php

require('../Model/model.php');
session_start ();

if (isset($_POST['sbmt'])) {



$login=$_POST['username'];
$passwd=$_POST['pass'];



$query="SELECT COUNT(*) FROM users where username ='".$login."' and pass='".$passwd."'";
$result=mysqli_query($con,$query);

$data=mysqli_fetch_row($result);

if($data[0] == 1) {


    session_start();
    $_SESSION['login'] =$login;
    $_SESSION['pass']=$passwd;
    $_SESSION['lastacces']=time();

    $req="SELECT role FROM users where username='".$login."'";
    $prep=mysqli_query($con,$req);
    $data1=mysqli_fetch_row($prep);
    $profil=$data1[0];
    $_SESSION['profil']=$profil;

    

    header('location:../Model/redirection.php');
}



else{
    
    header('location:../View/inscription.php');
}









































}









































?>