<h2>Edit Room</h2>

<form action="index.php?url=rooms/update" method="POST">
    <input type="hidden" name="id" value="<?= $data['room']['id']; ?>">

    Name: <br>
    <input type="text" name="name" value="<?= $data['room']['name']; ?>"><br><br>

    Price: <br>
    <input type="number" step="0.01" name="price" value="<?= $data['room']['price']; ?>"><br><br>

    Capacity: <br>
    <input type="number" name="capacity" value="<?= $data['room']['capacity']; ?>"><br><br>

    <button type="submit">Update</button>
</form>