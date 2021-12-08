<?php include("../../path.php"); ?>  
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
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

    <title> Update User</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!--admin-content-->

<div class="admin-content">
    <div class="button-group">
<a href="create.php" class="btn btn-big">Add user</a>
<a href="index.php" class="btn btn-big"> Manage Users</a>
    </div>

    <div class="content">
        <h2 class="page-title"><b> Edit User</b></h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

  <form action="edit.php" method="post">

 <input type="hidden" name="id" value="<?php echo $id; ?>" >

  <div>
<label>Username</labe>
<input type="text" name="username"  value="<?php echo $username; ?>" class="text-input">
</div>

<div>
<label>E-mail</labe>
<input type="email" value="<?php echo $email; ?>" name="email" class="text-input">
</div>

<div>
<label>password</labe>
<input type="password" value="<?php echo $password; ?>" name="password" class="text-input">
</div>

<div>
<label>Confirm Password</labe>
<input type="password" value="<?php echo $password; ?>" name="passwordconf" class="text-input">
</div>

<?php if (isset($admin) && $admin == 1): ?>
    <label> 
        <input type ="checkbox" name="admin" checked>
        Admin 
    </label>
<?php else: ?>
    <label> 
        <input type ="checkbox" name="admin" >
        Admin 
    </label>
<?php endif; ?>

    <div>
<button type="submit" name="update-user" class="btn btn-big"> Update User </button>
  </div>
</form>

  

</div>
<!--//admincontent-->

</div>
    <!--//admin page wrapper-->

 
<!--  jquery --> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--ck editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<!--custom script-->
<script src="../../assets//js/scripts.js"></script> 
</html>