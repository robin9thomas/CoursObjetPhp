<!DOCTYPE html>
<?php  
session_start();
?>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<div id="menu"><h1> Robin THOMAS</h1> </div>
    <nav id="nav">
        
        <!--Menus-->
    <div>  
        <ul id="menu-deroulant">
            <li><a href="index.html">MENU</a></li>
            <li><a href="cv.html">Mon Cv</a></li>
            <li><a href="CVEnglish.html">Mon CV in English</a>
                    
            </li>
            <li><a href="">Hockey sur Glace</a>
            <ul>
            <li><a href="MonP.html">Mon parcour</a></li>
            <li><a href="MonE.html">Mon equipe favorite</a></li>
            <li><a href="https://www.eliteprospects.com/player/457755/robin-thomas">EliteProspect</a></li>
        </ul>            
        </li>
        <li><a href="">Contacts</a>
                <ul>
                <li><a href="https://www.linkedin.com/in/robin-thomas-9679571b2">linkedin</a></li>
                <li><a href="#">06 12 98 58 50</a></li>
                <li><a href="#">robin.19thomas@gmail.com</a></li>
            </ul>            
            </li>
        
       <li><a href="index.php">Jeu + -</a></li>
    </ul> 
    </div>     
    </nav>
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
            //si essay < record new recird
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


