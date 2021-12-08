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

    <title> Manage Posts</title>
</head>
<body>
    
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- admin page Wrapper-->

    <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!--admin-content-->

<div class="admin-content">
    <div class="button-group">
<a href="create.php" class="btn btn-big">Add Post</a>
<a href="index.php" class="btn btn-big"> Manage Posts</a>
    </div>

    <div class="content">
        <h2 class="page-title"><b> Manage Posts</b></h2>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>        <table>
            <th>N</th>
            <th>Title</th>
            <th> Author</th>
            <th colspan="3">Action </th>
            </head>
            <tbody>
<?php foreach ($posts as $key => $post): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td> <?php echo $post['title']?></td>
                    <td> <?php echo "Joel"?></td>
                    <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                    <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>

                    <?php if ($post['published']): ?>
                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id']?>" class="unpublish">unpublish</a></td>
                    <?php else: ?>
                        <td><a href="edit.php?published=1&p_id=<?php echo $post['id']?>" class="publish">publish</a></td>
                    <?php endif; ?>
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