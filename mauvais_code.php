<?php

// ❌ Namespace et "use" ne doivent jamais être sur la même ligne.
namespace RoyaumeChampi; use DateTime;

class MarioAdventure {

    // ❌ Mauvaise syntaxe d'array + espaces incohérents.
    public $pieces = array(1 ,2 ,3   );

    // ❌ Espacement incorrect autour du "="
    private  $vie=3;

    function __construct( ){
        // ❌ "Pieces" avec une majuscule : propriété incorrecte.
        $this->Pieces[] =4;

        // ❌ Propriété "nom" inexistante dans la classe.
        $this->nom = 'Mario';
    }

    public function sauter( $hauteur , $force  ){

        // ❌ Pas d'espace après echo.
        // ❌ L'opération $hauteur * $force est ambiguë sans parenthèses.
        echo"Mario saute de ".$hauteur*$force." metres !"; }

    public function prendreChampi ( $type){

        // ❌ Espaces et accolades mal placées.
        // ❌ Comparaison avec == au lieu de ===.
        if($type=="rouge"){return"Mario gagne 1 vie";} else{return"Mario devient plus grand";} }

    public function entrerDansTuyau( $destination){

        // ❌ Même problème : accolades et espaces mal foutus.
        if($destination=="castle"){
            return"Bienvenue dans le chateau de Bowser !"; }else{ return "Mario arrive dans ".$destination; }
    }

}

// ❌ Instanciation sans parenthèses (mauvaise pratique).
$m = new MarioAdventure;

// ❌ Appels tout sur une seule ligne → illisible.
$m->sauter(2 ,5);

// ❌ Paramètre mal espacé + mauvaise indentation.
$r = $m->prendreChampi("rouge");

// ❌ Echo collé au texte.
echo"Résultat : ".$r;

?>
