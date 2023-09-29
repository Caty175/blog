<?php
require_once '../../blog/include/config.php';
class Database {
    private $connection;

    public function __construct() {
        $host = Config::getHost();
        $dbname = Config::getDBName();
        $username = Config::getUser();
        $password = Config::getPassword();

        $dsn = "mysql:host=$host;dbname=$dbname";

        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function insert($table, $data) {
        try {

            if ($table === 'users' && isset($data['email'])) {
                $email = $data['email'];
                $existingUsers = $this->getSelectAll();

                foreach ($existingUsers as $user) {
                    if ($user['email'] === $email) {

                        return false;
                    }
                }
            }

            ksort($data);

            $fieldNames = implode('`, `', array_keys($data));
            $fieldValues = implode("', '", array_values($data));

            $sql = "INSERT INTO $table (`$fieldNames`) VALUES ('$fieldValues')";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
           
            error_log('Database Error: ' . $e->getMessage());

            return false;
        }
    }

    public function getSelectAll() {
        try {
            $sql = "SELECT * FROM users";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
    
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            // Log the error message
            error_log('Database Error: ' . $e->getMessage());
    
            return [];
        }
    }
    
}
