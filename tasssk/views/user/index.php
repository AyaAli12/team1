<center>
<h1>Users</h1>
<a href="/darrebni/tasssk/create">Add new employee</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name?></td>
                <td><?= $user->password ?></td>
                <td>
                    <form method="post" action="/darrebni/tasssk/edit">
                    <input type="hidden" name="id" value=<?= $user->id ?>>

                        <button>Edit</button>
                    </form>
                    <form method="post" action="/darrebni/tasssk/delete">
                    <input type="hidden" name="id" value=<?= $user->id ?>>

                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
        </center>