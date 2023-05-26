<a href="/darrebni/tasssk/">Home</a>
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