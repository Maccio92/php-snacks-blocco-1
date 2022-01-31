<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php
$text = 'La famiglia Dursley di Privet Drive numero 4 era il motivo per cui
Harry non si era mai goduto le vacanze estive. Zio Vernon, zia Petunia e il
loro figlio Dudley erano i suoi unici parenti, tutti e tre Babbani e con un atteggiamento davvero medioevale nei confronti della magia. I genitori
scomparsi di Harry, una strega e un mago, non venivano mai nominati sotto il tetto dei Dursley, e per anni zia Petunia e zio Vernon avevano tiranneggiato Harry in tutti i modi, nella speranza di soffocare in lui ogni scintilla di magia.';

$paragraph = explode('. ', $text);

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
<ul><?php for ($i=0; $i < count($paragraph); $i++) { ?>
        <li> <?= $paragraph[$i]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>