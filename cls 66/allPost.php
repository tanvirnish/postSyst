<?php 
session_start();
include'env.php';
$query ="SELECT * FROM posts";
$response = mysqli_query($conn,$query);
$posts= mysqli_fetch_all($response,1);
// print_r($posts);


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
<!-- TABLE STARTS -->
<div class="col-lg-8 mx-auto mt-5">
  <table class="table table_responsive ">
    <tr>
        <th>#</th>
        <th>Post Title</th>
        <th>Post Detail</th>
        <th>Post Author</th>
        <th>Post Action</th>
    </tr>
    <?php
    foreach($posts as $index=>$post){
        ?>
    <tr>
        <td><?= ++$index ?></td>
        <td><?= $post['title']?></td>
        <td><?= $post['detail']?></td>
        <td><?= !empty($post['author'])?$post['author']:'user'?></td>
        <td>View
            Edit
            Delete

        </td>
        
    </tr>
    <?php
    }
    ?>
 
   
</table>  
</div>




<!-- TABLE ENDS -->



</body>
</html>

<?php 
session_unset();

  
?>