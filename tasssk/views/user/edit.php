<center>
        <h1> edit user</h1>
        <form method='POST' action='/darrebni/tasssk/update/'>
            <label>name:</label><br>
            <input type='text' name='name' value=<?= $user->get_name();?>><br>
            <label>password:</label><br>
            <input type='text' name='password' value=<?= $user->get_password(); ?> /><br>
            <input type="hidden" name="id" value="<?= $user->get_id() ?>">
            <button type='submit'>Save</button>
</form>
</center>