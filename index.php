<?php

// Definizione della classe Movie
class Movie {
  
  // Dichiarazione delle variabili d'istanza
  private $title;
  private $year;
  // Bonus 1: Modifica della classe Movie per accettare più di un genere
  private $genres = array();
  
  // Definizione del costruttore
  public function __construct($title, $year, $genres) {
    $this->title = $title;
    $this->year = $year;
    $this->genres = $genres;
  }
  
  // Definizione di un metodo per ottenere il titolo del film
  public function getTitle() {
    return $this->title;
  }
  
  // Definizione di un metodo per ottenere l'anno di uscita del film
  public function getYear() {
    return $this->year;
  }
  
  // Definizione di un metodo per ottenere i generi del film
  public function getGenres() {
    return $this->genres;
  }
  
}

// Creazione di due oggetti 'Movie'
$movie1 = new Movie('The Shawshank Redemption', 1994, array('Drama'));
$movie2 = new Movie('The Dark Knight', 2008, array('Action', 'Crime', 'Drama'));

// Stampa a schermo delle proprietà degli oggetti 'Movie'
echo "Movie 1:<br>";
echo "Title: " . $movie1->getTitle() . "<br>";
echo "Year: " . $movie1->getYear() . "<br>";
echo "Genres: " . implode(', ', $movie1->getGenres()) . "<br><br>";

echo "Movie 2:<br>";
echo "Title: " . $movie2->getTitle() . "<br>";
echo "Year: " . $movie2->getYear() . "<br>";
echo "Genres: " . implode(', ', $movie2->getGenres()) . "<br><br>";

// Creazione di un oggetto 'Movie' con più di un genere
$movie3 = new Movie('Pulp Fiction', 1994, array('Crime', 'Drama'));

// Stampa a schermo delle proprietà dell'oggetto 'Movie' con più di un genere
echo "Movie 3:<br>";
echo "Title: " . $movie3->getTitle() . "<br>";
echo "Year: " . $movie3->getYear() . "<br>";
echo "Genres: " . implode(', ', $movie3->getGenres()) . "<br><br>";

?>

<!-- BONUS 2 -->
<?php

// Includere la definizione della classe Movie

// Definire la lista dei film
$movies = array(
	new Movie('The Shawshank Redemption', 1994, array('Drama')),
	new Movie('The Dark Knight', 2008, array('Action', 'Crime', 'Drama')),
	new Movie('Pulp Fiction', 1994, array('Crime', 'Drama'))
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP 1</title>
</head>
<body>
<h1>Movie List</h1>
	<table>
		<tr>
			<th>Title</th>
			<th>Year</th>
			<th>Genres</th>
		</tr>
		<?php
		// Loop attraverso la lista dei film
		foreach ($movies as $movie) {
			echo "<tr>";
			echo "<td>" . $movie->getTitle() . "</td>";
			echo "<td>" . $movie->getYear() . "</td>";
			echo "<td>" . implode(', ', $movie->getGenres()) . "</td>";
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>