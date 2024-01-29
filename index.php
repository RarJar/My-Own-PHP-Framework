<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require("./boot.php");
    
    $query = new QueryBuilder($pdo);
    $blogs = $query->selectAll('blogs');

    print_r($blogs);
?>
</body>
</html>
