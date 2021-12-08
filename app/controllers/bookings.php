<?php
include("../../path.php"); 
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
$published = "";
$name = "";


if(isset($_GET['id'])){
    $transaction = selectOne($table, ['id' => $_GET['id']]);

    $id = $transaction['id'];
    $slot = $transaction['slot'];
    $activity_id = $transaction['activity_id'];
    $name = $transaction['name'];
}

if (isset($_POST['book-activity'])) {
    usersOnly();
   $errors = validateTransactions($_POST);

   if (count($errors) == 0){
    unset($_POST['book-activity']);
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['activity_id'] = $_POST['activity_id'];
    $_POST['slot'] = $_POST['slot'];
    $_POST['name'] = $_POST['name'];
    $transaction_id  = create($table, $_POST);
    $_SESSION['message'] = "Activity booked please show Up with ID";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/index.php");
    exit();
    } else {
        $_SESSION['message'] = "Booking Failed Name required";
        $_SESSION['type'] = "error";
        header('location: ' . BASE_URL . '/admin/booking/Bookings.php');
        
        $id = $_POST['id'];
        $activity_id = $_POST['activity_id'];
        $slot = $_POST['slot']; 
        $name = $_POST['name'];
    }
   
}
