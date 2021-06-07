<?php
// Commande pour lancer le serveur interne de php -S localhost:8000 en ligne de commande
echo "hello world !" ;
echo "<br>" ;
echo "test" ;

$var1 = 2; // integer
$var2 = "Hello"; //String
$var3 = True;  // Boolean
echo $var1 ;
echo $var2 ;
echo $var3 ;
// Var_dump permet de verifier le typage des variables
// die()
// 

$nom = "albert";
$prenom = "sheik";

// Afficher : Je suis Sheik
echo "Je suis ". $prenom ."<br>";
echo "Je suis $prenom";
// Afficher : Je suis Sheik Albert (2 méthodes)
echo "Je suis ". $prenom . " " . $nom . "<br>";
echo "Je suis $prenom $nom";
echo 'il a dit "Hello !"';
echo "Il a dit \"Hello !\"";

$nom .= $prenom;
echo $nom."<br>";


// Les boucles 
// condition
$condition = true ; 
if (false) {
    echo "C'est vrai !" . "<br>"; 
}
// Pour questionner une valeur en debug on met entre parentheses la variable pour la questionner et on fait un die derriere
var_dump($condition); die;

// Types : int string boobleen
// operateurs mathématiques : + - * = ! 
// opertateurs de concatenatenation 
// Boucles et conditions : if, if else, if elseif elseif
// Boucle while 


// la boucle for 



?>

<a href="/cours.php"></a>
