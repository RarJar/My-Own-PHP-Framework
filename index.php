<?php

    require("./Core/Boot.php");
    
    // $query = new QueryBuilder($pdo);
    // $blogs = $query->selectAll('blogs');

    $route->direct(Request::URI());