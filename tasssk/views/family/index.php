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
                <td><?= $family->get_id() ?></td>
                <td><?= $family->get_fname() ?></td>
                <td><?= $family->get_mname() ?></td>
                <td><?= $family->get_lname() ?></td>
                <td><?= $family->get_state() ?></td>
                <td><?= $family->get_phone() ?></td>
                <td><?= $family->get_num_of_members() ?></td>
                <td><?= $family->get_address() ?></td>
                <td>
                    <form method="post" action="/darrebni/tasssk/edit/<?= $family->get_id() ?>">
                        <button>Edit</button>
                    </form>
                    <form method="post" action="/darrebni/tasssk/delete/<?= $family->get_id() ?>">
                        
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>


    </tbody>
</table>
<form method="post" action="/darrebni/tasssk/search">
<select id="address" name="address" value=<?= $family->get_address();?>>
		       <option value="center of city">center of city</option>
		       <option value="suburb">suburb</option>
               <option value="eastern_countryside">eastern_countryside</option>
               <option value="northern_countryside">northern_countryside</option>
               <option value="western_countryside">western_countryside</option>
               <option value="southern_countryside">southern_countryside</option>
            </select><br>
          <button type='submit'>search</button>
                    </form>
        </center>