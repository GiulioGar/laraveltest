<h1>

<?=$titolo?>

</h1>

<?php

if(!empty($members)){
    echo '<ul>';
    foreach($members as $person){

        echo "<li> {$person['name']} - {$person['lastname']}</li>";
    }

    echo '</ul>';
}
