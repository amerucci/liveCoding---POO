<?php
//Avant toute chose comme nous n'avons pas fait d'autoloader, nous allons dire à notre fichier que nous allons avoir besoin du fichier human.php qui lui contiendra la class Human. Par conséquent nous pourrons dès lors instancier notre class.
require_once('class/human.php');
require_once('class/femme.php');
require_once('class/homme.php');

//A partir du moment ou nous avont décidé d'instancié la classe Human le constructeur se met en place
//L'instanciation d'une classe est la phase de création des objets issus de cette classe. Lorsque l'on instancie une classe, on utilise le mot-clé new suivant du nom de la classe. Cette instruction appelle la méthode constructeur ( __construct() ) qui construit l'objet et le place en mémoire
//Dans notre exemple l'attribut prénom prend donc la valeur Alain
$alain = new Human("Alain");

//Par conséquent maintenant si nous lançons la requete suivante :
echo "<p>".$alain->prenom."</p>";
//Il nous renvoit la valeur de l'attribut prenom. Celui-ci a été mis à jour grâce à notre constructeur qui à l'instanciation de la class à dit que $this->prenom était égale à ce qui avait été passé entre guillemets

// Ici on essaye d'appeler un attribut privé
// $alain->nom = 'Merucci';
// echo $alain->nom;
// Nous allons donc avoir un message d'erreur en nous disant Désolé mais vous essayer d'accéder à une propriété privé.

//Maintenant nous allons faire en sorte de pouvoir appeler cet attribut privé
//Première étape si nous souhaitons définir une valeur à cet attribut nous utilisons la méthode setName()
//Nous y passons la valeur que nous souhaitons que l'attribut name contienne.
$alain->setName("Merucci");
//Maintenant nous utilisons la méthode getName() qui elle permettre de récupérer la valeur de l'attribut name
echo "<p>".$alain->getName()."</p>";

//Accès aux constantes
//L'accès aux constantes ne peut se faire qu'en lecture via l'opérateur :: 
//Remarque : si l'on tente de redéfinir la valeur d'une constante, PHP génèrera une erreur
echo '<p>Chaque humain a '. Human::NOMBRE_DE_YEUX .' yeux</p>';

//L'héritage
//Ici nous avons créé une nouvelle classe Femme que nous allons instancier.justify-content-center
$camille= new Femme("Camille");
