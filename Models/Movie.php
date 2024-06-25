<?php

require_once __DIR__ . '/Actor.php';
class Movie
{
    private string $name;
    private int $year;
    private array $genres = [];
    private array $actors = [];
    private static int $movie_id = 0;

    public function __construct(string $_name)
    {
        $this->name = $_name;
        self::$movie_id++;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public static function getId(): int
    {
        return self::$movie_id;
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

    public function setGenre(string ...$_genre): void   // rest operator trasforma stringa in array
    {
        if (!in_array($_genre, $this->genres)) {
            $this->genres = [...$this->genres, ...$_genre];
        }
    }

    public function getGenres(): array
    {
        return $this->genres;
    }

    public function setActor(Actor $_actor): void
    {
        $this->actors[] = $_actor;
    }

    public function getActors(): array
    {
        return $this->actors;
    }
}
