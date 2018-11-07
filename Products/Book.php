<?php

include_once 'Products/Products.php';

class Book extends Products {
    protected $weight;
    public function getSize()
    {
        return $this->weight . ' KG';
    }
}
