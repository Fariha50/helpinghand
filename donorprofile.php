
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style type="text/css">
	.wrapper
	{
		width:400px;
		margin: 0 auto;
		background-color:grey;
	}
	</style>
</head>
<body>

<nav>
<label class="logo" >Donor page</label>

<ul>
<li><a href='#'>Profile</a></li>
<?php  //if (isset($_SESSION['username'])) : ?>
<li><a href="home.php?logout='1'">Logout</a></li>

<?php //endif ?>

</ul>
</nav>
<form action="" method="post">
<?php
	include "donorserver.php";
	$q=mysqli_query($db,"SElECT * FROM donor where username1='$_SESSION[username1]';");
	$row=mysqli_fetch_assoc($q);
?>
<div class="wrapper">
<div style="text-align:center;"><b>Welcome,</b>
<h4>
<?php echo $row['username1'];?>

</h4>
</div>


<?php
	echo "<b>";
	echo "<table  border='1' width='400' cellspacing='3'>";
	echo "<tr>";

	echo "<td><b> Name:</b></td>";
	echo "<td>";
		echo $row['name1'];
	echo "</td>";

	echo "</tr>";

	echo "<tr>";

	echo "<td><b> UserId:</b></td>";

	echo "<td>";
	echo $row['phonenumber1'];
	echo "</td>";

	echo "</tr>";

	echo "<tr>";

	echo "<td><b> Email:</b></td>";

	echo "<td>";
	echo $row['email1'];
	echo "</td>";

	echo "</tr>";

	

	echo "</table>";
	echo "</b";
	?>
</form>
</body></html>