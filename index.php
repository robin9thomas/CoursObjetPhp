<!DOCTYPE html>
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
<form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="name">Entrez un chiffre: </label>
    <input type="text" name="nombre" id="name" required>
  </div>
</form>


<?php  

if (isset($_GET["nombre"]))
  {

$nombre = rand(1,10);
$nombres=$_GET["nombre"];
if($nombre==$nombres)
    echo '<div class="vert">'.$nombre.' Bienb joué! </div>';
else
    echo '<div class="rouge">'.$nombre.' Perdu :( </div>';}
else
echo '<div >ko</div>';


?>

</body>
</html>


