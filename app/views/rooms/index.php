<h2>Rooms</h2>

<a href="index.php?url=rooms/create">Add Room</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Capacity</th>
        <th>Actions</th>
    </tr>

    <?php while($row = $data['rooms']->fetch_assoc()): ?>
        <tr>
            <td><?= $row['name']; ?></td>
            <td><?= $row['price']; ?></td>
            <td><?= $row['capacity']; ?></td>
            <td>
                <a href="index.php?url=rooms/edit&id=<?= $row['id']; ?>"> Edit</a>
                <a href="index.php?url=rooms/delete&id=<?= $row['id']; ?>">Delete</a>
            </td>
        </tr>

        <?php endwhile; ?>
</table>