<?php

class Movie
{
    private string $name;
    private int $year;
    private array $genres = [];

    public function __construct(string $_name)
    {
        $this->name = $_name;
    }

    public function setYear(int $_year): void
    {
        if ($_year < 1895) {
            throw new Exception("Non era ancora nato il cinema");
        }

        $this->year = $_year;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setGenre(string $_genre): void
    {
        if (!in_array($_genre, $this->genres)) {
            $this->genres[] = $_genre;
        }
    }

    public function getGenres(): array
    {
        return $this->genres;
    }
}

$bourne = new Movie("The Bourne Identity");

try {
    $bourne->setYear(2002);
    $bourne->setGenre("action");
    $bourne->setGenre("thriller");
    var_dump($bourne->getYear(), $bourne->getGenres());
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
    var_dump($mamma_mia->getYear(), $mamma_mia->getGenres());
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}
