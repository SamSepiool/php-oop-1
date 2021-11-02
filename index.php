<?php
require_once __DIR__ . '/classes/Movie.php';

$backToFuture = new Movie('Back to future: part I', 1985, 'Robert Zemeckis', 'ENG', 5);

// var_dump($backToFuture);
// echo $backToFuture;



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

        <?php echo $backToFuture->getTitle() ?>

    

        
    </body>
</html>