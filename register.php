<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
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
<link rel="stylesheet" href="assets/css//style.css">

    <title>Register</title>
</head>
<body>

<?php include(ROOT_PATH ."/app/includes/header.php");?>

<div class="auth-content"> 

<form action="register.php" method="post">
<h2 class="form-title"> Register</h2>

<?php include(ROOT_PATH ."/app/helpers/formErrors.php");?>

<div>
<div>
<label>Username</label>
<input type="text" name="username" value="<?php echo $username;?>" class="text-input">
</div>

<div>
<label>E-mail</labe>
<input type="email" name="email" value="<?php echo $email;?>" class="text-input">
</div>

<div>
<label>password</labe>
<input type="password" name="password" value="<?php echo $password;?>" class="text-input">
</div>

<div>
<label>Confirm Password</labe>
<input type="password" name="passwordconf" value="<?php echo $passwordconf;?>"  class="text-input">
</div>

<div>
    <button type="submit" name="register-btn" class="btn btn-big"> Sign Up</button>
</div>
 <p> User <a href="<?php echo BASE_URL . '/login.php'?>"> Log in</a></p>
</form>

</div>

<!--  jquery --> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
 <!--custom script -->

<script src="assets/js/scripts.js"></script> 
</body>
</html>