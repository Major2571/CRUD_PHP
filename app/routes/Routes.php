<?php

require_once('./app/controllers/UserController.php');

$controller = new UserController();

$action = $_GET['a'] ?? $_POST['a'] ?? 'getAll';

try {
    switch ($action) {

        case 'insertUser':
            $controller->insertUser($_POST);
            break;

        case 'updateUser':
            $controller->updateUser($_POST);
            break;

        case 'editUser':
            $userId = $_GET['id'] ?? null;
            if ($userId !== null) {
                $controller->editUser($userId);
            } else {
                throw new Exception('O usuário não existe!');
            }
            break;

        case 'deleteUser':
            $id = $_GET['id'] ?? null;
            if ($id !== null) {
                $controller->deleteUser($id);
            } else {
                throw new Exception('O usuário não existe!');
            }
            break;

        default:
            $controller->{$action}();
            break;
    }
} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}
