<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateVideos.php");

$table = 'videos';

$topics = selectAll('topics');
$videos = selectAll($table);

$errors = array();
$id = "";
$title ="";
$body ="";
$topic_id ="";
$published = "";

if(isset($_GET['id'])){
    $video = selectOne($table, ['id' => $_GET['id']]);

    $id = $video['id'];
    $title = $video['title'];
    $body = $video['body'];
    $topic_id = $video['topic_id'];
    $published = $video['published'];
}


if(isset($_GET['delete_id'])){
    adminOnly();
  $count = delete($table, $_GET['delete_id']);
  $_SESSION['message'] = "video deleted";
  $_SESSION['type'] = "success";
  header("location: " . BASE_URL . "/admin/videos/index.php");
  exit();
}

 if(isset($_GET['published']) && isset($_GET['p_id'])){
    adminOnly();
     $published = $_GET['published'];
     $p_id = $_GET['p_id'];
     $count = update($table, $p_id, ['published' => $published]);
     $_SESSION['message'] = "Video status changed";
     $_SESSION['type'] = "success";
     header("location: " . BASE_URL . "/admin/videos/index.php");
     exit();
 }

if (isset($_POST['submit'])) {
    adminOnly();
   $errors = validateVideo($_POST);

if (!empty($_FILES['file'] ['name'])){
    $video_name = time() . '_' .$_FILES['file']['name'];
    $destination = ROOT_PATH . "/assets/videos/" . $video_name;

    $result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

    if($result){
        $_POST['file'] = $video_name;
    }else {
        array_push($errors, "upload Failed");
    }
}else {
    array_push($errors, "video required");
}

    if (count($errors) == 0){
    unset($_POST['submit']);
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;
$_POST['body'] = htmlentities($_POST['body']);


    $video_id  = create($table, $_POST);
    $_SESSION['message'] = "video created";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/videos/index.php");
    } else {
        $title = $_POST ['title'];
        $body = $_POST ['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
   
}

if (isset($_POST['update-video'])){
    adminOnly();
    $errors = validateVideo($_POST);

if (!empty($_FILES['file'] ['name'])){
    $video_name = time() . '_' .$_FILES['file']['name'];
    $destination = ROOT_PATH . "/assets/videos/" . $video_name;

    $result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

    if($result){
        $_POST['file'] = $video_name;
    }else {
        array_push($errors, "upload Failed");
    }
}else {
    array_push($errors, "video required");
}

if (count($errors) == 0){
    $id = $_POST['id'];
    unset($_POST['update-video'], $_POST['id']);
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;
$_POST['body'] = htmlentities($_POST['body']);


    $post_id  = update($table, $id, $_POST);
    $_SESSION['message'] = "update succesful";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/videos/index.php");
    exit();

    } else {
        $title = $_POST ['title'];
        $body = $_POST ['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    } 
}