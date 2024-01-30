<?php

require("./Core/Router.php");

$route = new Router([
    "" => "./Src/Views/home.view.php",
    "about" => "./Src/Views/about.view.php"
]);

