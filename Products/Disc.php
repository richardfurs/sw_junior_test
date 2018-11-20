<?php

include_once 'Products/Products.php';

class Disc extends Products {
    public $size;

    public function __construct()
    {
        $attributes = json_decode($this->attributes, true);
        $this->size = $attributes['size'];
    }

    public function getSize()
    {
        return $this->size . 'MB';
    }

    public function save()
    {
        $query = require 'bootstrap.php';

        $data = [
            'type' => get_class($this),
            'sku' => $this->sku,
            'name' => $this->name,
            'price' => $this->price,
            'attributes' => json_encode(['size' => $this->size])
        ];

        $query->insert(Connection::make(), $data);
    }
}
