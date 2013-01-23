<table border="0">
    <tr>
       <th>Categorie</th>
       <th>Derniere discution</th>
       <th>Date</th>
    </tr>
    
    <?php
        foreach ($categories as $key=>$value) 
            {
            echo '<TR>';
            if (strpbrk('/',$value['categorie_name'] ))
            {
                $sous_categorie = explode('/', $value['categorie_name']);
                echo'<td><p style="text-indent:2em">'.$sous_categorie[count($sous_categorie)-1].'</p></td>';
            }
            else
            {
                echo '<td>'.$value['categorie_name'].'</td>';
            }
                echo '<td>'.$value['topic_name'].'</td>';
                echo '<td>'.$value['topic_date'].'</td>';
            echo '</TR>';

            }
    ?>
    </TR>
</table>