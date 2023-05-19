<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="mb-4 mt-5">Users</h1>

        <a href="/users/create" class="btn btn-success">Create new user</a>

        <table class="table">
            <thead class="table-light">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Birth date</th>
                <th scope="col">action</th>
            </thead>
            <tbody>
                <?php foreach($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $user['id'] ?></th>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['age'] ?></td>
                    <td><?= $user['birth_date'] ?></td>
                    <td>
                        <a href="/user-show/<?= $user['id'] ?>" class="btn btn-info btn-sm">view</a>
                        <a href="/user-edit/<?= $user['id'] ?>" class="btn btn-warning btn-sm">update</a>
                        <a href="/user-delete/<?= $user['id'] ?>" data-method="delete" class="btn btn-danger btn-sm">delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
