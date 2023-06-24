<?php

class Personnage{


private $vie = 80;

private $atk = 20;

private $nom;


public function __construct($nom){

    $this->nom=$nom;

}

public function getvie(){

    return $this ->vie;
}

public function getatk(){

    return $this ->atk;
}

public function setNom(){
    $this->nom = $nom;
}

public function getnom(){

    return $this ->nom;
}

public function crier(){
    echo 'BOMBOCLAT';
}

public function regenerer($vie = null){
    
    if(is_null($vie)){
    
    $this->vie= 100;

    } else {

        $this->vie += $vie;

    }
}

public function evoatk(){

    $this->atk = 100;


}

public function mort(){
        return $this-> vie <= 0;
        

}

public function attaque($cible){

    $cible->vie -= $this->atk;

}


}

 

?>