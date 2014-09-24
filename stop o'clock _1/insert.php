<?php
$con=mysqli_connect("localhost","blio","blio","twenzetu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO app_users (username, password, fname, lname, emailaddress)
VALUES
('$_POST[username]','$_POST[password]','$_POST[fname]','$_POST[lname]','$_POST[emailaddress]')";



if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added successfully";

mysqli_close($con);
?> 
</br>
</br>
</br>
	<?php $login = "Log in"; ?>
	<a href="index.php"><?php echo $login; ?></a>

