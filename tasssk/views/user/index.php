<center>
<h1>Users</h1>
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
                <td><?= $user->get_id() ?></td>
                <td><?= $user->get_name() ?></td>
                <td><?= $user->get_password() ?></td>
                <td>
                    <form method="post" action="/darrebni/tasssk/edit/<?= $user->get_id() ?>">
                        <button>Edit</button>
                    </form>
                    <form method="post" action="/darrebni/tasssk/delete/<?= $user->get_id() ?>">
                        
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
        </center>