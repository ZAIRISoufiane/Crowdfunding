<?php
session_start (); 
require('../Model/model.php');



if (isset($_POST['sbmt'])) {
    $plib = $_POST['title'];
    $ctg = $_POST['catg'];
    $porteur = $_POST['porteur'];
    $pprix = $_POST['desc'];
    $pdis = $_POST['amount'];
    $dlai = $_POST['delai'];
    $pdate = $_POST['ctrpartie'];
    $pcat = $_POST['adresse'];
    $cl = $_POST['collecte'];
    $dscp = $_POST['descp'];
    $dev=$_POST['devise'];
    $m=$_POST['email'];




        move_uploaded_file($_FILES['pic']['tmp_name'], "C:/XAM/htdocs/crowd/crowd/photo/" . $plib. ".jpeg");
        move_uploaded_file($_FILES['picd']['tmp_name'], "C:/XAM/htdocs/crowd/crowd/photo/details/" . $plib. ".jpeg");
        $req = "INSERT INTO projets (titre, id_cat, porteur, rolecollecte, desporteur, descrip, images, pictdetails, montant, delai, ctrpartie, adresse, status, devise, email, mtstatic, validateur) VALUES('$plib','$ctg','$porteur','$cl','$dscp','$pprix','$plib','$plib','$pdis','$dlai','$pdate','$pcat','en attente','$dev','$m','$pdis','en attente')";
        $d = mysqli_query($con, $req);
        if($d)
        {
            
    //the subject
    $sub = "CROWFUNDING ";
    //the message
    $msg = "Felicitations, votre projet est desormais valide est donc en ligne.
    Bonne Chance pour le financement.";
    //recipient email here
    $rec =$m;
    //send email
    mail($rec,$sub,$msg);
            header('location:../View/porteur.php');
        }
        else{
            echo "not ok".$req;
        }


    


}




















