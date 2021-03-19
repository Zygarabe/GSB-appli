<?php
// gestion du comptable
include("vues/v_sommaireComptable.php");
$idComptable=$_SESSION['idComptable'];
$action = $_REQUEST ['action'];
switch($action){
    case 'selectionnerVisiteur':{
        
        //rechercher les visiteurs dnas la BD
        $lesVisiteurs= $pdo-> getLesVisiteurs();
        //Inclusion de la vue v_listeVisiteur.php
        include ("vues/v_listeVisiteur.php");
        break;
    }
    case 'validerFichefrais':{
        include("vues/v_listeFrais.php");break;
    }
    case 'modifierFraisForfait':{
        ;break;
    }
    case 'supprimerFraisHorsForfait':{
        ;break;
    }
    case 'reporterFraisHorsForfait':{
        ;break;
    }
    case 'validerFrais':{
        ;break;
    }
}

?>
