<?php
/*
$nombre=array(1,2,3,4,5,6,7,8,9,10);
$aleatoire=array(1,2,3,4,5,6,7,8,9,10);
$rand_nombre=array_rand($nombre);
$rand_aleatoire=array_rand($aleatoire);
$answer= $rand_nombre*$rand_aleatoire;
$answer=$_POST;

echo $rand_nombre.  ' X ' .$rand_aleatoire;
echo readline('entrer le resultat');
if($answer===$_POST){
    echo 'Bien joué';
}elseif($answer !==$_POST){
    echo 'Revisez et revenez';
}else{
    echo "insitez";
}
*/

$nom=[];
$prenom=[];
$age=[];


if($_POST=$nom){
($_POST=$prenom);
	$_POST=IS_INT($age);
	echo readline("vous pouvez valider");
}else{
	echo "veuillez renseigner les champs";
}
?>
<form type="text" name="text" method="post">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <label for="exampleFormControlInput1" class="form-label">nom</label>
    <input type="Name" class="form-control" id="exampleFormControlInput1" placeholder="roland">
    </div>
    <label for="exampleFormControlInput1" class="form-label">age</label>
    <input type="age" class="form-control" id="exampleFormControlInput1" placeholder="100">
    </div>

    <button type="submit" class="outline">valider</button>
    <?php
    print_r($_POST);