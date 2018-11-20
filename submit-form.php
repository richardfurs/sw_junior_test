<?php

  $query = require 'bootstrap.php';
  include_once 'Products/Disc.php';
  include_once 'Products/Book.php';
  include_once 'Products/Furniture.php';

  $type = $_POST['type'];

  $obj = new $type;
  $obj->sku = $_POST['sku'];
  $obj->name = $_POST['name'];
  $obj->price = $_POST['price'];

  switch ($type) {
    case 'Book':
      $obj->weight = $_POST['weight'];
      break;
    case 'Furniture':
      $obj->length = $_POST['length'];
      $obj->height = $_POST['height'];
      $obj->width = $_POST['width'];
      break;
    case 'Disc':
      $obj->size = $_POST['size'];
      break;
    default:

      break;
  }
  $obj->save();



header('Location: views/form.view.php');
