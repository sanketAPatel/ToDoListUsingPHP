<?php


include_once('DB.php');

$task=$_POST['task'];



$db =new DB();
// connect to database 


$result= $db->insertData($task);

if($result==false)
{
   die("error inserting Data");
}


 
  $msg="user added";
  header('location:index.php?userAdded=1&msg=',$msg);

 

?>