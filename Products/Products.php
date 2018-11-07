<?php

abstract class Products {
    protected $sku;
    protected $name;
    protected $price;

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
