<?php
  $abr = $_POST['state'];
	include 'database.php';
	$query = "SELECT * FROM colleges WHERE state_name = '".$abr."' ";
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


<form>

<div id='table'>
	<table>
	<!-- table column headings -->
	<tr>
	  <th>School Name</th>
	</tr>

<?php while ($row = mysqli_fetch_assoc($uni)) :  ?>

<tr>
	<!-- notice how, above, the database record id becomes
		 the id and value of the radio button -->
  <td><a href="state.php?school=<?php echo $row['school_name']; ?>"><?php echo stripslashes($row['school_name']); ?></a></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

</form>
</div>
<div class='button'>
<button type="button"><a href="index.php">Return to the main page.</a></button>
</div>

</body>
</html>
