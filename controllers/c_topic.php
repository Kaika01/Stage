<?php

    $req = ktPDO::get()->query("SELECT * 
                                FROM topics 
                                LEFT JOIN posts 
                                ON topic_id = post_topic 
                                WHERE topic_id = ".$_GET['query']."
                                ORDER BY topic_id ASC, post_id ASC");
    
    $topics = array();

    while ($return = $req->fetch())
    {
        $topics[] = $return;
    }
    $req->closecursor();
    
    
    include('views/v_topic.php');

?>