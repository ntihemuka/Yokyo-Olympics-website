<?php include("../../path.php"); ?>
<?php 
 include(ROOT_PATH . "/app/controllers/activities.php");
  usersOnly();
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

    <title> Create Posts</title>
</head>
<body style="background-color:black">
    
   
<?php include(ROOT_PATH . "/app/includes/Header.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">



<!--admin-content-->

<div  class="auth-content">

    <div class="content">
        <h2 class="form-title"><b> <label> <b> <?php echo $title?> </b></label><br></b></h2>

 <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
  
  <form action="../../app/controllers/bookings.php" method="post" >
      <div>
          </br>


          <input type="hidden" value= "<?php echo $id?>" name="activity_id" class="text-input">
</div>
<div>
          </br>
<label> <b> Time Slot</b> </label>
          <input type="text" value= "<?php echo date ('F j, Y, G:iA', strtotime($activity['slot'])); ?>" name="slot" class="text-input">
</div>



<label> <b> Time Slot</b> </label>

<br>

<div>
          </br>
          <div>
<label>Names</labe>
<input type="text"  name="name" class="text-input">

</div>

<div>
    <button type="submit" name="book-activity" class="btn btn-big">Book </button>
</div>

</form>

    </div>

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