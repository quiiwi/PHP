<style>
	h2 {font-size: 15px; color: orange;}
</style>

<?php
//---------------------------
echo '<h2>Les balises PHP </h2>';
//---------------------------
?>

<?PHP
// pour ouvrir un passage en PHP, on utilise pr�c�dente
// pour fermer un passage en PHP, on utilise suivante :
?>
<p>Bonjour</p> <!-- en dehors des balises d'ouverture et de fermeture de PHP, nous pouvons �crire du HTML -->

<?PHP
//vous n'�tes pas oblig�s de ferler unpassage en PHP en fin de script.
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

echo '<h2> Variable : d�claration, affectation et type </h2>';

// Une variable est un espace m�moire portant un nom et permettant de conserver une valeur.
// en PHP, on d�clare une variable avec le signe $.
$a = 127; // on d�clare la variable $a et lui affecte la valeur 127.
echo gettype($a); //gettype() est une fonction pr�d�finie qui retourne le type d'une variable. Ici un integer (entier).
echo '<br>';
$a ="Une cha�ne de caract�res";
echo gettype($a);
echo '<br>';
$b = '127';
echo gettype($b); // un nombre �crit entre quotes ou guillemets est interpr�t� comme un string
echo '<br>';

$a = true; //true ou bien false
echo gettype($a); // boolean
echo '<br>';

// par convention, un nom de variable commence par une minuscule, puis on mets un majuscule � chaque mot. il peut contenir des chiffre (jamais au d�but). iu un "_"(pas au d�but car signification oarticuli�res en objet, ni � la fin).


echo '<h2> Cincat�nation </h2>';
//En PHP en concat�ne avec le symbole "." qui peut se traduire par "suivi de".
$x = 'Bonjour ';
$y = 'tout le monde ';

echo $x . $y . '<br>'; // affiche "Bonjour tout les monde <br>"

//Remarque sur echo:
echo $x, $y , '<br>'; // on peut s�parer les paramettre afficher dans echo par une ",".
//Attention, ne larche pas avec print.

echo '<h2> Concat�nation lors de l\'affectation </h2>';
$prenom1 = "Bruno";
$prenom1 = "Claire"; //l'op�rateur .= permet d'ajouter la valeur "Claire" � la valeur "Bruno" contenue dans $prenom1 sans l'�craser. affiche donc "Bruno Claire"
echo $prenom1 . '<br>';

echo '<h2> Guillements et quotes </h2>';
$message = "aujourd'hui";
$message = 'aujourd\'hui'; // on �chappe les apostrophes dans les quotes simples (AltGr + 8)

//---
$txt = 'Bonjour';
echo "$txt tout le monde <br>"; // dans des guillemets, la variable est �valu�e : c'est son contenu qui est affich�
echo '$txt tout le monde <br>'; //dans des quoties simples, le nom de la variable est trait� comme du text brut

echo '<h2> Constante </h2>';

//Une constante permet de conserver une valeur sauf que celle-ci ne pourra pas �tre modifi�e durant l'ex�cution du ou des scripts. Utile par exxemple pour conserver les param�tres de connecxion � la BDD afin de ne pas pouvoir les alt�rer.

define('CAPITALE', 'Paris'); //d�clare la constante appel�e CAPITALE et lui affecte la valeur "Paris". Par convention, les constantes s'�crivent en majuscules.

echo CAPITALE. '<br>'; //affiche Paris

echo '<h2> Op�rateurs arithm�tiques </h2>';

$a= 10;
$b= 2;

echo $a + $b . '<br>'; //affiche 12
echo $a - $b . '<br>'; //affiche 8
echo $a * $b . '<br>'; //affiche 20
echo $a / $b . '<br>'; //affiche 5
echo $a % $b . '<br>'; //affiche 0 (modulo = reste de la division enti�re : 10 billes r�parties sur 2 personnes, il m'en reste 0')

//---------
//Op�ration et affectation combin�es :

$a= 10;
$b= 2;

$a += $b; // �quivaut $a = $a + $b, $a vaut donc au final 12
$a += $b; // �quivaut $a = $a - $b, $a vaut donc au final 10

// Il existe aussi les op�rateurs *=, /=, et %=

//--------
// Incr�menter et d�cr�menter : 

$i = 0;
$i++; //incr�mentation: on ajoute +1 � $i
$i--; //d�cr�mentation : on retranche 1 � $i

echo '<h2> Structures conditionnelles </h2>';

// if...else {
	
$a = 10;
$b = 5;
$c = 2;

