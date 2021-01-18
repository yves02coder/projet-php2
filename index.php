<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projet php</title>
</head>

<body>
    <header>
        <?php

?>
    </header>
    <div class="table">


        <h2 class=style="color: green;">TABLE De Trois</h2>
        <a href="index3.php" class="btn btn-outline-success">table de 3</a>


        <h2>choix multiple</h2>
        <form method="post" action="index2.php" class="plus">

            <div class="form-group">
                <label class="text-center" for="table1" style="color: green;">Choix du multiplicateur</label>
                <select class="form-control" id="table1" name="table1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <button type="submit" class="btn btn-outline-dark plus">Résultat</button>
            </div>
        </form>
        <div id="muti">

            <h2>case a selectionner</h2>
            <form method="post" action="index4.php" id="table2" class="plus">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="1">
                    <label class="form-check-label" for="table2">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="2">
                    <label class="form-check-label" for="table2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="3">
                    <label class="form-check-label" for="table2">3</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="4">
                    <label class="form-check-label" for="table2">4</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="5">
                    <label class="form-check-label" for="table2">5</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="6">
                    <label class="form-check-label" for="table2">6</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="7">
                    <label class="form-check-label" for="table2">7</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="8">
                    <label class="form-check-label" for="table2">8</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="9">
                    <label class="form-check-label" for="table2">9</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="table2" name="choix[]" value="10">
                    <label class="form-check-label" for="table2">10</label>
                </div>
                <button type="submit" class="btn btn-outline-danger">Résultat</button>


            </form>



            <form action="index5.php" method="post" class="plus">
                <h2>generateur de calcul</h2>
                <label for="reponse">Combien font? :
                    <?php
                
$nombre=array(1,2,3,4,5,6,7,8,9,10);
$aleatoire=array(1,2,3,4,5,6,7,8,9,10);
$rand_nombre=array_rand($nombre);
$rand_aleatoire=array_rand($aleatoire);
$answer= $rand_nombre*$rand_aleatoire;

echo $rand_nombre.  ' X ' .$rand_aleatoire;
//echo var_dump($answer);

/*
rand() genère des chiffres pseudoaleatoire mais non securisés

pour plus de securité utiliser random_int();random_bytes();
ou 
*/
?>
                    <input type="hidden" name="reponse" id="reponse" value="<?= $answer ?>">


                </label>
                <div class="container_fluid plus" style="margin-top: 20px;">

                    <input class="form-control" name="answerInput" required>
                    <div class="invalid-feedback">
                    </div>
                    <button type="submit" name="btn-result" class="btn btn-outline-info">Valider</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php
/*$answer=$_POST['reponse'];
echo $answer;*/