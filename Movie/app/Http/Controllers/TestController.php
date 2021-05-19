<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie {

  public $titolo;
  public $descrizione;

  // Serve per assicurarsi che informazioni verrano forniti, senza questi info non avra senso di esistere un titolo.
  public function __construct($titolo, $descrizione = ''){

    $this -> titolo = $titolo;
    // $this -> descrizione = $descrizione;

    // Se descrizione vuota assegna una descrizione assente
    if ($descrizione === '') {
      $this -> descrizione = 'descrizione assente';
    }
    // Se descrizione valorizata
    else {
      $this -> descrizione = $descrizione;
    }

  }

  // Serve per trasformare ogni movie in una riga sensata
  public function getString() {

    return "Titolo: " . $this -> titolo . "\n" . "Descrizione: " .  $this -> descrizione . "\n";
  }

}

class TestController extends Controller
{

  public function movie() {

    // Assegno ad ogni movie valori
    $movie1 = new Movie('INCEPTION', 'Cobb è il miglior ladro di informazioni del mondo: egli riesce a penetrare la mente dei suoi obiettivi, quando questi stanno dormendo.');
    $movie2 = new Movie('TITANIC', 'Grazie a sofisticate attrezzature, un team di cacciatori di tesori compie esplorazione del relitto del Titanic');
    $movie3 = new Movie('GENIUS', '');
    $movie4 = new Movie('THE TRUMAN SHOW', 'Truman, di professione assicuratore, vive una vita pressoché perfetta in una cittadina idilliaca.');

    // Cambio la stampatura nella pagina
    // $movie1Str = $movie1 -> getString();
    // $movie2Str = $movie2 -> getString();

    // Mettiamo tutti film in arr, gli giriamo e stampiamo atraverso dd
    $movies =[$movie1, $movie2, $movie3, $movie4];
    $str = '';

      foreach ($movies as $movie) {
        $str .= $movie -> getString() . "\n";
      }

    // Serve per stampare risultati e blocare tutto dopo
    dd($str);

  }

}
