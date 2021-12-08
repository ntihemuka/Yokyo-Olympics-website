<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/frequents.php");
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

    <title> Add Feature</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!--admin-content-->

<div class="admin-content">
    <div class="button-group">
<a href="create.php" class="btn btn-big">Add Category</a>
<a href="index.php" class="btn btn-big"> Back to questions</a>
    </div>

    <div class="content">
        <h2 class="page-title"><b> Manage Categories</b></h2>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
        
        <table>
            <th>N</th>
            <th>Name</th>
            <th colspan="2">Action </th>
            </head>
            <tbody>
<?php foreach ($frequents as $key => $frequent): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td> <?php echo $frequent['name']; ?></td>
                    <td><a href="edit.php?id=<?php echo $frequent['id'];?>" class="edit">edit</a></td>
                    <td><a href="categories.php?del_id=<?php echo $frequent['id']; ?>" class="delete">delete</a></td>
                   
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
<!--ck editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<!--custom script-->
<script src="../../assets//js/scripts.js"></script> 
</html>