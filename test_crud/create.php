<?php

$pdo = new PDO('mysql:host=localhost;port=8889;dbname=products_crud', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

var_dump($_POST);
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Create New Product</h>

        <form action="create.php" method="post">
            <div class="mb-3">
                <label>Product Image</label>
                <input type="file" name="image">

            </div>
            <div class="mb-3">
                <label>Product Title</label>
                <input type="text" class="form-control" name="title">

            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea class="form-control" name="description"></textarea>

            </div>
            <div class="mb-3">
                <label>Product Price</label>
                <input type="number" step=".01" class="form-control" name="price">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>

</html>