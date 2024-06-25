<?php

require_once __DIR__ . '/Models/Movie.php';

$movie1 = new Movie("The Bourne Identity");

try {
    $movie1->setYear(2002);
    $movie1->setGenre("action", "thriller");
    $movie1->setActor(new Actor("Matt", "Damon"));
    $movie1->setActor(new Actor("Franka", "Potente"));
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

$movie2 = new Movie("Mamma mia");
try {
    $movie2->setYear(2008);
    $movie2->setGenre("comedy", "musical");
    $movie2->setActor(new Actor("Meryl", "Streep"));
    $movie2->setActor(new Actor("Amanda", "Seyfried"));
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

$movie3 = new Movie("The Godfather");
try {
    $movie3->setYear(1972);
    $movie3->setGenre("Crime", "Drama");
    $movie3->setActor(new Actor("Marlon", "Brando"));
    $movie3->setActor(new Actor("Al", "Pacino"));
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <div class="card">
                    <button class="icon">
                        <i class="fa-solid fa-pencil"></i>
                    </button>
                    <h2><?php echo $movie["name"]; ?></h2>
                    <p><strong>Anno: </strong><?php echo $movie["year"]; ?></p>
                    <div class="genres">
                        <span><strong>Generi: </strong></span>
                        <?php if (count($movie["genres"])) : ?>
                            <?php foreach ($movie["genres"] as $genre) : ?>
                                <span><?php echo $genre ?></span>
                                <?php if ($genre !== end($movie["genres"])) : ?>
                                    <span> - </span>
                                <?php endif ?>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                    <div class="actors">
                        <span><strong>Attori: </strong></span>
                        <?php foreach ($movie["actors"] as $actor) : ?>
                            <span><?php echo $actor?->getName() ?> </span>
                            <span><?php echo $actor?->getSurname() ?></span>
                            <?php if ($actor !== end($movie["actors"])) : ?>
                                <span> - </span>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <p class="total"><strong>Total movies: </strong><?php echo Movie::getId() ?></p>
    </div>
</body>

</html>