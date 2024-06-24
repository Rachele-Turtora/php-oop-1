<?php

class Movie
{
    private string $name;
    private int $year;
    private string $genre;

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
        $this->genre = $_genre;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }
}

$bourne = new Movie("The Bourne Identity");

try {
    $bourne->setYear(2002);
    $bourne->setGenre("action");
    var_dump($bourne);
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

$mamma_mia = new Movie("Mamma mia");
try {
    $mamma_mia->setYear(2008);
    $mamma_mia->setGenre("comedy");
    var_dump($mamma_mia);
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}
