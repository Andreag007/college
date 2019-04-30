<?php
  $school = $_GET['school'];
	include 'database.php';
	$query = "SELECT * FROM colleges WHERE school_name = '".$school."' ";
	$uni = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title> College </title>
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=News+Cycle|Rubik" rel="stylesheet">
</head>

<body>

<table>
  <tr>
    <th>School Name</th>
    <th>City</th>
    <th>State</th>
    <th>Cost</th>
    <th>Graduation Rate</th>
    <th>Salary After Graduating</th>
    <th>Website of School</th>
  </tr>


<?php $row = mysqli_fetch_assoc($uni)  ?>


<tr>
	<!-- notice how, above, the database record id becomes
		 the id and value of the radio button -->
  <td><?php echo $row['school_name']; ?></td>
  <td><?php echo $row['city_name']; ?></td>
  <td><?php echo $row['state_name']; ?></td>
  <td><?php echo $row['cost']; ?></td>
  <td><?php echo $row['grad_rate']; ?></td>
  <td><?php echo $row['salary']; ?></td>
  <td><?php echo $row['website']; ?></td>
</tr>


</table>


<button type="button"><a href="index.php">Return to the main page.</a></button>

</body>
</html>
