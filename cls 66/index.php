<?php 
session_start();

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
  
</head>
<body>
  <!-- NAVBAR START  -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="addPost.php">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="allPost.php">All Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- NAVBAR ENDS -->


<!-- FROM STARTS -->
<div class="card col-lg-4 mx-auto mt-5">
  <div class="card-header bg-dark text-light "> Add Post </div>

  <div class="card-body">


     <form action="Controller/addPost.php" method="GET">
      <input value="<?=isset($_SESSION['old']['title'])?:'';?>" name="title" class="form-control mt-3" type="text" placeholder="Your Post Title">

        <?php
        if(isset($_SESSION['form_errors']['title_errors'] )){
        ?>
          <span><?= $_SESSION['form_errors']['title_errors'] ?></span>
          <?php
        }
        ?> 

      <textarea <?=isset($_SESSION['old']['title'])?:'';?> name="detail"class="form-control mt-3"placeholder="Your Post Detail"></textarea>
      <?php
        if(isset($_SESSION['form_errors']['detail_errors'] )){
        ?>
          <span><?= $_SESSION['form_errors']['detail_errors'] ?></span>
          <?php
        }
        ?>

      <input value="<?=isset($_SESSION['old']['author'])?:'';?>" name="author" class="form-control mt-3" type="text" placeholder="Author Name">

      <button type="submit" class="btn btn-dark w-100 rounded-0 mt-3">Submit</button>

</form>
  </div>
</div>
<!-- FROM ENDS -->
<!-- MSG TOSTS START -->
<div class="toast <?= isset($_SESSION['msg'])? 'show': ''?>"style="position:absolute;right: 50px;bottom: 100px;" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="me-auto">post sys</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    <?= isset($_SESSION['msg'])? $_SESSION['msg']: ''?>
  </div>
</div>
<!-- MSG TOSTS ENDS -->
</body>
</html>

<?php 
session_unset();

  
?>