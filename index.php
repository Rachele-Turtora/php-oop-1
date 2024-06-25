<?php

require_once __DIR__ . '/Models/Movie.php';

$movie1 = new Movie("The Bourne Identity");

try {
    $movie1->setYear(2002);
    $movie1->setGenre("action", "thriller");
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

$movie2 = new Movie("Mamma mia");
try {
    $movie2->setYear(2008);
    $movie2->setGenre("comedy", "musical");
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
    <link rel="stylesheet" href="./css/style.css">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <div class="card">
                    <h2><?php echo $movie["name"]; ?></h2>
                    <p>Anno: <?php echo $movie["year"]; ?></p>
                    <p>Generi: </p>
                    <?php if (count($movie["genres"])) : ?>
                        <?php foreach ($movie["genres"] as $genre) : ?>
                            <p><?php echo $genre ?></p>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>