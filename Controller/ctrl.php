<?php

$action="connexion";
if(isset($_GET['action']))
    $action=$_GET['action'];

switch ($action){
    case 'connexion': require '../View/login.php';
             
                break;
   case 'ins': require '../View/inscription.php';
             
                break;
    case 'add': require '../Model/ins_prjt.php';
               
                break;
                case 'addreq': require '../Model/creereq.php';
               
            break;            

    case 'login': require '../Model/verif2.php';
               
                break;
                
     case 'inscription': require '../Model/new_porteur.php';
               
                break;  

                case 'approuve': require '../Model/yes.php';
               
                break;         
}







?>