<?php

$query = require 'bootstrap.php';

$list = $query->selectAll('mainform');

require 'views/index.view.php';
