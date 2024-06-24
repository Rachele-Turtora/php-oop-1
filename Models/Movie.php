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

    public function getName(): string
    {
        return $this->name;
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