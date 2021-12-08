<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/transactions.php"); 
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts-->

    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&display=swap" rel="stylesheet">
    <!-- font awesome -->

    <script src="https://use.fontawesome.com/add7bf4df2.js"></script>

    <!-- custom styling-->
<link rel="stylesheet" href="../../assets/css/style.css">

   <!-- admin styling-->
   <link rel="stylesheet" href="../../assets/css/admin.css">

    <title> view bookings</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!--admin-content-->

<div class="admin-content">
    <div class="button-group">
<a href="<?php echo BASE_URL . '/admin/activities/create.php'?>" class="btn btn-big">Create Bookings</a>
<a href="<?php echo BASE_URL . '/admin/activities/index.php'?>"class="btn btn-big" > View Activities</a>

    </div>

    <div class="content">
        <h2 class="page-title"><b> My Bookings</b></h2>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>        <table>
            <th>N</th>
            <th>Name</th>
            <th>Trans Nbr</th>
            <th>Act Nbr</th>
            </head>
            <tbody>
<?php foreach ($transactions as $key => $transaction): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td> <?php echo $transaction['name']?></td>
                    <td> <?php echo $transaction['id']?></td>
                    <td> <?php echo $transaction['activity_id']?></td>
                </tr>
<?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>
<!--//admincontent-->

</div>
    <!--//admin page wrapper-->

 
   <!--  jquery --> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    

<script src="../../assets//js/scripts.js"></script> 
</html>