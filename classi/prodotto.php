<?php 

include_once __DIR__ . '/category.php';

class Prodotto{
    public $immagine;
    public $nome;
    public $prezzo;
    public $Category;

    public function __construct(
        String $nome,
        String $immagine,
        Float $prezzo,
        Generi $Category
    ){
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->category = $Category;
    }

}


?>