<?php
include '../classes/User.php';
$obj = new User;
$id = $_GET['id'];

$user = $obj->show_user($id);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit users</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      
    <section class="p-5 mt-5>
        <div class="container">
            <div class="card w-50 mx-auto" shadow>
                <div class="card-header bg-light p-4">

                </div>
                <div class="card-body">
                    <form action="../actions/update-user.php" method="post">
                        <div class="input-group">
                            <input type="hidden" name="user-id" value="<?php echo $id?>">
                            <input type="text" value="<?php echo $user['fname']?>" name="first-name" placeholder="First name" id="" class="form-control">
                            <input type="text" value="<?php echo $user['lname']?>" name="last-name" placeholder="Last Name" id="" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="text" value="<?php echo $user['contact']?>" name="contact" placeholder="Contact"id="" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="text" value="<?php echo $user['username']?>" name="username" placeholder="Username"id="" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="password" value="<?php echo $user['password']?>" name="password" placeholder="Password"id="" class="form-control">
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" value="<?php echo $user['email']?>" name="email" placeholder="Email"id="" class="form-control">
                            <button type="submit" class="btn btn-success">Edit</button>
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

