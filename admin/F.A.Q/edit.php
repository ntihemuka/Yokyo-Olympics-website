<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/frequents.php"); ?>
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

    <title> Edit Topic</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); 
adminOnly();
?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!--admin-content-->

<div class="admin-content">
    <div class="button-group">
<a href="create.php" class="btn btn-big">Add Category</a>
<a href="categories.php" class="btn btn-big"> Manage category</a>
    </div>

    <div class="content">
        <h2 class="page-title"><b>  Edit Feature</b></h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

<form action="edit.php" method="post" >

        <input type="hidden" name="id" value="<?php echo $id ?>" >
     
      <div>
          <label> Name </label>
          <input type="text" value = "<?php echo $name; ?>" name="name" class="text-input">
        </div>
        <div>

        <div>
          <label> Description </label>
          <textarea name="description" id="body"><?php echo $description; ?></textarea>
        </div>
    <div>
<button type="submit" name="update-frequent" class="btn btn-big"> Update Category </button>
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