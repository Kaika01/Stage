<table border="0">
    <tr>
       <th>Discution</th>
       <th>Date</th>
       <th>Message</th>
    </tr>
<?php
    foreach ($topics as $key=>$value) 
        {
            echo '<TR>';
                echo '<td>'.$value['topic_name'].'</td>';
                echo '<td>'.$value['topic_date'].'</td>';
                echo '<td>'.$value['post_text'].'</td>';
            echo '</TR>';
        }  
?>
</table>