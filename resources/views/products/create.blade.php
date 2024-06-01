<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 CRUD</title>

        <title>Bootstrap 5 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm bg-dark">

        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="/">Products</a>
            </li>
          </ul>
        </div>

      </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
              <div class="card mt-3 p-3">
                <form method="POST" action="/products/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="4" name="description"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-dark mt-3">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</body>
</html>
