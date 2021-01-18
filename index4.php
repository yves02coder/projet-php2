<?php
if (isset($_POST['choix'])) {
    $mutiplie = $_POST['choix'];
    foreach ($mutiplie as $table2){
    
        for ($i = 0; $i < 11; $i++) {
            $res=$i*$table2;
            echo "<ul>
                <li>  $table2*$i=$res  </li>
            </ul>";
        }
    }
}
    ?>
<a href="index.php?url=home" class="btn btn-outline-dark">Retour</a>