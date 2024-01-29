<?php
    require("./Helpers/Functions.php");

    require("./Database/Database.php");
    require("./Database/QueryBuilder.php");

    $config = require("./config.php");
    $pdo = Database::connect($config);