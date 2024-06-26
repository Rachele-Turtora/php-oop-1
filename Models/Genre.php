<?php

class Genre
{
    private string $name;

    public function __construct(string $_name)
    {
        $this->name = $_name;
    }

    public function setName(string $_name): void
    {
        $this->name = $_name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
