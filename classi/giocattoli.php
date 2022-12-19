<?php

include_once __DIR__ . '/prodotto.php';

class Giocattoli extends Prodotto {
  public $caratteristiche;
  public $dimensioniGiocattoli;

  public function __construct(
    String $immagine,
    String $nome,
    Float $prezzo,
    Generi $Category,

    String $caratteristiche,
    String $dimensioniGiocattoli
    ) {
    $this->caratteristiche = $caratteristiche;
    $this->dimensioniGiocattoli = $dimensioniGiocattoli;
    parent::__construct($nome,$immagine,$prezzo,$Category );
  }
}

?>