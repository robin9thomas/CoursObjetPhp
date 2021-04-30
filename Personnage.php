<?php 

 class Personnage{

    
    private $nom;
    private $prenom;

    public function __construct($nom,$prenom){
            $this->nom=$nom;
            $this->prenom=$prenom;
    }    
    public function setNom($newNom){
       $this->nom=$newNom;
    }

    public function setPrenom($newPrenom){
        $this->prenom=$newPrenom;
    }
    public function presenteToi(){
        return "Je suis".$this->prenom." ".$this->nom;
    }


 }
 ?>