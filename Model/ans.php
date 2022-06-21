<?php

require('../Model/model.php');


    $n = $_GET['id'];
    $user = $_GET['u'];
    $sms = $_GET['d'];
    
   



        //$ins="INSERT INTO messages(sms,porteur) VALUES ('$sms','$user')";
        //$r=mysqli_query($con, $ins);
        $req = "UPDATE requetes SET statut='repondu', reponse='".$sms."' WHERE id='" . $n . "'";
$query = mysqli_query($con, $req);

        
        if($query)
        {   
            header('location:../View/req1.php');
        }
        else{
            echo "not ok";
        }


    
?>