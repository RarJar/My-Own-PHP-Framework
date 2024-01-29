<?php 
class Database{
    public static function connect(){
        // Database connection settings
        $host = 'localhost';
        $dbname = 'cc_blog';
        $username = 'root';
        $password = '';

        try {
            // Create a new PDO instance
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            // Set PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>