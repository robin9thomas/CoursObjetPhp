<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>test Fonction</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<?php
    include("menu.php");
    Menu();
?>

<?php class Personnage{
        private $_nom;

        public function __construct($NewNom){
            $this->_nom = $NewNom;
        }
    public function PresenteToi(){
        echo 'Je suis ' .$this->_nom;
    }
    }
?>
