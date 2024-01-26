<?php

require_once('./app/models/User.php');

class UserController
{
    private $userModel;

    function __construct()
    {
        $this->userModel = new UserModel();
    }

    function getAll()
    {
        $result = $this->userModel->getAll();
        require_once('./public/views/index.php');
    }

    function insertUser($data)
    {
        $this->userModel->insertUser($data);
        header("Location: index.php");
    }

    function editUser($userId)
    {
        $user = $this->userModel->getUserId($userId);
        require_once('./public/views/formCreateEdit.php');
    }

    function updateUser($data)
    {
        $this->userModel->updateUser($data);
        header("Location: index.php");
    }
    public function deleteUser($id)
    {
        $result = $this->userModel->deleteUser($id);
        header("Location: index.php");
    }

    public function goToNew()
    {
        require_once "./public/views/formCreateEdit.php";
    }


}
