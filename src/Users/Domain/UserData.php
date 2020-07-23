<?php

namespace Sge\Users\Domain;

class UserData
{
    private $names;
    private $surnames;
    private $phones;
    private $address;
    private $genre;
    public function __construct(string $names, string $surnames, array $phones, string $address, string $genre)
    {
        $this->names = $names;
        $this->surnames = $surnames;
        $this->phones = $phones;
        $this->address = $address;
        $this->genre = $genre;
    }
    public function names(): string
    {
        return $this->names;
    }
    public function surnames(): string
    {
        return $this->surnames;
    }
    public function phones(): array
    {
        return $this->phones;
    }
    public function address(): string
    {
        return $this->address;
    }
    public function genre(): string
    {
        return $this->genre;
    }
}
