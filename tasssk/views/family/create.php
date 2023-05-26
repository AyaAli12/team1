<!DOCTYPE html>
<html>
<head>
	<title>Add New Family</title>
</head>
<body>
	<center>
		<h1>Add New Family</h1>
		<form method='POST' action=''>
			<p>Full Name of Head of the Family:</p>
			<label>First Name:</label>
			<input type='text' name='fname' /><br>
			<label>Middle Name:</label>
			<input type='text' name='mname' /><br>
			<label>Last Name:</label>
			<input type='text' name='lname' /><br>
			<label>Functional State:</label>
			<select id="state" name="functional_state">
				<option value="employee">Employee</option>
				<option value="unemployee">Unemployee</option>
			</select><br>
			<label>Number of Members:</label>
			<input type='number' name='num_of_members' /><br>
			<label>Phone Number:</label>
			<inputtype='text' name='phone' /><br>
			<label>Address:</label>
			<select id="address" name="address">
				<option value="center of city">Center of City</option>
				<option value="suburb">Suburb</option>
				<option value="eastern_countryside">Eastern Countryside</option>
				<option value="northern_countryside">Northern Countryside</option>
				<option value="western_countryside">Western Countryside</option>
				<option value="southern_countryside">Southern Countryside</option>
			</select><br>
			<button type='submit'>Create</button>
		</form>
	</center>
</body>
</html>