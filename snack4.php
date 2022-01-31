<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$randomNumber = [];
while(count($randomNumber) < 15)
{
    $number = rand(1,100);
    if(!in_array($number, $randomNumber))
    {
        $randomNumber[] = $number;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul><?php for ($i=0; $i < count($randomNumber); $i++) { ?>
        <li> <?= $randomNumber[$i]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>