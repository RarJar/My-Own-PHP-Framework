<?php

    require("./Core/Helpers/Functions.php");
    require("./Core/Database/Database.php");
    require("./Core/Database/QueryBuilder.php");
    require("./Core/Router.php");

    $config = require("./config.php");
    $pdo = Database::connect($config);