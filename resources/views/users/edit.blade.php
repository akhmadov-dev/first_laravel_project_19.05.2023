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
        <h1 class="mb-4 mt-5">Create new user</h1>

        <div class="row">
            <div class="col-md-6">
                <form action="/user-update/<?= $user['id'] ?>" method="GET">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full name</label>
                        <input type="text" value="<?= $user['name'] ?>" name="name" class="form-control" id="name" placeholder="name..">
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" value="<?= $user['age'] ?>" name="age" class="form-control" id="age" placeholder="age..">
                    </div>

                    <div class="mb-3">
                        <label for="birth_date" class="form-label">Birth date</label>
                        <input type="date" value="<?= $user['birth_date'] ?>" name="birth_date" class="form-control" id="birth_date" placeholder="birth date..">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
