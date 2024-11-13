<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// * entreprises
$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", " 14 rue du Rhone", "67100", "STRASBOURG");
$TF1 = new Entreprise("TF1", "1956-01-01", " 3 rue du bidule", "59100", "LILLE");
$poleEmploi = new Entreprise("POLE EMPLOI", "1978-01-01", " 56 rue du machin", "62000", "CALAIS");


// *employés
$stephane = new Employe("SMAIL", "Stephane", "steph-smail@elan-formation.fr");
$mickael = new Employe("MURMANN", "Mickael", "mickael-murmann@elan-formation.fr");

// *contrats
// *pour un nex contrat = new contrat( l'entreprise, l'employé, dateEmbauche)
$c1 = new Contrat($elanFormation, $stephane, "2020-01-01");
$c2 = new Contrat($TF1, $stephane, "2015-01-01");
$c3 = new Contrat($elanFormation,  $mickael, "2019-01-01" );
$c4 = new Contrat($TF1, $mickael, "2020-01-01" );
$c5 = new Contrat($poleEmploi, $mickael, "2023-01-01" );


echo $elanFormation->getRaisonSociale()."<br>";
// var_dump ($elanFormation); 
//*permet d'afficher les infos en tableau

echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getDateCreation()->format("d- m- y"). " se situe au " . $elanFormation->getAdresse()." " .$elanFormation->getCp(). " " . $elanFormation->getVille() ." " ." <br>";

// * long à écrire, faut pas oublier les . pour concaténer...  donc dans entreprise on fait une public function getAdresseComplete() et on n'aura plus qu'à écrire

echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getDateCreation()->format("d- m- y"). " se situe au " . $elanFormation->getAdresseComplete()." <br>";
// *juste le getAdresseComplete permet de donner adresse cp ville en même temps
// *on ajoute un getter en factorisant 

echo $elanFormation ."<br>";

echo$elanFormation->getInfos()."<br>";

echo $stephane."<br>";

// var_dump($stephane);

// *faire attention aux fonctions mise en commentaire dans les classes...ça donne une erreur...
// echo $stephane->getInfos(). "<br>";

// echo $stephane->getEntreprise($TF1)."<br>";

// var_dump($poleEmploi);

echo $elanFormation->afficherEmployes()."<br>";

echo $TF1->afficherEmployes()."<br>";

echo $poleEmploi->afficherEmployes()."<br>";


