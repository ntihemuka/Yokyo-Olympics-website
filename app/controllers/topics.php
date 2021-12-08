<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");
$table = 'topics';
$errors = array();
$id = '';
$name = '';
$description = '';

$topics = selectAll($table);


if (isset($_POST['add-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);
     

    if (!empty($_FILES['image'] ['name'])){
        $image_name = time() . '_' .$_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;
    
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    
        if($result){
            $_POST['image'] = $image_name;
        }else {
            array_push($errors, "upload Failed");
        }
    }else {
        array_push($errors, "image required");
    }
    

    if (count($errors) === 0) {      
        unset($_POST['add-topic']);
        $topic_id = create($table , $_POST);
        $_SESSION['message'] = 'topic created succesfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
    } else {
$name = $_POST['name'];
$description = $_POST ['description'];

    }

}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if(isset($_GET['del_id'])){
    adminOnly();
$id = $_GET['del_id'];
$count = delete($table, $id);
$_SESSION['message'] = 'deletion succesful';
$_SESSION['type'] = 'success';
header('location: ' . BASE_URL . '/admin/topics/index.php');
exit();
}

if(isset($_POST['update-topic'])){
    adminOnly();
    $errors = validateTopic($_POST);
     
    if (!empty($_FILES['image'] ['name'])){
        $image_name = time() . '_' .$_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;
    
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    
        if($result){
            $_POST['image'] = $image_name;
        }else {
            array_push($errors, "upload Failed");
        }
    }else {
        array_push($errors, "image required");
    }
    

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'update succesful';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST ['description'];
    }
 
}