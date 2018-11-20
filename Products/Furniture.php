<?php

include_once 'Products/Products.php';

class Furniture extends Products {
    public $height;
    public $width;
    public $length;

    public function __construct()
    {
      $attributes = json_decode($this->attributes, true);
      $this->height = $attributes['height'];
      $this->width = $attributes['width'];
      $this->length = $attributes['length'];
    }

    public function getSize()
    {
        return $this->height . 'x' . $this->width . 'x' . $this->length;
    }

    public function save()
    {
        $query = require 'bootstrap.php';

        $data = [
            'type' => get_class($this),
            'sku' => $this->sku,
            'name' => $this->name,
            'price' => $this->price,
            'attributes' => json_encode([
                'height' => $this->height,
                'width' => $this->width,
                'length' => $this->length
              ])
        ];

        $query->insert(Connection::make(), $data);
    }
}
