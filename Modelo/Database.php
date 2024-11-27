<?php
class Database {
    private $host = "mysql-rhf.alwaysdata.net";
    private $db_name = "rhf_rest_api_demo"; // Nombre de la BD sql. Modificar si hace falta
    private $username = "rhf"; // Usuario de la base de datos (modificar si hace falta)
    private $password = "Empedrado1"; // Contraseña de la base de datos (modificar si hace falta)
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
