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

    <title> Manage F.A.Q</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!--admin-content-->

<div class="admin-content">

<a href="categories.php" class="btn btn-big">Manage F.A.Q categories</a>
    

    <div class="content">
        <h2 class="page-title"><b> Questions</b></h2>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>      
          <table>
            <th>N</th>
            <th>Title</th>
          
            <th colspan="3">Action </th>
            </head>
            <tbody>
<?php foreach ($questions as $key => $question): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td> <?php echo $question['title']?></td>
                
                    <td><a href="reply.php?id=<?php echo $question['id']; ?>" class="edit">Reply to Question</a></td>
                    <td><a href="reply.php?delete_id=<?php echo $question['id']; ?>" class="delete">delete</a></td>

                   
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