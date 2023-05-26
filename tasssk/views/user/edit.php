<center>
        <h1> edit user</h1>
        <form method='POST' action='/darrebni/tasssk/update/'>
            <label>name:</label><br>
            <input type='text' name='name' value=<?= $user->name?>><br>
            <label>password:</label><br>
            <input type='text' name='password' value=<?= $user->password ?> /><br>
            <input type="hidden" name="id" value="<?= $user->id ?>">
            <button type='submit'>Save</button>
</form>
</center>