if ($a > $b) { // si $a est sup�rieur � $b, la condition est �valu�e � true, on entre donc les accolades qui suivent
	echo '$a est sup�rieur � $b <br>';
}else { //sinon, dans le cas contraire, on entre dans le else:
	echo '$b est sup�rieur � $a <br>';
}

//------
//l'ap�rateur AND qui s'�crit && :
if ($a > $b && $b > $c){ //si $a est sup�rieur � $b ET dans le m�me temps $b est sup�rieur � $c, alors on entre dans les accolades :
	print 'Ok pour les 2 conditions <br>';
}

//------
//l'op�rateur OR qui s'�crit ||
if($a == 9 || $b > $c){ // si $a est �gal (==) � 9 OU $b est sup�rieur � $c, alors on entre dans les accolades qui suivent :
	echo'Ok pour au moins une des deux conditions <br>';
}else {
	echo 'Les deux conditions sont fausses <br>';
}

//-----
//if ... elseif ... else :
if ($a == 8){
	echo 'r�ponse 1 : $a est �gal � $b <br>';
}elseif($a != 10){ //notez la syntaxe elseif en un seul mot
	echo 'r�ponse 2 : $a est diff�rent de 10 <br>';
}else{
	echo 'r�ponse 3 : les 2 conditions pr�c�dentes sont fausses <br>';
}

// Remarque : on ne met pas de ";" � la fin des structures conditionnelles.

//-----
// l'op�rateur OU exclusif qui s'�crit XOR :
$question1 = 'mineur';
$question2 = 'je vote'; // exemple d'une questionnaire avec plusieurs r�ponses possibles

if ($question1 == 'mineur' XOR $question2 == 'je vote'){ //avec le OU exclusif seulement l'une des 2 conditions doit �tre valide(soit l'une OU soit l'autre)
	echo 'Vos r�ponses sont coh�rentes <br>';
}else{
	echo 'Vos r�ponses ne sont pas coh�rentes <br>';	//si les 2 conditions sont vraies (cas de "mineur vote"), ou si les 2 conditions sont fausses (cas de "majeur ne vote pas"), nous entrons dans le else.
}

//-----
//Condition ternaire :
//Syntaxe contract�e de la condition if...else :
$a = 10;
echo( $a = 10 )? '$a est �gal � 10 <br>' : '$a est diff�rent de 10 <br>' ; // dans la ternaire, "?" remplace if, et le ":" remplace else. on affiche le premier string si la conditon est varie, sinon 


//ou encore
$resultat = ( $a = 10 )? '$a est �gal � 10 <br>' : '$a est diff�rent de 10 <br>' ;
echo $resultat;



//-------
//Diff�rence entre === et ===:
$varA=1; //integer
$varB='1'; //string


if ($varA == $varB){ //on compare uniquement en valeur avec l'op�rateur =='
	echo '$varA est �gal � $varB en valeur <br>';
}


if ($varA === $varB){ // on compare � la fois en valeur ET en type avec l'op�rateur ==='
	echo'$varA est �gal � varB en valeur et en type <br>';
} else {
	echo '$varA est diff�rent de $varB en valeur OU en type <br>';
}
	

// Pour m�moire, le simple "=" correspond � une affectation.


//--------
//isset() et empty()
//D�fintions : 
//empty() : teste si c'est vide (c'est-�-dire 0,'',NULL, false ou non d�fini)
//isset() : teste si c'est d�fini (si ca existe) ET a une valeur non NULL

$var1 = 0;
$var2 = '';
if( empty($var1) ){ // la condition est vraie car $var1 contient 0
	echo 'on a 0, vide, NULL, false ou non d�fini <br>';
}
if (isset($var2)){ // la condition est vraie car $var2 existe bien
	echo '$var2 est d�finie <br>';
}


//si on let les lignes 213 et 214 en commenaites, la premi�re condition reste vraie, car $var1 est non d�finie, et la seconde devient fausse, car $var2 n'existe pas.
//Contexte d'utilisation : les formulaires pour empty, l'existence de variable ou d'array avec isset avant de les utiliser.

//------
// L'op�rateur Not qui s'�crit "!":
$var3 = 'Je ne suis pas vide !';

if (!empty($var3)) echo '$var3 n\'est pas vide <br>'; // ! pour NOT qui est une n�gation. Ici signifie si $var3 n'est pas vide.

// phpinfo(); // fonction pr�d�finie qui affiche des infos sur le contexte d'ex�ctuin du script

echo '<h2> Condition switch </h2>';

// La condition switch est une autre syntaxe pour �crire un if...elseif...elseif...else.

