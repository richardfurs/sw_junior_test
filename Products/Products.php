<?php

abstract class Products {
    public $sku;
    public $name;
    public $price;
    public $attributes;

    public function getSku()
    {
        return $this->sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price . '$';
    }
}
