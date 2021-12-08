<?php include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

 

$videos = array();
$videoTitle = 'Trending At Yokyo';

if(isset($_GET['t_id'])){
    $videos = getVideosByTopicId($_GET['t_id']);
    $videosTitle = "you searched for video under '" . $_GET['name'] . "'";
} else if(isset($_POST['search-term'])){
     $videoTitle = "Displaying results for '" . $_POST['search-term'] . "'";
    $videos = searchVideoss($_POST['search-term']);
 } else {
 $videos = getPublishedVideos();    
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

    <h1 class="recent-post-title"> <?php echo $videoTitle ;?></h1>

    <?php foreach ($videos as $video): ?>
        <div class="post clearfix">
          

            <video width="320" height="240" controls>
  <source src="<?php echo BASE_URL . '/assets/videos/' . $video['file']; ?>" type="video/mp4">

</video>

            <div class="post-preview">
            <h2>  <?php echo $video['title']; ?></a></h2>
            <i class=" fa fa-user"> <?php echo $video['username']; ?></i>
            &nbsp;
            <i class="fa fa-calendar"> <?php echo date('F j, Y', strtotime($video['created_at'])); ?></i>
            <p class="preview-text">
          <?php echo html_entity_decode(substr($video['body'], 0, 200) .'...'); ?>
             </p>
         
        </div>
    </div>
    <?php endforeach; ?>
                                        
</div>

<!--main //content-->

<div class="sidebar">
    <div class="section search">
        <h2 class="section-title">Search</h2>
        <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search for Updates">
        </form>
    </div>

    <div class="section topics">
        <h2 class="section-title"> Featured at Yokyo </h2>
        <ul>
<?php foreach ($topics as $key => $topic): ?>

    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>

<?php endforeach; ?>

        </ul>
    </div>
    
</div>
</div>

<!--//content-->
</div>
    
    <!--end of page wrapper-->
    
    <?php include(ROOT_PATH ."/app/includes/footer.php");?>

   <!--  jquery --> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
<!-- slick code-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <!--custom script -->

<script src="assets/js/scripts.js"></script> 
</body>
</html>