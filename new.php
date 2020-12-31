<?php
$db = mysqli_connect('localhost', 'root', '', 'helpinghand');
mysqli_select_db($db,'donation');
$status=$_POST['status'];
//include "homeserver.php";
//$res=$_POST['id'];
//echo $res;
//if (isset($_POST['Avail'])){
  if($status=="0"){
  $u= "UPDATE  donation set status=1 where id='$_POST[id]'";

//echo $u;
 // mysqli_query($db,$u);
  //$status=$status+1;
   if( mysqli_query($db,$u)){
       echo "you can avail";
   }
   else{
       echo "error";
   }
  }
   else{
          echo "already taken";
   }

?>