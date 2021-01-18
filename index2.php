<?php



if(isset($_POST['table1'])){
    $table1=$_POST['table1'];
}
for($i=0;$i<11;$i++){
    $res=$i*$table1;
    echo "<ul>
    <li> $table1*$i = $res </li>
    </ul>";
}
?>
<a href="index.php?url=home" class="btn btn-outline-DANGER">Retour</a>