<?php
$id = $_GET['id'];
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <!-- <div class="card w-50 mt-5 mx-auto">
        <div class="card-header text-center text-primary">
          UPDATE
        </div>
        <div class="card-body">
          <form action="../actions/update-item.php" method="post">
            <div class="form-group mb-4">
              <label for="name">Name</label>
              <input type="text" name="name" id="" class="form-control">
              <label for="genre">Genre</label>
              <input type="text" name="genre" id="" class="form-control">
              <label for="author">Author</label>
              <input type="text" name="author" id="" class="form-control">
            </div>
            <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
          </form>
        </div>
      </div> -->
      <section class="p-5 mt-5>
        <div class="container">
            <div class="card w-50 mx-auto" shadow>
                <div class="card-header bg-dark p-4">

                </div>
                <div class="card-body">
                    <form action="../actions/update-item.php" method="post">
                        <div class="input-group">
                            <input type="hidden" name="item-id" value="<?php echo $id?>">
                            <input type="text" name="book-name" placeholder="Book name" id="" class="form-control">
                            <input type="text" name="book-genre" placeholder="Book Genre"id="" class="form-control">
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" name="book-author" placeholder="Book Author"id="" class="form-control">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>