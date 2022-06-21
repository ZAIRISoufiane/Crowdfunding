<?php
require('../Model/model.php');


    $n = $_GET['id'];
  
   




        $req = "UPDATE projets SET status='close' WHERE id='" . $n . "'";
$query = mysqli_query($con, $req);
        
        if($query)
        {   
            header('location:../View/admin.php');
        }
        else{
            echo "not ok";
        }


    

