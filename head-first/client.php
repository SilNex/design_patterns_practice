<?php

use HeadFirst\PizzaStore;

require('PizzaStore.php');
require('Pizza.php');

$client = new PizzaStore();
$client->orderPizza('cheese');