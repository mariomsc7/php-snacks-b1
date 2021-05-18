<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 
    PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60 
-->
    <h2>Snack 1 - Matches</h2>

    <?php
    $matches = [
        [
            "casa" => "Bologna",
            "ospite" => "Milano",
            "punti_casa" => "50",
            "punti_ospite" => "100"
        ],
        [
            "casa" => "Varese",
            "ospite" => "Venezia",
            "punti_casa" => "70",
            "punti_ospite" => "80"
        ],
        [
            "casa" => "Pesaro",
            "ospite" => "Cantu",
            "punti_casa" => "100",
            "punti_ospite" => "30"
        ],
        [
            "casa" => "Sassari",
            "ospite" => "Brindisi",
            "punti_casa" => "50",
            "punti_ospite" => "50"
        ],
    ]; 
    ?>

    <h3>Risultati partite:</h3>
    <ul>
        <?php for($i =0; $i < count($matches); $i++) { ?>
            <li>
                <p>
                    <strong>
                        <?php echo $matches[$i]['casa']; ?> - <?php echo $matches[$i]['ospite']; ?>
                    </strong> |

                    <?php echo $matches[$i]['punti_casa']; ?> - <?php echo $matches[$i]['punti_ospite']; ?>
                </p>
            </li>
        <?php } ?>
    </ul>

<!-- 
    PHP Snack 2:
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri
    2. che mail contenga un punto e una chiocciola
    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->

<h2>Snack 2 - Verifica email</h2>

<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


if (empty($name) || empty($email) || empty($age)) {
    echo 'Accesso negato';
} elseif ( (strlen($name) < 3) || (strpos($email, '@') === false || strpos($email, '.') === false) || (!is_numeric($age)) ) {
    echo 'Accesso negato';
} else {
    echo 'Accesso consentito';
}
?>

<!-- 
    PHP Snack 3 Bonus 
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->


<?php
$array_random = [];
for($i = 0; $i < 15; $i++) {
    $array_random[] = rand(1,100);
}
var_dump($array_random);
?>




</body>
</html>