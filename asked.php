<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/questions.php"); 
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
<link rel="stylesheet" href="assets/css/style.css">

   <!-- admin styling-->
  

    <title> Ask a Question</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

    <div class="content clearfix">

<!--admin-content-->
<div class="main-content">
<div class="admin-content">
    <div class="button-group">
<br><br><br><br>

    </div>

    <div >
        <h2 class="page-title"><b> Ask your question</b></h2>

 <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
 
 <form action="asked.php" method="post">


      <div>
          <label> Subject </label>
          <input type="text" value= "<?php echo $title?>" name="title" class="text-input">
</div>


<div>
<label> Question </label>
<textarea name="body" class="text-input contact-input"><?php echo $body ?></textarea>
</div>


<label> Category </label>

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

<div>
    <button type="submit" name="add-question" class=" btn-big" >  Ask </button>
</div>

</form>

    </div>
    </div>
</div>
<!--//admincontent-->


<div class="content clearfix">
</div>
</div>
<div class="sidebar">
    <div class="section search">
        <h2 class="section-title">Search</h2>
        <form action="search.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search ">
        </form>
    </div>

    <div class="section topics">
        <h2 class="section-title"> Frequently Asked Questions  </h2>
        <ul>
<?php foreach ($frequents as $key => $frequent): ?>

    <li><a href="<?php echo BASE_URL . '/search.php?t_id=' . $frequent['id'] . '&name=' . $frequent['name'] ?>"><?php echo $frequent['name']; ?></a></li>

<?php endforeach; ?>

        </ul>
    </div>
    
</div>
</div>
    <!--//admin page wrapper-->

 
<!--  jquery --> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--ck editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<!--custom script-->
<script src="/assets//js/scripts.js"></script> 
</html>