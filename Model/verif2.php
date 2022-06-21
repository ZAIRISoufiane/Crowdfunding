<?php
require('../Model/model1.php');
session_start();  // démarrage d'une session

// on vérifie que les données du formulaire sont présentes
if (isset($_POST['username']) && isset($_POST['pass'])) {
   
    
    // cette requête permet de récupérer l'utilisateur depuis la BD
    $query="SELECT COUNT(*) FROM users where username ='".$_POST['username']."' and pass='".$passwd=$_POST['pass']."'";
    $resultat = $con->prepare($query);
    $login = $_POST['username'];
    $mdp = $_POST['pass'];
    $resultat->execute(array($login, $mdp));
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        $_SESSION['username'] = $login;
        $_SESSION['pass'] = $mdp;
        // cette variable indique que l'authentification a réussi
        $authOK = true;
        //header('location:../Model/red2.php');
    }
}
?>



    <?php
    if (isset($authOK)) {
        echo "<p>Vous avez été reconnu(e) en tant que " . $login . "</p>";
        
        $q="SELECT role FROM users WHERE username ='".$login."'";
          $d = $con->prepare($q);
    $d->execute();
    while($prod = $d->fetch()){


        if($prod[0]=='Porteur'){ header('location:../View/porteur.php'); }

                        else if($prod[0]=='Financeur'){ header('location:../View/vue/index.php');}

                            else
                            {
                                header('location:../View/admin.php');
                            }   
    }
    }
    else { ?>
        <p>Vous n'avez pas été reconnu(e)</p>
        <p><a href="login.php">Nouvel essai</p>
    <?php } ?>
