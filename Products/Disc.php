<?php

include_once 'Products/Products.php';

class Disc extends Products {
    protected $size;
    public function getSize()
    {
        return $this->size . 'MB';
    }
}
