<?php include("path.php");
include(ROOT_PATH . "/app/controllers/frequents.php");

$questions = array();
$questionsTitle = 'F.A.Q';

if(isset($_GET['t_id'])){
    $questions = getQuestionsByFrequentId($_GET['t_id']);
    $questionsTitle = "you searched for '" . $_GET['name'] . "'";
} else if(isset($_POST['search-term'])){
     $questionsTitle = "Displaying results for '" . $_POST['search-term'] . "'";
    $questions = searchQuestions($_POST['search-term']);
 } else {
 $questions = getPublishedQuestions();    
 }


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

    <title>Fun Olympics</title>
</head>
<body>
    
<?php include(ROOT_PATH ."/app/includes/header.php");?>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


<!-- start of page Wrapper-->
    <div class="page-wrapper">



        

<!--content-->
<div class="content clearfix">

    <!-- main content-->
<div class="main-content">

    <h1 class="recent-post-title"> <?php echo $questionsTitle ;?></h1>

    <?php foreach ($questions as $question): ?>
        <div class="post clearfix">
            <div class="post-preview">
            <h2> <?php echo $question['title']; ?></h2>
            <i class=" fa fa-user"> <?php echo $question['username']; ?></i>
            &nbsp;
            <i class="fa fa-calendar"> <?php echo date('F j, Y', strtotime($question['created_at'])); ?></i>
            <p class="preview-text">
            <label> <b> Question </b> </label> <br>
          <?php echo html_entity_decode($question['body']); ?>
             </p>
            <p class="preview-text">
            <label> <b> Answer </b> </label> <br><br>
          <?php echo html_entity_decode($question['reply']); ?>
             </p>
            <a href="<?php echo BASE_URL . '/asked.php'?>" class="btn read-more"> back to F.A.Q</a>
        </div>
    </div>
    <?php endforeach; ?>
                                        
</div>

<!--main //content-->

</div>

<!--//content-->
</div>
    
    <!--end of page wrapper-->


   <!--  jquery --> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
<!-- slick code-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <!--custom script -->

<script src="assets/js/scripts.js"></script> 
</body>
</html>