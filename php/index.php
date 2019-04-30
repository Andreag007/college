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

<div class='header'>
<h1>College Database</h1>

<h2>Choose a state for information about the universites that they offer.<h2>

<p>Each university will give you information regarding where it is located, how much it costs, what the graduation rate is, the expected salary after graduation, and the website for the school.</p>
</div>

<form action="colleges.php" method="POST">

  <select name='state'>
    <option value="AL">Alabama</option>
	  <option value="AK">Alaska</option>
	  <option value="AZ">Arizona</option>
	  <option value="AR">Arkansas</option>
	  <option value="CA">California</option>
	  <option value="CO">Colorado</option>
	  <option value="CT">Connecticut</option>
	  <option value="DE">Delaware</option>
	  <option value="DC">District Of Columbia</option>
	  <option value="FL">Florida</option>
	  <option value="GA">Georgia</option>
	  <option value="HI">Hawaii</option>
	  <option value="ID">Idaho</option>
	  <option value="IL">Illinois</option>
	  <option value="IN">Indiana</option>
	  <option value="IA">Iowa</option>
	  <option value="KS">Kansas</option>
	  <option value="KY">Kentucky</option>
	  <option value="LA">Louisiana</option>
	  <option value="ME">Maine</option>
	  <option value="MD">Maryland</option>
	  <option value="MA">Massachusetts</option>
	  <option value="MI">Michigan</option>
	  <option value="MN">Minnesota</option>
	  <option value="MS">Mississippi</option>
	  <option value="MO">Missouri</option>
	  <option value="MT">Montana</option>
	  <option value="NE">Nebraska</option>
	  <option value="NV">Nevada</option>
	  <option value="NH">New Hampshire</option>
	  <option value="NJ">New Jersey</option>
	  <option value="NM">New Mexico</option>
	  <option value="NY">New York</option>
	  <option value="NC">North Carolina</option>
	  <option value="ND">North Dakota</option>
	  <option value="OH">Ohio</option>
	  <option value="OK">Oklahoma</option>
	  <option value="OR">Oregon</option>
	  <option value="PA">Pennsylvania</option>
	  <option value="RI">Rhode Island</option>
	  <option value="SC">South Carolina</option>
	  <option value="SD">South Dakota</option>
	  <option value="TN">Tennessee</option>
	  <option value="TX">Texas</option>
	  <option value="UT">Utah</option>
	  <option value="VT">Vermont</option>
	  <option value="VA">Virginia</option>
	  <option value="WA">Washington</option>
	  <option value="WV">West Virginia</option>
	  <option value="WI">Wisconsin</option>
	  <option value="WY">Wyoming</option>
  </select>

  <input type="submit" id="submit" value="Submit">

</form>

<footer>
  <button type="button"><a href='https://github.com/Andreag007/college'>Click here for my github page.</a></button>
  <p>By Andrea Giraldo</p>
</footer>
</body>
</html>
