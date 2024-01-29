<?php

    require("./Core/Boot.php");
    
    $query = new QueryBuilder($pdo);
    $blogs = $query->selectAll('blogs');
        
    // trim($_SERVER['REQUEST_URI'],'/')
    $route->direct('');