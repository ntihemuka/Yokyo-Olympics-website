<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

;

 
 $activities = array();
$activityTitle = 'Activities At Yokyo';

if(isset($_GET['t_id'])){
    $activities = getActivitiesByTopicId($_GET['t_id']);
    $activityTitle = "your results '" . $_GET['name'] . "'";
} else if(isset($_POST['search-term'])){
     $activityTitle = "Displaying results for '" . $_POST['search-term'] . "'";
    $activities = searchActivities($_POST['search-term']);
 } else {
 $activities = getPublishedActivities();    
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
<link rel="stylesheet" href="../../assets/css//style.css">

    <title>Bookings</title>
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

    <h1 class="recent-post-title"> <?php echo $activityTitle ;?></h1>

    <?php foreach ($activities as $activity): ?>
        <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $activity['image']; ?>" alt="" class="post-image">
            <div class="post-preview">
            <h2> <a href="receivesBookings.php?id=<?php echo $activity['id']; ?>"> <?php echo $activity['title']; ?></a></h2>
            <i class=" fa fa-user"> <?php echo $activity['username']; ?></i>
            &nbsp;
            <i class="fa fa-calendar"> <?php echo date('F j, Y', strtotime($activity['slot'])); ?></i>
            <p class="preview-text">
          <?php echo html_entity_decode($activity['body']); ?>
             </p>
            <a href="receivesBookings.php?id=<?php echo $activity['id']; ?>" class="btn read-more"  type="submit" name="book-btn"> Book Activity</a>
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

<script src="../../assets/js/scripts.js"></script> 
</body>
</html>