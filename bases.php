<style>
	h2 {font-size: 15px; color: orange;}
</style>

<?php
//---------------------------
echo '<h2>Les balises PHP </h2>';
//---------------------------
?>

<?PHP
// pour ouvrir un passage en PHP, on utilise précédente
// pour fermer un passage en PHP, on utilise suivante :
?>
<p>Bonjour</p> <!-- en dehors des balises d'ouverture et de fermeture de PHP, nous pouvons écrire du HTML -->

<?PHP
//vous n'êtes pas obligés de ferler unpassage en PHP en fin de script.
echo '<h2> Affichage dans le navigateur </h2>';
//echo est une instruction qui permet d'afficher dans le navigateur.Notez que nous pouvons y mettre du HTML.
//toutes les instructions se terminent par un ";".
print 'Nous sommes lundi <br>'; // autre instruction d'affichage.

// Deux autres instructions d'affichage existent (nous les verrons plus loin):
print_r('message');
echo '<br>';
var_dump('message');





// pour faire un commentaire PHP sur une seule ligne
/*
	pour faire un commentaire
	sur plusieurs lignes
*/

echo '<h2> Variable : déclaration, affectation et type </h2>';

// Une variable est un espace mémoire portant un nom et permettant de conserver une valeur.
// en PHP, on déclare une variable avec le signe $.
$a = 127; // on déclare la variable $a et lui affecte la valeur 127.
echo gettype($a); //gettype() est une fonction prédéfinie qui retourne le type d'une variable. Ici un integer (entier).
echo '<br>';
$a ="Une chaîne de caractères";
echo gettype($a);
echo '<br>';
$b = '127';
echo gettype($b); // un nombre écrit entre quotes ou guillemets est interprété comme un string
echo '<br>';

$a = true; //true ou bien false
echo gettype($a); // boolean
echo '<br>';

// par convention, un nom de variable commence par une minuscule, puis on mets un majuscule à chaque mot. il peut contenir des chiffre (jamais au début). iu un "_"(pas au début car signification oarticulières en objet, ni à la fin).


echo '<h2> Cincaténation </h2>';
//En PHP en concatène avec le symbole "." qui peut se traduire par "suivi de".
$x = 'Bonjour ';
$y = 'tout le monde ';

echo $x . $y . '<br>'; // affiche "Bonjour tout les monde <br>"

//Remarque sur echo:
echo $x, $y , '<br>'; // on peut séparer les paramettre afficher dans echo par une ",".
//Attention, ne larche pas avec print.

echo '<h2> Concaténation lors de l\'affectation </h2>';
$prenom1 = "Bruno";
$prenom1 = "Claire"; //l'opérateur .= permet d'ajouter la valeur "Claire" à la valeur "Bruno" contenue dans $prenom1 sans l'écraser. affiche donc "Bruno Claire"
echo $prenom1 . '<br>';

echo '<h2> Guillements et quotes </h2>';
$message = "aujourd'hui";
$message = 'aujourd\'hui'; // on échappe les apostrophes dans les quotes simples (AltGr + 8)

//---
$txt = 'Bonjour';
echo "$txt tout le monde <br>"; // dans des guillemets, la variable est évaluée : c'est son contenu qui est affiché
echo '$txt tout le monde <br>'; //dans des quoties simples, le nom de la variable est traité comme du text brut

echo '<h2> Constante </h2>';

//Une constante permet de conserver une valeur sauf que celle-ci ne pourra pas être modifiée durant l'exécution du ou des scripts. Utile par exxemple pour conserver les paramètres de connecxion à la BDD afin de ne pas pouvoir les altérer.

define('CAPITALE', 'Paris'); //déclare la constante appelée CAPITALE et lui affecte la valeur "Paris". Par convention, les constantes s'écrivent en majuscules.

echo CAPITALE. '<br>'; //affiche Paris

echo '<h2> Opérateurs arithmétiques </h2>';

$a= 10;
$b= 2;

echo $a + $b . '<br>'; //affiche 12
echo $a - $b . '<br>'; //affiche 8
echo $a * $b . '<br>'; //affiche 20
echo $a / $b . '<br>'; //affiche 5
echo $a % $b . '<br>'; //affiche 0 (modulo = reste de la division entière : 10 billes réparties sur 2 personnes, il m'en reste 0')

//---------
//Opération et affectation combinées :

$a= 10;
$b= 2;

