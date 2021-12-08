<?php include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

 
 $posts = array();
$postsTitle = 'Trending At Yokyo';

if(isset($_GET['t_id'])){
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "you searched for Posts under '" . $_GET['name'] . "'";
} else if(isset($_POST['search-term'])){
     $postsTitle = "Displaying results for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
 } else {
 $posts = getPublishedPosts();    
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

        <!-- carousel-->

        <div class="post-slider">
            <h1 class="slider-title"> Featured Sports & Activities</h1>

            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>

            <div class="post-wrapper">

                <?php foreach ($topics as $topic): ?>
                <div class="post clear">
                <img src="<?php echo BASE_URL . '/assets/images/' . $topic['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></h4>
                        &nbsp;              
                </div>
                </div>
                <?php endforeach; ?>                             
        </ul>
    </div>           
                                                                                                                                                                                                  </div>
            </div>
        </div>
        <!-- end of carousel-->
        

<!--content-->
<div class="content clearfix">

    <!-- main content-->
<div class="main-content">

    <h1 class="recent-post-title"> <?php echo $postsTitle ;?></h1>

    <?php foreach ($posts as $post): ?>
        <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
            <div class="post-preview">
            <h2> <a href="single.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title']; ?></a></h2>
            <i class=" fa fa-user"> <?php echo $post['username']; ?></i>
            &nbsp;
            <i class="fa fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
            <p class="preview-text">
          <?php echo html_entity_decode(substr($post['body'], 0, 200) .'...'); ?>
             </p>
            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more"> Read More</a>
        </div>
    </div>
    <?php endforeach; ?>
                                        
</div>

<!--main //content-->

<div class="sidebar">
    <div class="section search">
        <h2 class="section-title">Search</h2>
        <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search ">
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