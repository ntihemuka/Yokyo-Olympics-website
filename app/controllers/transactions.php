<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateTransactions.php");

$table = 'transactions';

$topics = selectAll('activities');

$transactions = selectAll($table);


$errors = array();
$id = "";
$title ="";
$body ="";
$slot="";
$activity_id ="";
$name ="";

$published = "";




if(isset($_GET['id'])){
    $activity = selectOne($table, ['id' => $_GET['id']]);

    $id = $transaction['id'];
    $title = $transaction['title'];
    $body = $transaction['body'];
    $slot = $transaction['slot'];
    $activity_id = $transaction['activity_id'];
    $published = $transaction['published'];
    $name = $transaction['name'];
}



if (isset($_POST['book-activity'])) {
    usersOnly();
   $errors = validateTransactions($_POST);

    if (count($errors) == 0){
    unset($_POST['book-activity']);
    $_POST['user_id'] = $_SESSION['id'];
  
    $transaction_id  = create($table, $_POST);
    $_SESSION['message'] = "Activity booked";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/bookings.php");
    } else {
        $title = $_POST ['title'];
        $body = $_POST ['body'];
        $slot = $_POST ['slot'];
        $activity_id = $_POST['activity_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
   
}

