<?php

require_once __DIR__ . '/Models/Movie.php';

$bourne = new Movie("The Bourne Identity");

try {
    $bourne->setYear(2002);
    $bourne->setGenre("action");
    $bourne->setGenre("thriller");
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

$mamma_mia = new Movie("Mamma mia");
try {
    $mamma_mia->setYear(2008);
    $mamma_mia->setGenre("comedy");
    $mamma_mia->setGenre("musical");
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($movies as $movie) : ?>
            <li>
                <h2>Titolo: <?php echo $movie["name"]; ?></h2>
                <p>Anno: <?php echo $movie["year"]; ?></p>
                <p>Generi: </p>
                <ul>
                    <?php foreach ($movie["genres"] as $genre) : ?>
                        <li>
                            <p><?php echo $genre ?></p>
                        </li>
                    <?php endforeach ?>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>