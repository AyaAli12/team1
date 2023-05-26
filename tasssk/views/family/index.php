<center>
<a href="/darrebni/tasssk/logout">Log Out</a>
<br>
<a href="/darrebni/tasssk/create_family">Add new Family</a>
<h1>families</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middel Name</th>
            <th>last Name</th>
            <th>functional state</th>
            <th>phone number</th>
            <th>number of members</th>
            <th>address</th>

        
            
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($families as $family): ?>
            <tr>
                <td><?= $family->id ?></td>
                <td><?= $family->fname ?></td>
                <td><?= $family->mname ?></td>
                <td><?= $family->lname ?></td>
                <td><?= $family->functional_state ?></td>
                <td><?= $family->phone ?></td>
                <td><?= $family->num_of_members ?></td>
                <td><?= $family->address ?></td>
                <td>
                    <form method="post" action="/darrebni/tasssk/edit_family">
                    <input type="hidden" name="id" value=<?= $family->id ?>>
                        <button>Edit</button>
                    </form>
                    <form method="post" action="/darrebni/tasssk/delete_family">
                    <input type="hidden" name="id" value=<?= $family->id ?>>
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>


    </tbody>
</table>
<br><br>
<h3>search for families by thier address:</h3>
    
<form method="post" action="/darrebni/tasssk/search">
<select id="address" name="address">
		       <option value="center of city">center of city</option>
		       <option value="suburb">suburb</option>
               <option value="eastern_countryside">eastern_countryside</option>
               <option value="northern_countryside">northern_countryside</option>
               <option value="western_countryside">western_countryside</option>
               <option value="southern_countryside">southern_countryside</option>
            </select><br>
          <button type='submit' name='search'>search</button>
                    </form>
        </center>