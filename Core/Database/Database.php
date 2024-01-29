<?php 
class Database{
    public static function connect($config){
        try {
            // Create a new PDO instance
            $pdo = new PDO(
                "mysql:host={$config['database']['host']};
                dbname={$config['database']['dbname']}",
                $config['database']['username'], 
                $config['database']['password']);
                
            // Set PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>