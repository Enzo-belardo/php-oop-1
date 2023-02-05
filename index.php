<?php

require_once __DIR__ . './classes/Movie.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop</title>
</head>
<body>

<?php
  $movieUno = new Movie('Titanic', ['Leornardo Di Caprio','Kate Winslet'] , 'Drammatico');
  $movieDue = new Movie('Prova a prendermi', ['Leornardo Di Caprio','Tom Hanks'] , 'Azione');
  $movies = [$movieUno , $movieDue];
?>

<header>
    <h1>Movies OOP</h1>
</header>
<main>
    <?php foreach ($movies as $movie) {?>
        <p>
            <?php echo $movie->getTitle(); ?>
        </p>
    
        <p>
            <?php echo $movie->getGenere(); ?>
        </p>
    
        <p>
        <?php foreach ($movie-> actors as $actors) {
            echo $actors . ' ';
        } ?>
        </p>
    
    <?php }; ?>
</main>


    
</body>
</html>