$couleur = 'jaune';
switch ($couleur) {
	case 'bleu': // Si $couleur contient la valeur 'bleu' , nous ex�cutons l'insctruction aprs le ":" qui suit :
		echo 'Vous aimez le bleu';
		break; // break est obligatoire pour quitter la ondition switch une fois le case ex�cut�
	
	case 'rouge':
		echo 'Vous aimez le rouge';
		break;

	case 'vert':
		echo 'Vous aimez le vert';
		break;

	default: // correspond � else, le cas par d�faut dans lequel on entre si aucune des valeurs pr�c�dentes n'est juste
		echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert <br>';
		break;
}

if($couleur == 'bleu'){
	echo 'Vous aimez le bleu';
}elseif ($couleur == 'rouge'){
	echo 'vous aimez le rouge';
}elseif ($couleur == 'vert'){
	echo 'Vous aimez le vert';
}else {
	echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert <br>';
}

echo '<h2> Les fonctions pr�d�finies </h2>';

//Une fonction pr�d�finie permet de r�aliser un traitement sp�cifique pr�d�termin� dans le langage PHP

//------
// strpos() : 
$email1 = 'prenom@site.fr';
echo strpos($email1, '@'); // indique la position 6 du caract�re '@' dabs la cha�ne $email1 (compte � partir de 0);
echo '<br>';
$email2 = 'bonjour';
echo strpos($email2, '@'); // cette ligne n'affiche rien pourtant la fonction strpost retourne bien quelque chose. Pour l'analyser nous faisons un var_dumb ci-dessous:
var_dump(strpos($email2, '@')); // on voit gr�ce  au var_dumb() que la fonction retourne false quand elle ne trouve pas l'@'. var_dumb() est une insctuction d'affichage al�lior�e que ;'on utilise uniquement en phase de d�veloppement (on kes retire en production).

echo '<br>';
//--------------
//strlen() :
$phrase = 'Mettez une phrase styl� ici';
echo strlen($phrase); // affiche la longueur de la cha�ne de caract�res, ici 27. Notez que strlen compte le nombre d'octets, et que les caract�res accentu�s compte pour 2. Si vous voulez compter pr�cis�ment le nombre de caract�res, on utilise : mb_strlen().

//----
// strtolower(), strtoupper(), trim()
$message = '               Hello World!         ';
echo strtolower ($message). '<br>'; // affiche tout en minuscules
echo strtoupper($message). '<br>';	// affiche tout en majuscules

echo strlen($message) . '<br>'; // affiche la longuer avec les espaces

echo strlen(trim($message)). '<br>'; // trim() supprime les espaces au d�but et � la fin de la cha�ne de caract�res. Puis strlen affiche la longueur de cette cha�ne sans les espaces.

//-----
// die() ou exit() :
//exit('ici un message'); //affiche un message (optionnel) et arr�te le scripts

//die('un autre message'); // die() est un alias de exit: il fait la m�me chose

//------
// Le manuel PHP :
/*
	Pour chercher une fonction (ou autre chose) de PHP : faire a Google "PHP nom de la fonction".
	exemple : "PHP trim"
	Le site de r�f�rence : php.net/manual/fr/
	A retenir : l'encadr� blanc qui d�finit la fonction : en bleu les mots cl�s et les param�tres, en vert leur type, entre crochets les param�tres optionnels.
*/

echo '<h2> les fonctions utilisateur </h2>';

// Des fonctions sont des morceaux de codes encapsul�s dans des accolades et portant un nom, qu'on appelle au besoin pour ex�cuter une action pr�cise

// Les fonctions qui ne sont pas pr�dfinies mais d�cclar�es par le d�veloppeur sont appel�es fonctions utilisateur.

// Fonction sans param�tre :

function tiret(){ // on d�clare une fonction avec le mot cl� function, suivi du nom puis d'une paire de (), er enfin d'une paire d'accolades
	echo '<hr>';
}
tiret(); // pour ex�cuter une fonction, on l'appelle par son nom suivi d'une paire de ()

//-----
// fonction avec param�tre et return :

function afficherBonjour($nom){
	return 'Bonjour' . $nom . ", comment vas-tu?";
//	return "bonjour $nom, comment vas-tu ?";
echo 'TEST'; //apr�s un return, les instructions de la fonction ne sont pas lues
}
echo afficherBonjour('Luc'); // si la fonction poss�de un param�tre, il faut obligatoirement lui envoyer une valeur lors de son appel. La fonction nous retourne le string "Bonjour Luc, comment vas-tu?" gr�ce au mot return qui s'y trouve. il fait donc faire un echo pour afficher le r�sultat.


// Exercice : �crivez une fonction appel�e appliqueTva2 qui multiplie un nombre donn�e par un taux donn�.
function appliqueTva2($nombre){
	return $nombre * 1.2;
}




































