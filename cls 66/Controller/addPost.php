<?php
session_start();
include'../env.php';

$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];
$erros =[];

// //* VALIDATION RULES
if(empty($title)){
   $erros['title_errors']="submit your title?";
}else if(strlen($title)>=50){
    $erros['title_errors']="submit 50 cracter?";
}
if(empty($detail)){
    $erros['detail_errors']="submit your ditale?";
}


if (count ($erros)>0){
    //*REDIRECT BACK
    $_SESSION['form_errors'] = $erros;
    $_SESSION['old'] = $_REQUEST;

    header("Location:index.php");
}
else{
//*MOVE FORWARD
$query="INSERT INTO posts( title, detail, author) VALUES ('$title','$detail','$author')";

$response = mysqli_query($conn,$query);
var_dump($response);
if($response){
    $_SESSION['msg']= 'Your post has been submited!';
    header("location:../index.php");
}

}





