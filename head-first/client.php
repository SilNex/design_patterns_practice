<?php

use HeadFirst\NYPizzaStore;

require('PizzaStore.php');
require('Pizza.php');

$client = new NYPizzaStore();
$client->orderPizza('cheese');