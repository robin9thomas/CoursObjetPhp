<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
for($i=0;$i<20;$i++){?>

    <p> <?php $Nom = GenerateNomPropre();
   echo $Nom;?></p><?php
   }
   ?>
 

  
  
   
   
   
   
   
  
   
</body>


<?php
function GenerateNomPropre()
{
    $Syllabe =array("nos","zel","dris","re","ra","rem","gui");
    array_push($Syllabe,"ta");/*"*/
    $TailleTableau=count($Syllabe);
    $Nom="";
    for($i=0;$i<rand(1,5);$i++)
    {
        $TOTO=$Syllabe[rand(0,$TailleTableau-1)];
        $Nom=$Nom.$TOTO;
    }
    return $Nom;
}
?>

</html>

