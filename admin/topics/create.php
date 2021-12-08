<?php include("../../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
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

    <title> Add Featured</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!--admin-content-->

<div class="admin-content">
    <div class="button-group">
<a href="create.php" class="btn btn-big">Add Topic</a>
<a href="index.php" class="btn btn-big"> Manage Topic</a>
    </div>

    <div class="content">
        <h2 class="page-title"><b> Add Topic</b></h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>     
  <form action="create.php" method="post" enctype="multipart/form-data">
      <div>
          <label> Name </label>
          <input type="text" value ="<?php echo $name ?>"name="name" class="text-input">
</div>
<div>
<labe> Image</label>
<input type="file" name="image" class="text-inpput">
</div>

<div>
          <label> Description </label>
          <textarea name="description" id="body"><?php echo $description ?></textarea>
</div>
    <div>
<button type="submit" name="add-topic" class="btn btn-big"> Add Topic </button>
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