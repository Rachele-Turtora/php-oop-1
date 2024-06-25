<?php

class Actor
{
    private string $name;
    private string $surname;
    private int $age;
    private string $nationality;

    public function __construct(string $_name, string $_surname)
    {
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setAge(int $_age): void
    {
        $this->age = $_age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setNationality(string $_nationality): void
    {
        $this->nationality = $_nationality;
    }

    public function getNationality(): string
    {
        return $this->nationality;
    }
}
