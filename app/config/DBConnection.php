<?php


class Connection {
    protected $connection;
    private $servername = "localhost";
    private $database = "dbCRUD-PHP";
    private $username = "root";
    private $password = "";

    function connectDataBase()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
        } catch (PDOException $e) {
            throw new Exception("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }

    function __construct()
    {
        $this->connectDataBase();
    }
}
