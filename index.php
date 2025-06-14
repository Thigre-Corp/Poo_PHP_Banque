<h1> Exercice Banque </h1>

<p>
    Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires
    et leurs comptes bancaires respectifs.
    Un compte bancaire est composé des éléments suivants :
    Un libellé (compte courant, livret A, ...)
    Un solde initial
    Une devise monétaire
    Un titulaire unique
    Un titulaire comporte :
    Un nom
    Un prénom
    Une date de naissance
    Une ville
    L'ensemble de ses comptes bancaires.
    Sur un compte bancaire, on doit pouvoir :
    Créditer le compte de X euros
    Débiter le compte de X euros
    Effectuer un virement d'un compte à l'autre.
    On doit pouvoir :
    Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes
    appartenant à celui(celle)-ci.
    Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du
    titulaire du compte.
<p>

<?php


require 'Titulaire.php';
require 'Compte.php';

$moi = new Titulaire("GRELL", "Thierry", "07/03/1983", "Mulhouse");
$toi = new Titulaire("WIRTZ", "Sophie", "26/11/1986", "Mulhouse");

$livretA1 = new Compte("Livret A", 1234.56, "Euros", $moi); /*ct(string $libelle, float $soldeInitial, string $devise, Titulaire $titulaire){*/
$livretA2 = new Compte("Livret A", 22579.3, "Euros", $toi);
$devise1 = new Compte("Compte en devise", 159566, "USD", $moi);
$courant = new Compte("Compte Courant", 37.51, "Euros", $toi);

var_dump($moi);
var_dump($toi);

$livretA2->virement($livretA1, 10000);

var_dump($moi);
/*var_dump($toi);

var_dump($livretA1);
*/
var_dump($moi->ageTitulaire());