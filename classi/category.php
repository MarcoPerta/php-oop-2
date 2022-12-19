<?php 

class Category{
    
    public $nomeCategory;
    public $icona;

    public function __construct(
        String $nomeCategory,
        String $icona
    ) {
        $this->nomeCategory = $nomeCategory;
        $this->icona = $icona;
    }

}

?>