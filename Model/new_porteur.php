<?php
require('../Model/model.php');


if (isset($_POST['sbmt'])) {
    $plib = $_POST['noms'];
    $pprix = $_POST['username'];
    $pdesc = $_POST['pass'];
    $pdis = $_POST['mail'];
    $pdate = $_POST['role'];
   



      
    $req = "INSERT INTO users (noms, username, pass, email, role) VALUES('$plib','$pprix','$pdesc','$pdis','$pdate')";
        $d = mysqli_query($con, $req);
        if($d)
        {
            header('location:../View/login.php');
        }
        else{
            header('location:../View/inscription.php');        }


    


}




















