<?php

$query = require 'bootstrap.php';

$data = [
    'type' => $_POST['type'],
    'sku' => $_POST['sku'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'size' => $_POST['size'],
    'weight' => $_POST['weight'],
    'height' => $_POST['height'],
    'width' => $_POST['width'],
    'length' => $_POST['length']
];

$add = $query->insert(Connection::make(), $data);

header('Location: views/form.view.php');
