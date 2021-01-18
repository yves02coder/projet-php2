<?php
/*

if(isset($_POST['answerInput'])){
    $answerInput==$_POST['answerInput'];
    echo 'Bien joué';
}elseif($answerInput!=$_POST){

    echo 'Bien essayé☺';
}else{
    $answerInput='empty';
    echo "veillez entrer une reponse";
}
*/

    if(isset($_POST['answerInput'])){
        $answerInput=$_POST['answerInput'];

    }
    
    if(isset($_POST['reponse'])){
        $reponse = $_POST['reponse'];
    }
        if($answerInput == $reponse){
            echo "Bonne réponse";
        }else{
            echo " Mauvaise réponse";
             $answerInput='empty';
    echo "  veillez essayer encore <br>";
        }

       // var_dump($reponse);

?>


<hr>
<a href="index.php" class="btn btn-outline-dark">Retour</a>
</hr>