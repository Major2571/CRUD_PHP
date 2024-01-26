<?php
require_once('./app/controllers/UserController.php');

$controller = new UserController();

$action = (isset($_GET['a']) || isset($_POST['a'])) ? (isset($_POST['a']) ? $_POST['a'] : $_GET['a']) : 'getAll';


if ($action == "deleteUser") {
    $id = $_GET['id'];
    $controller->deleteUser($id);
} else if ($action == "insertUser") {
    $controller->insertUser($_POST);
} else if ($action == "updateUser") {
    $controller->updateUser($_POST);
} else if ($action == "editUser") {
    $userId = isset($_GET['id']) ? $_GET['id'] : null;
        if ($userId) {
            $controller->editUser($userId);
        }
} else {
    $controller->{$action}();
}