<?php
require_once ("libraries/ktPDO.class.php");
require ("config/constants.php");
//Création de la session
    session_start();
    $_SESSION['user_name'] = '';
    $_SESSION['user_privilege'] = '';
    
//Connexion a la base de données.
    ktPDO::set_base('forum');
    
//Je pige comment sa marche mais je sais pas l'utiliser
    function q($segment = '')
    {
        $query = explode('/', $_GET['query']);

        if (!empty($query))
        {
            if (array_key_exists($segment, $query))
            {
                return $query[$segment];
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }
//undefined index : query
    q($_GET['query']);
    
    
    
    
//initialise ou récupére la variable "uc" permetant de l'accés aux pages.
if(!isset($_REQUEST['uc'])){
	$_REQUEST['uc'] = 'Viewforum';
} 
$uc = $_REQUEST['uc'];

//Switch pour les controleurs
    switch($uc){
        case 'Dologin' :
        {
            include("controllers/c_login.php"); 
            break;
        }
        case 'Dologout' :
        {
            include("controllers/c_logout.php");
            break;
        }
        case 'Viewforum' :
        {
            include("controllers/c_forum.php");
            break;
        }
        case 'ViewTopic' :
        {
            include("controllers/c_topic.php");
            break;
        }
    }

    
//Switch pour les vues
    switch($uc){
        case 'forum' :
        {
            include("views/v_forum.php");
            break;
        }
        case 'topic' :
        {
            include("views/v_topic.php");
            break;
        }
    }
?>