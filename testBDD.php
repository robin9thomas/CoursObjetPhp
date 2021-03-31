<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pittsburgh Penguins</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='New.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 
include("menu.php");
    Menu();
    
   

$maBase=new PDO('mysql:host=192.168.65.154; dbname=Clinique; charset=utf8','Rthomas', 'reebok');


?>


<form action="" method="get">
    <label for="Prenom">Prénom</label>
    <input type="text" name="Prenom";>
    <label for="Nom">Nom</label>
    <input type="text" name="Nom";>
    <input type="submit"  name="Ajouter">
<?php
    if(isset($_GET["Ajouter"]))
    { 
      
      if(!empty($_GET["Prenom"]) && !empty($_GET["Nom"]))
        {
         
          $Nom = $_GET["Nom"];
          $Prenom = $_GET["Prenom"];

          $req ="INSERT INTO `Medecin` (`Prenom`, `Nom`) VALUES ('".$Prenom."','".$Nom."')";
          echo $req ;
          $LesDonneesBrutesDeLaBdd = $maBase->query($req);
        }
    }
    
?>

<table border="1">

      <tr>
        <th>Matricule</th>
        <th>Prénom</th>
        <th>Nom</th>
      </tr>
    
      
    <?php
$req ="Select * FROM Medecin";

$LesDonneesBrutesDeLaBdd = $maBase->query($req);
while ($TableauDeDonnee= $LesDonneesBrutesDeLaBdd ->fetch())
      {
        ?>

    
          
            <tr>
              <th><?php echo $TableauDeDonnee["id_Medecin"]; ?> </th>
              <th><?php echo $TableauDeDonnee["Prenom"]; ?></th>
              <th><?php echo $TableauDeDonnee["Nom"]; ?></th>
            </tr>
      

<?php    }
 $LesDonneesBrutesDeLaBdd->closeCursor(); ?>

</body>
</html>