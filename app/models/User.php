<?php
require_once('./app/config/DBConnection.php');
class UserModel extends Connection
{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'tbUsers';
    }

    public function getAll()
    {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }

    public function getUserId($userId)
    {
        $sqlSelect = "SELECT * FROM $this->table WHERE id = :id";
        $resultQuery = $this->connection->prepare($sqlSelect);
        $resultQuery->execute([':id'=> $userId]);
        $user = $resultQuery->fetch();
        return $user;
    }

    public function insertUser($data)
    {
        $sqlInsert = "INSERT INTO $this->table(email, firstName, lastName, phone, birth_date) VALUES (:email, :firstName, :lastName, :phone, :birth_date)";
        $resultQuery = $this->connection->prepare($sqlInsert);
        $resultQuery->execute([
            ':email' => $data['email'],
            ':firstName' => $data['firstName'],
            ':lastName' => $data['lastName'],
            ':phone' => $data['phone'],
            ':birth_date' => $data['birth_date']
        ]);
        return $resultQuery;
    }


    public function updateUser($data)
    {
        $sqlUpdate = "UPDATE $this->table SET email = :email, firstName = :firstName, lastName = :lastName, phone = :phone, birth_date = :birth_date WHERE id = :id ";
        $resultQuery = $this->connection->prepare($sqlUpdate);
        $resultQuery->execute([
            ':id' => $data['id'],
            ':email' => $data['email'],
            ':firstName' => $data['firstName'],
            ':lastName' => $data['lastName'],
            ':phone' => $data['phone'],
            ':birth_date' => $data['birth_date']
        ]);
        return $resultQuery;

    }

    public function deleteUser($id)
    {
        $sqlDelete = "DELETE FROM $this->table WHERE id = :id";
        $resultQuery = $this->connection->prepare($sqlDelete)->execute(['id' => $id]);
        return $resultQuery;
    }


    public function verifyReturn($result){
        if($result == 1)
        {
            return true;
        }
        return false;
    }



}
