
<div class="nav" style="background-color:black"><?php include(ROOT_PATH ."/app/includes/language.php");?></div>
<header>

        <a href="<?php echo BASE_URL . '/index.php'?>" class="logo">
<h1 class="logo-text"> <span>Yokyo</span> Fun olympics 2020 </h1>
        </a>

        <i class="fa fa-bars menu-toggle"></i>

<ul class="nav">

    <li><a href="<?php echo BASE_URL . '/index.php'?>"> Home</a></li>
    <li><a href="<?php echo BASE_URL . '/admin/booking/bookings.php'?>">Tickets & Classes</a></li>
    <li><a href="<?php echo BASE_URL . '/videos.php'?>">Videos</a></li>
    <li><a href="<?php echo BASE_URL . '/asked.php'?>"> Help</a></li>
    


<?php if (isset($_SESSION['id'])): ?>
   <li>
        <a>
            <i class=" fa fa-user"></i>

             <?php echo $_SESSION['username']; ?>

<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
    <ul>
    
        <?php if($_SESSION['admin']): ?>
        <li>
        <a href="<?php echo BASE_URL . '/admin/dashboard.php'?>"> Dashboard</a></li>
        <?php endif; ?>

        <li><a href="<?php echo BASE_URL . '/logout.php'?>" class="logout"> Logout </a></li>
    </ul>
    </li>
        <?php else: ?>
<li><a href="<?php echo BASE_URL . '/register.php'?>"> Sign Up</a></li>
    <li><a href="<?php echo BASE_URL . '/login.php'?>"> Login</a></li> 
<?php endif; ?>

   
</ul>
        
    </header>