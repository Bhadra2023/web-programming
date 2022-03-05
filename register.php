<?php
include "config.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
         $age=$_POST['age'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	

$sql = "INSERT INTO `user` ( name,age, address, phone) VALUES ( '$name','$age', '$address', '$phone')";
$result=$conn->query($sql);
if($result==TRUE)
{
	echo "new record created successfully";
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
<body align: center>
<h2> Signup Form </h2>
<form action="" method="POST">
<fieldset>
<legend> PersonaInformation </legend>
Name:<br>
<input type="text" name="name">
<br>
Age:<br>
<input type="text" name="age">
<br>
Address:<br>
<input type="text" name="address">
<br>
phone:
<br>
<input type="number" name="phone">

<br><br>
<input type="submit" name="submit" value="submit">
<a href="view.php"></a>
</fieldset>
</body>
</html>	

	