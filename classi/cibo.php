<?php

include_once __DIR__ . '/prodotto.php';

class Cibo extends Prodotto {

  public $pesoNetto;
  public $ingredienti;

  public function __construct(
    String $immagine,
    String $nome,
    Category $Category,
    Float $prezzo,

    Int $pesoNetto,
    String $ingredienti
    ) {
    $this->pesoNetto = $pesoNetto;
    $this->ingredienti = $ingredienti;
    parent::__construct($immagine,$nome,$prezzo,$Category );
  }
}

?>