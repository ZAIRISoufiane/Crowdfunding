<?php
require('../Model/model.php');


    $n = $_GET['num'];
    $m = $_GET['email'];
    $v = $_POST['admin'];
   




        $req = "UPDATE projets SET status='refus', validateur='".$v."' WHERE id='" . $n . "'";
$query = mysqli_query($con, $req);
        
        if($query)
        {   
            header('location:../View/admin.php');
        }
        else{
            echo "not ok";
        }


    


