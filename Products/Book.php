<?php

include_once 'Products/Products.php';

class Book extends Products {
    public $weight;

    public function __construct()
    {
        $attributes = json_decode($this->attributes, true);
        $this->weight = $attributes['weight'];
    }

    public function getSize()
    {
        return $this->weight . ' KG';
    }

    public function save()
    {
        $query = require 'bootstrap.php';

        $data = [
            'type' => get_class($this),
            'sku' => $this->sku,
            'name' => $this->name,
            'price' => $this->price,
            'attributes' => json_encode(['weight' => $this->weight])
        ];

        $query->insert(Connection::make(), $data);
    }
}
