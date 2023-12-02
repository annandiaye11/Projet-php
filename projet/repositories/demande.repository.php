<?php
//definir un tableau de 5 demandes
//une demande est caracterise par
    //numero,chaine genere aleatoirement
    //date
    //etat(encours,accepte,refuse)
    //type (suspension ou annulation)
    //motif
    //etudiant(matricule,nom,prenom,dateNaiss(Date php),classe(filiere,niveau,code))

//fonction qui retourne le tabeau de demande
//fonction qui retourne le tabeau de demande par type
//fonction qui retourne le tabeau de demande par etat
//fonction qui retourne le tabeau de demande par type et par etat
    // $demande = [
    //     "numero" => string ,
    //     "date" => date ,
    //     "etat" =>  [
    //         "encours" => bool ,
    //         "accepte" => bool ,
    //         "refuse" => bool ,
    //     ],
    //     "type" => [
    //         "suspension" => bool ,
    //         "annulation" => bool ,
    //     ],
    //     "motif" => string ,
    //     "etudian" => [
    //         "matricule" => int ,
    //         "nom" => string ,
    //         "prenom" => string ,
    //         "dateNaiss" => date ,
    //         "classe" => [
    //             "filiere" => string ,
    //             "niveau" => string ,
    //             "code" => int ,
    //         ]
    //     ]
    //           ];
    // $tabDemandes =[[1,1]];

    // //fonction qui retourne le tabeau de demande

    // function returnDemandes(array &$tabDemandes): array {
    //     foreach ($tabDemande as $demande) {
    //        $enCours = demandeEnCours($demade);
    //        $accpete = demandeAccepte($demade);
    //        $refuse = demandeRefuse($demade);
    //     }
    //    return $tabDemandes;
    // }

    // function demandeEnCours(array $demande):array{
    //     $tabDemandes1 =[];
    //     foreach ($demande as $carac) {
    //         if ($carac == "etat" && $carac["encours"] == true ){
    //             $tabDemandes1[]=$demade;
    //         } 
    //     } 
    //     return $tabDemandes1;
    // }
    // function demandeAccepte(array $demande):array{
    //     $tabDemandes2 =[];
    //     foreach ($demande as $carac) {
    //         if ($carac == "etat" && $carac["accepte"] == true ){
    //             $tabDemandes2[]=$demade;
    //         } 
    //     }
    //     return $tabDemandes2;
    // }
    // function demandeRefuse(array $demande):array{
    //     $tabDemandes3 =[];
    //     foreach ($demande as $carac) {
    //         if ($carac == "etat" && $carac["refuse"] == true ){
    //             $tabDemandes3[]=$demade;
    //         } 
    //     } 
    //     return $tabDemandes3;
    // }
    
?>