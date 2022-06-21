<?php
require('../Model/model.php');

if (isset($_POST['sbmt'])) {

    
    $n = $_POST['num'];
    $m = $_POST['email'];
    $v = $_POST['admin'];
    //the subject
    $sub = "CROWFUNDING ";
    //the message
    $msg = "Felicitations, votre projet est desormais valide est donc en ligne.
    Bonne Chance pour le financement.";
    //recipient email here
    $rec =$m;
    //send email
    mail($rec,$sub,$msg);
   




        $req = "UPDATE projets SET status='apporuver', validateur='".$v."' WHERE id='" . $n . "'";
$query = mysqli_query($con, $req);
        
        if($query)
        {   
            header('location:../View/admin.php');
        }
        else{
            echo "not ok";
        }


    


}