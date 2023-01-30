<?php
// 07-traitement-string.php

// concaténation = addition plusieurs textes

$prenom = "Alain" ;
$nom = "Doe" ;

// Alain DOE découvre le PHP
$phrase = "$prenom $nom découvre le PHP" ; // concaténation " " dans les guillemet
                                           // j'ai écris les variables

echo $phrase ; // écrire dans la page html
// 1ère manière

// http://localhost/php-initiation/jour1/07-traitement-string.php

// 2ème manière
$phrase2 = "{$prenom} {$nom} découvre le PHP <br>" ; // concaténation " " dans les guillemet
                                                // $variable entouré de { }

echo $phrase2 ;

// utilisation de l'opération .

$phrase3 = $prenom . " " . $nom . "découvre le PHP" ;


// écrire avec php la phrase suivant
// Victor Hugo a dit "Vive les Misérables"
// caractère d'échappement

$parole = "Victor Hugo a dit \"Vive les Misérables\" <br>" ;
// utilisation du symbole anti slash devant les guillemets à interpréter comme des guillemet et non comme la fin d'une string
echo $parole ;

// si vous voulez que le texte saute une ligne au prochain echo il faut ajouter la balise html <br> à la fin de la concaténation
// par défaut il n'y a pas de saut de ligne avec echo

$unTexte = "<div>bonjour , comment allez vous $prenom ?</div>" ;

echo $unTexte;

$phraseMultiligne = " hello les amis
        
        comment allez vous ?
        
        j'espère bien !";
// avec les guillemets double => possible de sauter des lignes dans la valeur de la variable

echo $phraseMultiligne;