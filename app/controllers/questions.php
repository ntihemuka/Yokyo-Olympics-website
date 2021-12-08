<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateQuestion.php");

$table = 'questions';

$frequents = selectAll('frequently_asked');
$questions = selectAll($table);

$errors = array();
$id = "";
$title ="";
$body ="";
$question_id ="";
$reply ="";



if(isset($_GET['id'])){
    $question = selectOne($table, ['id' => $_GET['id']]);

    $id = $question['id'];
    $title = $question['title'];
    $body = $question['body'];
     $frequent_id = $question['frequent_id'];
    $reply = $question['reply'];
   
}


if(isset($_GET['delete_id'])){
    adminOnly();
  $count = delete($table, $_GET['delete_id']);
  $_SESSION['message'] = "question deleted";
  $_SESSION['type'] = "success";
  header("location: " . BASE_URL . "/admin/F.A.Q/index.php");
  exit();
}


if (isset($_POST['add-question'])) {
  
   $errors = validateQuestion($_POST);


    if (count($errors) == 0){
    unset($_POST['add-question']);
    $_POST['user_id'] = $_SESSION['id'];   
$_POST['body'] = htmlentities($_POST['body']);

    $question_id  = create($table, $_POST);
    $_SESSION['message'] = "question sent";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/index.php");
    } else {
        $title = $_POST ['title'];
        $body = $_POST ['body'];
        $frequent_id = $_POST['frequent_id'];
    }
   
}

if (isset($_POST['reply-question'])){
    $errors = validateQuestion($_POST);

if (count($errors) == 0){
    $id = $_POST['id'];
    unset($_POST['reply-question'], $_POST['id']);
  

$_POST['reply'] = htmlentities($_POST['reply']);

    $frequent_id  = update($table, $id, $_POST);
    $_SESSION['message'] = "question replied";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/F.A.Q/index.php");
    exit();

    } else {
        $title = $_POST ['title'];
        $body = $_POST ['body'];
        $reply = $_POST ['reply'];
        $frequent_id = $_POST['frequent_id'];

    } 
}