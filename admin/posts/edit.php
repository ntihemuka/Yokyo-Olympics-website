<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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
<a href="create.php" class="btn btn-big">Edit Post</a>
<a href="index.php" class="btn btn-big"> Manage Posts</a>
    </div>

    <div class="content">
        <h2 class="page-title"><b> Edit Posts</b></h2>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

  <form action="edit.php" method="post" enctype="multipart/form-data">
     <input type="hidden" value= "<?php echo $id?>" name="id" >
  <div>
          <label> Title </label>
          <input type="text" value= "<?php echo $title?>" name="title" class="text-input">
</div>
<div>
          <label> Body </label>
          <textarea name="body" id="body"><?php echo $body ?></textarea>
</div>
<div>
<labe> Image</label>
<input type="file" name="image" class="text-inpput">
</div>

<label> Featured at Yokyo </label>

<select name="topic_id" class="text-input">

<option value=""></option>

<?php foreach ($topics as $key => $topic): ?> 
 
<?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
    <option selected value="<?php echo $topic['id'] ?>"> <?php echo $topic['name'] ?></option>

<?php else: ?>
    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
<?php endif; ?>

  
 <?php endforeach; ?>

</select>
<br>
<div>
<?php if (empty($published) && $published == 0): ?>
    <label>
    <input type="checkbox" name="published">
    Publish
     </label>
<?php else: ?>
    <label>
    <input type="checkbox" name="published" checked>
    Publish
    </label>
<?php endif; ?>

</div>
<div>
    <button type="submit" name="update-post" class="btn btn-big">Update Post </button>
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