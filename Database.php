<?php
class Database
{
    private static ?Database $instance = null;
    private ?PDO $connection = null;

    //Database details
    private string $host = 'localhost';
    private string $dbname = "laravel_tdd";
    private string $username = "root";
    private string $password = "";

    private function __construct()
    {
        try {
            $dsn = "mysql:host = {$this->host}; dbname = $this->dbname}";

            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database connection established.\n";
        } catch (PDOException $e) {
            die("Could not connections to database: " . $e->getMessage());
        }
    }

    private function __clone() {}
    public function __wakeup() {
        throw new Exception("Cannot unserialize a Singleton.");
    }
// Global access point only one instance
    public static function crateInstance()
    {
        // Check if the instance is already
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
$db1 = Database::crateInstance()->getConnection();

$db2 = Database::crateInstance()->getConnection();

if ($db1 === $db2) {
    echo "Both database connections are the same.\n";
}
