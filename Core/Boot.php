<?php

    require("./Core/Http/Request.php");
    require("./Core/Helpers/Functions.php");
    require("./Core/Database/Database.php");
    require("./Core/Database/QueryBuilder.php");
    require("./Src/Router/web.php");

    $config = require("./config.php");
    $pdo = Database::connect($config);