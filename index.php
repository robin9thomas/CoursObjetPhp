<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mon CV in English</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>


<?php
    include("menu.php");
    Menu();
?>

<form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="name">Entrez un chiffre: </label>
    <input type="text" name="nombre" id="name" required>
  </div>
</form>

<div id="jeu">

<?php  

if(isset($_GET["nombre"]))
{
    echo "Nombre d'essaies : ".$_SESSION["essais"];
    $nombresForm=$_GET["nombre"];

    


    if (isset($_SESSION["nombre"]))
    {
        

        $nombreAleatoire = $_SESSION["aleatoire"];
    
        if($nombreAleatoire==$nombresForm)
        {
            echo '<div class="vert">'.$nombresForm.' Bien joué! </div>';
            $_SESSION["aleatoire"]= rand(1,100000);
            $_SESSION["essais"]++;
            //si essay < record new record
            $_SESSION["essais"]=1;
        }
    
        if($nombreAleatoire>$nombresForm){
            echo '<div class="rouge">'.' Plus!</div>';
            $_SESSION["essais"]++;
            // ++ sur les essaie
        }
        
        if($nombreAleatoire<$nombresForm){
            echo '<div class="rouge">'.' Moin!</div>';
            $_SESSION["essais"]++;
            // ++ sur les essaie
        }
        
    }

    else
    {
    $nombresessais=$_SESSION["essais"];
    

    $_SESSION["record"]=100000;
    echo"La session n'existe pas je la crée avec le nom = RThomas ";
    echo "Démarrage du mécanisme session <br>";
    $_SESSION["nombre"]="RThomas";
    $_SESSION["aleatoire"]= rand(1,100000);
    //$nombreAleatoire=$_GET["nombre"];

    }

}



?>
</div>
</body>
</html>


