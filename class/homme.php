<?php

// Ici comme nous allons créer une nouvelle class mais que nous ne souhaitons pas retaper tous les attributs, constantes et méthodes de la classe Human, nous allonrs donc l'inclure afin que notre classe Femme puisse hériter de Human
require_once('human.php');

//Nous créons donc notre nouvelle class Femme et en ajoutant le terme extends suivi de Human, nous allons donc dire que notre classe Femme hérite de HUman
//Par convention nous definirons les attributs 
class Homme extends Human{

    protected $sexe = "Homme";
   

    public function __construct($prenom)
    {
        //$this->prenom=$prenom;
        //ICI nous voyons que nous faisons un constructeur similaire à celui déjà fait dans la classe parente Human
        //Par conséquent nous pourrions écire quelque chose du genre
         parent::__construct($prenom);
        //Ici nous disons que nous appelons le constructeur de notre class parent qui fait exactement la même chose que nous souhaitons faire.
        echo "bonjour ".$this->prenom." vous êtes une ".$this->sexe;
    }
}