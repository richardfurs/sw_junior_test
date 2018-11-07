<?php

include_once 'Products/Products.php';

class Furniture extends Products {
    protected $height;
    protected $width;
    protected $length;
    public function getSize()
    {
        return $this->height . 'x' . $this->width . 'x' . $this->length;
    }
}
