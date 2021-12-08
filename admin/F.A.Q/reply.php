<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/questions.php");
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

    <title> Edit Posts</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!--admin-content-->

<div class="admin-content">
    <div class="button-group">

<a href="index.php" class="btn btn-big"> Back to Questions</a>
    </div>


<div> 


</div>

    <div class="content">
        <h2 class="page-title"><b> Reply to Questions</b></h2>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
 <div>
          <label> <b>Subject </b> </label>
          <p class="preview-text">
          <?php echo html_entity_decode($title); ?>
             </p>
</div>
<div>
          <label><b> Question </b></label>
        
          <p class="preview-text">
          <?php echo html_entity_decode($body); ?>
             </p>
 </div>            
 
  <form action="reply.php" method="post">

     <input type="hidden" value= "<?php echo $id?>" name="id" >
    <input type="hidden" value= "<?php echo $title?>" name="title">
    <input type="hidden" name="body"  value="<?php echo $body?>"> 


    <div>
        <label> Answer </label>
        <textarea name="reply" id="reply" class="text-input" ></textarea>
    </div>


<div>

<label> F.A.Q Category </label>

<select name="frequent_id" class="text-input">

<option value=""></option>

<?php foreach ($frequents as $key => $frequent): ?> 
 
<?php if (!empty($frequent_id) && $frequent_id == $frequent['id'] ): ?>
    <option selected value="<?php echo $frequent['id'] ?>"> <?php echo $frequent['name'] ?></option>

<?php else: ?>
    <option value="<?php echo $frequent['id'] ?>"><?php echo $frequent['name'] ?></option>
<?php endif; ?>

  
 <?php endforeach; ?>

</select>
<br>

<div>
    <button type="submit" name="reply-question" class="btn btn-big">Reply </button>
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