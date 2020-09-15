<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre * -->


<?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,Lorem ipsum dolor sit amet';
$textLength = strlen($text);
$badword = $_GET ['badword'];
$changeWord = str_replace($badword, '***' , $text);
$newtextLenght = strlen($changeWord);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Badword_php</title>
    </head>
    <body>
        <h1><?php echo $text; ?></h1>
        <h2>La lunghezza del paragrafo è: <?php echo $textLength; ?></h2>
        <h1><?php echo $changeWord ?></h1>
        <h2>La lunghezza del paragrafo è: <?php echo $newtextLenght; ?></h2>
    </body>
</html>
