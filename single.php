<?php include("path.php"); ?>
<?php include(ROOT_PATH ."/app/controllers/posts.php");

if(isset($_GET['id'])) {
$post = selectOne('posts',['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);
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

    <title><?php echo $post['title']; ?>| YokyoFunOlympics</title>
</head>
<body>
<!--facebook plugin-->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
</script>
    
<!--// facebook pluging-->

<?php include(ROOT_PATH ."/app/includes/header.php");?>

<!-- start of page Wrapper-->
    <div class="page-wrapper">


<!--content-->
<div class="content clearfix">

    <!-- main content-->

    <!-- main content wrapper-->
 <div class="main-content-wrapper">
<div class="main-content single">
        <h1 class="post-title"><?php echo $post['title']; ?></h1> 
        
        <div class="post-content">
           <?php echo html_entity_decode($post['body']); ?>
    </div>
</div>
</div>
<!--main //content-->

<!--side bar-->

<div class="sidebar single">

<!--facebook page-->
    <div class="fb-page" data-href="https://www.facebook.com/tokyo2020/" data-tabs="" data-width="" data-height="" data-small-header="false"
     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
     <blockquote cite="https://www.facebook.com/tokyo2020/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tokyo2020/">Tokyo 2020</a>
    </blockquote></div>
<!--// facebook tags-->

    <div class="section popular">
        <h2 class="section-title"> Popular</h2>

        <?php foreach ($posts as $post): ?>
        <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
            <div class="post-preview">
            <label> <a href="single.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title']; ?></a></label>
      
        </div>
    </div>

    
    <?php endforeach; ?>

     </div>

    <div class="section topics">
        <h2 class="section-title">Featured at Yokyo</h2>
        <ul>
<?php foreach($topics as $topic): ?>
<li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
<?php endforeach; ?>
        </ul>
    </div>
</div>

<!--// sidebar-->
</div>
</div>
<!--//content-->

    
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