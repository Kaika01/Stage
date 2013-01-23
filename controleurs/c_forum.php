<?php

    $req = ktPDO::get()->query("SELECT * 
                                FROM categories 
                                LEFT JOIN topics 
                                ON categorie_id = topic_categorie 
                                ORDER BY categorie_id ASC, topic_date DESC");

    $categories = array();

    while ($return = $req->fetch())
    {
        $categories[] = $return;
    }
    $req->closecursor();
    
    
    include('vues/v_forum.php');

?>