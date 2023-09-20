<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/save" method="post">
        <label>code</label>
        <input type="hidden" name="id" value="<?= $pro['id'] ?>">
        <input type="text" name="code" placeholder="code" value="<?= $pro['code'] ?>">
        <br>
        <label>name</label>
        <input type="text" name="name" placeholder="name" value="<?= $pro['name'] ?>">
        <br>
        <label>quantity</label>
        <input type="text" name="quantity" placeholder="quantity" value="<?= $pro['quantity'] ?>">
        <br>
        <input type="submit" value="save">
    </form>
    <h1>Product Listing</h1>
    <table border="1">
        <tr>
            <th>code</th>
            <th>name</th>
            <th>quantity</th>
            <th>action</th>
        </tr>
        <?php foreach ($products as $pr): ?>
            <tr>
                <td><?= $pr['code'] ?></td>
                <td><?= $pr['name'] ?></td>
                <td><?= $pr['quantity'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">delete</a> || <a href="/edit/<?= $pr['id'] ?>">edit</a></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>