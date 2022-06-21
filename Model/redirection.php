<?php
session_start ();
require('../Model/model.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Gstock</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<td width="40%" align="center" valign="bottom">
                    <?php
                    		$user="select * from users where username='".$_SESSION['login']."' and pass='".$_SESSION['pass']."' ";
                    		$req = mysqli_query($con,$user);
                    		$useracc=mysqli_fetch_row($req);
                    		//$profil= $useracc[5]; 
							//echo $profil;
							

							$req="SELECT role FROM users where username='".$_SESSION['login']."' and pass='".$_SESSION['pass']."'";
    $prep=mysqli_query($con,$req);
    $data1=mysqli_fetch_row($prep);
    $profil=$data1[0];
    $_SESSION['profil']=$profil;

					?>
					  
				</td>


                <?php  

                if($profil=='Porteur'){ header('location:../View/porteur.php'); }

						else if($profil=='Financeur'){ header('location:../View/vue/index.php');}

                            else
                            {
                                header('location:../View/admin.php');
                            }                         
						?>


</body>

</html>
