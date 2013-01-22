<?php
require_once ("modele/ktPDO.class.php");

//Création de la session
    session_start();
    $_SESSION['user_name'] = '';
    $_SESSION['user_privilége'] = '';
    
//Connexion a la base de données.
    ktPDO::set_host();
    ktPDO::set_type();
    ktPDO::set_base();
    ktPDO::set_user();
    ktPDO::set_password();
$uc = 'forum';
//Switch pour les controleurs
    switch($uc){
        case 'Dologin' :
        {
            include("controleurs/c_login.php"); 
            break;
        }
        case 'Dologout' :
        {
            include("controleurs/c_logout.php");
            break;
        }
        case 'Doforum' :
        {
            include("controleurs/c_forum.php");
            break;
        }
    }

    
//Switch pour les vues
    switch($uc){
        case 'forum' :
        {
            include("vues/forum.php");
            break;
        }
        case '' :
        {
            include("vues/.php");
            break;
        }
    }
?>