$a += $b; // équivaut $a = $a + $b, $a vaut donc au final 12
$a += $b; // équivaut $a = $a - $b, $a vaut donc au final 10

// Il existe aussi les opérateurs *=, /=, et %=

//--------
// Incrémenter et décrémenter : 

$i = 0;
$i++; //incrémentation: on ajoute +1 à $i
$i--; //décrémentation : on retranche 1 à $i

echo '<h2> Structures conditionnelles </h2>';

// if...else {
	
$a = 10;
$b = 5;
$c = 2;

if ($a > $b) { // si $a est supérieur à $b, la condition est évaluée à true, on entre donc les accolades qui suivent
	echo '$a est supérieur à $b <br>';
}else { //sinon, dans le cas contraire, on entre dans le else:
	echo '$b est supérieur à $a <br>';
}

//------
//l'apérateur AND qui s'écrit && :
if ($a > $b && $b > $c){ //si $a est supérieur à $b ET dans le même temps $b est supérieur à $c, alors on entre dans les accolades :
	print 'Ok pour les 2 conditions <br>';
}

//------
//l'opérateur OR qui s'écrit ||
if($a == 9 || $b > $c){ // si $a est égal (==) à 9 OU $b est supérieur à $c, alors on entre dans les accolades qui suivent :
	echo'Ok pour au moins une des deux conditions <br>';
}else {
	echo 'Les deux conditions sont fausses <br>';
}

//-----
//if ... elseif ... else :
if ($a == 8){
	echo 'réponse 1 : $a est égal à $b <br>';
}elseif($a != 10){ //notez la syntaxe elseif en un seul mot
	echo 'réponse 2 : $a est différent de 10 <br>';
}else{
	echo 'réponse 3 : les 2 conditions précédentes sont fausses <br>';
}

// Remarque : on ne met pas de ";" à la fin des structures conditionnelles.

//-----
// l'opérateur OU exclusif qui s'écrit XOR :
$question1 = 'mineur';
$question2 = 'je vote'; // exemple d'une questionnaire avec plusieurs réponses possibles

if ($question1 == 'mineur' XOR $question2 == 'je vote'){ //avec le OU exclusif seulement l'une des 2 conditions doit être valide(soit l'une OU soit l'autre)
	echo 'Vos réponses sont cohérentes <br>';
}else{
	echo 'Vos réponses ne sont pas cohérentes <br>';	//si les 2 conditions sont vraies (cas de "mineur vote"), ou si les 2 conditions sont fausses (cas de "majeur ne vote pas"), nous entrons dans le else.
}

//-----
//Condition ternaire :
//Syntaxe contractée de la condition if...else :
$a = 10;
echo( $a = 10 )? '$a est égal à 10 <br>' : '$a est différent de 10 <br>' ; // dans la ternaire, "?" remplace if, et le ":" remplace else. on affiche le premier string si la conditon est varie, sinon 


//ou encore
$resultat = ( $a = 10 )? '$a est égal à 10 <br>' : '$a est différent de 10 <br>' ;
echo $resultat;



//-------
//Différence entre === et ===:
$varA=1; //integer
$varB='1'; //string


if ($varA == $varB){ //on compare uniquement en valeur avec l'opérateur =='
	echo '$varA est égal à $varB en valeur <br>';
}


if ($varA === $varB){ // on compare à la fois en valeur ET en type avec l'opérateur ==='
	echo'$varA est égal à varB en valeur et en type <br>';
} else {
	echo '$varA est différent de $varB en valeur OU en type <br>';
}
	

// Pour mémoire, le simple "=" correspond à une affectation.


//--------
//isset() et empty()
//Défintions : 
//empty() : teste si c'est vide (c'est-à-dire 0,'',NULL, false ou non défini)
//isset() : teste si c'est défini (si ca existe) ET a une valeur non NULL

$var1 = 0;
$var2 = '';
if( empty($var1) ){ // la condition est vraie car $var1 contient 0
	echo 'on a 0, vide, NULL, false ou non défini <br>';
}
if (isset($var2)){ // la condition est vraie car $var2 existe bien
	echo '$var2 est définie <br>';
}


//si on let les lignes 213 et 214 en commenaites, la première condition reste vraie, car $var1 est non définie, et la seconde devient fausse, car $var2 n'existe pas.
//Contexte d'utilisation : les formulaires pour empty, l'existence de variable ou d'array avec isset avant de les utiliser.



















