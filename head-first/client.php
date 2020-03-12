<?php

use HeadFirst\NYPizzaStore;

require('./Cheese.php');
require('./Clam.php');
require('./Dough.php');
require('./Ham.php');
require('./PizzaStore.php');
require('./Pizza.php');
require('./PizzaIngredients.php');
require('./Sauce.php');
require('./Vegetable.php');

$client = new NYPizzaStore();
$client->orderPizza('cheese');