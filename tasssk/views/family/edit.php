<center>
        <h1> mdify family info</h1>
        <form method='POST' action='/darrebni/tasssk/update_family'>
            full name of Head of the family:<br>
            <label>first name:</label><br>
            <input type='text' name='fname' value=<?= $Family->fname?> /><br>
            <label>middle name:</label><br>
            <input type='text' name='mname' value=<?= $Family->mname?> /><br>
            <label>last name:</label><br>
            <input type='text' name='lname' value=<?= $Family->lname?> /><br>
            <label> functional state:</label><br>
            <select id="state" name="functional_state" value=<?= $Family->functional_state;?> >
		       <option value="employee">employee</option>
		       <option value="unemployee">unemployee</option>
            </select><br>
            <label>number of members:</label><br>
            <input type='number' name='num_of_members' value=<?= $Family->num_of_members?> /><br>
            <label>phone number:</label><br>
            <input type='text' name='phone' value=<?= $Family->phone ?> /><br>
            <label>address:</label><br>
            <select id="address" name="address" value=<?= $Family->address?>>
		       <option value="center of city">center of city</option>
		       <option value="suburb">suburb</option>
               <option value="eastern_countryside">eastern_countryside</option>
               <option value="northern_countryside">northern_countryside</option>
               <option value="western_countryside">western_countryside</option>
               <option value="southern_countryside">southern_countryside</option>
            </select><br>
            <input type="hidden" name="id" value=<?= $Family->id ?>>
            <button type='submit'>save</button>

</form>
</center>