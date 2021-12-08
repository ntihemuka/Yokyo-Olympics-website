<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateActivity.php");

$table = 'activities';



$topics = selectAll('topics');

$activities = selectAll($table);


$errors = array();
$id = "";
$title ="";
$body ="";
$slot="";
$topic_id ="";
$published = "";





if(isset($_GET['id'])){
    $activity = selectOne($table, ['id' => $_GET['id']]);

    $id = $activity['id'];
    $title = $activity['title'];
    $body = $activity['body'];
    $slot = $activity['slot'];
    $topic_id = $activity['topic_id'];
    $published = $activity['published'];
 
}


if(isset($_GET['delete_id'])){
    adminOnly();
  $count = delete($table, $_GET['delete_id']);
  $_SESSION['message'] = "Activity deleted";
  $_SESSION['type'] = "success";
  header("location: " . BASE_URL . "/admin/activities/index.php");
  exit();
}

 if(isset($_GET['published']) && isset($_GET['p_id'])){
    adminOnly();
     $published = $_GET['published'];
     $p_id = $_GET['p_id'];
     $count = update($table, $p_id, ['published' => $published]);
     $_SESSION['message'] = "Actvity  status changed";
     $_SESSION['type'] = "success";
     header("location: " . BASE_URL . "/admin/activities/index.php");
     exit();
 }

if (isset($_POST['add-activity'])) {
    adminOnly();
   $errors = validateActivity($_POST);

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

    if (count($errors) == 0){
    unset($_POST['add-activity']);
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;
    $_POST['body'] = htmlentities($_POST['body']);


    $activity_id  = create($table, $_POST);
    $_SESSION['message'] = "Activity created";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/activities/index.php");
    } else {
        $title = $_POST ['title'];
        $body = $_POST ['body'];
        $slot = $_POST ['slot'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
   
}


if (isset($_POST['update-activity'])){
    adminOnly();
    $errors = validateActivity($_POST);

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

if (count($errors) == 0){
    $id = $_POST['id'];
    unset($_POST['update-activity'], $_POST['id']);
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;
$_POST['body'] = htmlentities($_POST['body']);


    $post_id  = update($table, $id, $_POST);
    $_SESSION['message'] = "update succesful";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/activities/index.php");
    exit();

    } else {
        $title = $_POST ['title'];
        $body = $_POST ['body'];
        $slot = $_POST ['slot'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    } 
}