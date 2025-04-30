<?php
require_once 'bookstore.php';

$shelf = new Shelf();
$shelf->addBook(new Book("El Silmarillion", 1927, 400, ["Fëanor", "Beren", "Lúthien"]));

echo "Librería del Señor de los Anillos.\n";
echo "<br> El libro de la librería cuya fecha de publicación es más antigua es: " . $shelf->getOldestBook()->getName() . "\n <br>";

echo "<br>";

$character = "Gandalf";
if ($shelf->isCharacterFound($character)) {
    echo "El/los libro/s en los que aparece " . $character . " es/son: " . implode(", ", $shelf->findCharacter($character)) . "\n <br>";
} else {
    echo $character . " no es un personaje de la librería\n <br>";
}

/* Por si hace falta listar la librería entera:

foreach ($shelf->getShelf() as $book) {
    echo "Nombre: " . $book->getName() . "\n <br>";
    echo "Año de publicación: " . $book->getPublicationYear() . "\n <br>";
    echo "Número de páginas: " . $book->getNumPages() . "\n <br>";
    echo "Personajes principales: " . implode(", ", $book->getMainCharacters()) . "\n <br>";
    echo "<br>";
}
    */
