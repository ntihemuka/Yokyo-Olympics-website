<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateFrequent.php");
$table = 'frequently_asked';

$frequents = selectAll($table);


$errors = array();
$id = '';
$name = '';
$description = '';

if (isset($_POST['add-frequent'])) {
    adminOnly();
    $errors = validateFrequent($_POST);

    if (count($errors) === 0) {      
        unset($_POST['add-frequent']);
        $frequent_id = create($table , $_POST);
        $_SESSION['message'] = 'F.A.Q created succesfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/F.A.Q/categories.php');
        exit();
    } else {
$name = $_POST['name'];
$description = $_POST ['description'];

    }

}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $frequent = selectOne($table, ['id' => $id]);
    $id = $frequent['id'];
    $name = $frequent['name'];
    $description = $frequent['description'];
}

if(isset($_GET['del_id'])){
    adminOnly();
$id = $_GET['del_id'];
$count = delete($table, $id);
$_SESSION['message'] = 'deletion succesful';
$_SESSION['type'] = 'success';
header('location: ' . BASE_URL . '/admin/F.A.Q/index.php');
exit();
}

if(isset($_POST['update-frequent'])){
    adminOnly();
    $errors = validateFrequent($_POST);
  

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-frequent'], $_POST['id']);
        $frequent_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'update succesful';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/F.A.Q/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST ['description'];
    }
 
}