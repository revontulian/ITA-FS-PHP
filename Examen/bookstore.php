<?php

require_once 'book.php';

class Shelf
{
    private $shelf = [];
    private $character_in_book = [];


    public function __construct()
    {
        $this->shelf[0] = new Book("El Hobbit", 1937, 1000, ["Bilbo", "Gandalf"]);
        $this->shelf[1] = new Book("La Comunidad del Anillo", 1954, 500, ["Frodo", "Sam", "Gandalf"]);
        $this->shelf[2] = new Book("Las Dos Torres", 1954, 328, ["Aragorn", "Legolas", "Gimli"]);
        $this->shelf[3] = new Book("El Retorno del Rey", 1955, 96, ["Denethor", "Sauron"]);
    }

    public function addBook($book) : void
    {
        $this->shelf[] = $book;
    }

    public function getShelf(): array
    {
        return $this->shelf;
    }

    function getOldestBook(): Book
    {
        $oldest = $this->shelf[0];

        foreach ($this->shelf as $book) {
            if ($book->getPublicationYear() < $oldest->getPublicationYear()) {
                $oldest = $book;
            }
        }
        return $oldest;
    }

    function isCharacterFound($character) : bool
    {
        foreach ($this->shelf as $book) {
            if (in_array($character, $book->getMainCharacters())) {
                return true;
            }
        }
        return false;
    }

    function findCharacter($character) : array
    {
        foreach ($this->shelf as $book) {
            if (in_array($character, $book->getMainCharacters())) {
                $this->character_in_book[] = $book->getName();
            }
        }
        return $this->character_in_book;
    
}
}