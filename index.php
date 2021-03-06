<?php
require_once __DIR__ . '/classes/Movie.php';



$movies= [
    // $backToFuture = new Movie('Back to future: part I', 1985, 'Robert Zemeckis', 'ENG', 5);
    new Movie(
        [
            "title"=>'Back to future: part I',
            "year"=>1985,
            "director"=>'Robert Zemeckis',
            "language"=>'eng',
            "rating"=>5
        ]
    ),

    new Movie(
        [
            "title"=>'Interstellar',
            "year"=>2014,
            "director"=>'Christopher Nolan',
            "language"=>'eng',
            "rating"=>5
        ]
    )
];



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

      <ul>
      
        <?php foreach($movies as $movie) :  ?>
            <li>
                <h2>TITLE: <?= $movie -> getTitle()?> </h2>
            </li>
            <li>
                <strong>YEAR:</strong>
                <?= $movie -> getYear()?> 
            </li>
            <li>
                <strong>DIRECTOR:</strong>
                <?= $movie -> getDirector()?> 
            </li>
            <li>
                <strong> LANGUAGE:</strong>
                <?= $movie -> getLanguage()?> 
            </li>
            <li>
                <strong>RATING:</strong>
                <?= $movie -> getRating()?> 
            </li>
            
        <?php endforeach?> 
      </ul>  
      
     

    

        
    </body>
</html>