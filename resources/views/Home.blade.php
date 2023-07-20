<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Products Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">

</head>
    <body>
        <div class="container">
            <h1>Products Data </h1><br>
            <form action="ProductsName" method="POST"enctype="multipart/form-data">
                @csrf

                <label for="name" class="control-label">ProductName:</label><br>
                <input type="text"name="name" class="form-control">

                <label for="name" class="control-label">Title:</label><br>
                <input type="text"name="name" class="form-control">

                <label for="name" class="control-group">Description</label><br>
                <textarea value="description"class="form-control"></textarea><br>

                <input type="submit" class="btn btn-primary">
                <input value="Cancel" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>
