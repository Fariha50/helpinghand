

<?php 

session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: help.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<nav>
<label class="logo" >Volunteer page</label>

<ul>
<li><a href='profile.php'>Profile</a></li>
<?php  if (isset($_SESSION['username'])) : ?>
<li><a href="index.php?logout='1'">Logout</a></li>

<?php endif ?>

</ul>
</nav>

<?php  if (isset($_SESSION['username'])) : ?>
	  <p style="text-align:center;font-size:50px">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
	  <?php endif ?>
	  
<!--<form action="new.php" method="post">-->
<?php
include "homeserver.php";
//$_SESSION['description'] = $description;
?>
<?php
  

  $q=mysqli_query($db,"SELECT * FROM donation where status='0' ");
  //$row=mysqli_fetch_assoc($q);
?>
<?php
while($row=mysqli_fetch_assoc($q))
{
  ?>
  <form action="new.php" method="post">
<h4>Donate:<?php echo $row['donate']?></h4>
<h4>Description:<?php echo $row['description']?></h4>
<h4>Quantity:<?php echo $row['quantity']?></h4>
<h4>Email:<?php echo $row['email']?></h4>
<h4>Phonenumber:<?php echo $row['phonenumber']?></h4>
<?php echo "<input type=hidden name=id value='".$row['id']."'>";?>
<?php echo "<input type=hidden name=status value='".$row['status']."'>";?>
<?php 
//$status=0;
//$_SESSION['status']=$status;

//echo $status;
?>
<h3>do you want to avail this
  <!--<input type="hidden" value=<?php //echo $row['id'];?> name="id">-->
	<button type="submit" class="btn" name="Avail">Avail</button>
   </h3>

</form>	

<?php
}
?>
<?php
$t=mysqli_query($db,"SELECT count(status) as total,(select count(*) from donation where status='1') as ones from donation");

$row1=mysqli_fetch_assoc($t);
$num1= $row1['total'];
$num2=$row1['ones'];
if($num1==$num2)
{
  echo "no more donations available";
}
?>

