<?php
require('../Model/model.php');


if (isset($_POST['sbmt'])) {
    $plib = $_POST['delai'];
    $pprix = $_POST['title'];
    $pdesc = $_POST['desc'];
    $porteur = $_POST['porteur'];
   
   



      
    $req = "INSERT INTO requetes(titre, descp, datec, porteur, statut, reponse) VALUES('$pprix','$pdesc','$plib','$porteur','en attente','0')";
        $d = mysqli_query($con, $req);
        if($d)
        {
            ?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Toast Example</h3>
  <p>In this example, we use data-autohide="false" to show the toast by default. You can close it by clicking on the close (x) icon inside the toast header.</p>

  <div class="toast" data-autohide="true">
    <div class="toast-header">
      <strong class="mr-auto text-primary">Toast Header</strong>
      <small class="text-muted">5 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
      Some text inside the toast body
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>

</body>
</html><?php 
            header('location:../View/requetes.php');
        }
        else{
           
           echo "ERREUR" ;      
        
        
        }


    


}

?>