<?php

class Book
{
    private $name;
    private $publication_year;
    private $num_pages;
    private $main_characters;

    public function __construct(string $name, int $publication_year, int $num_pages, array $main_characters)
    {
        $this->name = $name;
        $this->publication_year = $publication_year;
        $this->num_pages = $num_pages;
        $this->main_characters = $main_characters;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPublicationYear(): int
    {
        return $this->publication_year;
    }

    public function getNumPages() : int
    {
        return $this->num_pages;
    }

    public function getMainCharacters() : array
    {
        return $this->main_characters;
    }
}
