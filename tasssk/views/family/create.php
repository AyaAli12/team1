<center>
        <h1> add new family</h1>
        <form method='POST' action=''>
            full name of Head of the family:<br>
            <label>first name:</label><br>
            <input type='text' name='first_name' /><br>
            <label>middle name:</label><br>
            <input type='text' name='middel_name' /><br>
            <label>last name:</label><br>
            <input type='text' name='last_name' /><br>
            <label> functional state:</label><br>
            <select id="state" name="state">
		       <option value="employee">employee</option>
		       <option value="unemployee">unemployee</option>
            </select><br>
            <label>number of members:</label><br>
            <input type='number' name='num_of_members' /><br>
            <label>phone number:</label><br>
            <input type='text' name='phone' /><br>
            <label>address:</label><br>
            <select id="address" name="address">
		       <option value="center of city">center of city</option>
		       <option value="suburb">suburb</option>
               <option value="eastern_countryside">eastern_countryside</option>
               <option value="northern_countryside">northern_countryside</option>
               <option value="western_countryside">western_countryside</option>
               <option value="southern_countryside">southern_countryside</option>
            </select><br>
            <button type='submit'>create</button>

</form>
</center>