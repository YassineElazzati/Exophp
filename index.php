<?php

require 'personnage.php';

$merlin = new personnage('Merlin');


// var_dump($merlin->vie);

//  var_dump($merlin->vie = 100)

// $merlin->regenerer(5);
// $merlin->nom = 'merlin';
// var_dump($merlin);

$harry = new personnage('Harry');

// $harry->nom = 'harry';

// $harry->vie = 0 ;

// var_dump($harry->mort());

// $harry->regenerer();
// $harry->evoatk();

// var_dump($harry)


// $merlin->evoatk();
// $merlin->attaque($harry);

// if($harry->mort()){
//     echo 'Harry RIP';
// }else{
//     echo 'Hahaha il me reste '. $harry->vie .' de vie' ;
// }



// var_dump($harry->getnom());
// var_dump($harry->getvie());
// var_dump($harry->getatk());
// var_dump($merlin->getnom());
// var_dump($merlin->getvie());
// var_dump($merlin->getatk());


?>