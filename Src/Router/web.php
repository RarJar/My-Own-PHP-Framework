<?php

require("./Core/Router.php");

$route = new Router([
    "" => "./App/Controllers/HomeController.php",
    "about" => "./App/Controllers/AboutController.php"
]);

