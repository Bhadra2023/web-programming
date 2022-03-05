<?php
include "config.php";
$sql = " SELECT * FROM `user` " ;
$result=$conn->query($sql);
?>
<html>
<head>
<title>view page</title>
</head>
<body>
<div class="container">
<h2>covaxin User</h2>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>age</th>
<th>Address</th>
<th>phone</th>

</tr>
<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['phone'];?></td>
</tr>
<?php
	}
}
?>
</table>
</html>