<?php 

 class Personnage{


    private $nom;
    private $prenom;

      public function setNom($newNom){
       $this->nom=$newNom;
    }

    public function setPrenom($newPrenom){
        $this->prenom=$newPrenom;
     }
    public function Presentetoi(){
        echo"Je suis".$this->prenom." ".$this->nom;
    }


 }