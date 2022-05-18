<?php
// PERFORM CRUD on USERS table
// 1.UI
// 2.Action [EDIT - DELETE CREATE]
// 3.METHODS

include 'Connection.php';

class User extends Connection {
    public function store_user($fname,$lname,$contact,$username,$password,$email){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(fname,lname,contact,username,password,email)VALUES('$fname','$lname','$contact','$username','$password','$email')";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/user-list.php');
        }else{
            die("ERROR: ". $this->conn->error);
        }
    }

    public function show_users(){
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            while($rows = $result->fetch_assoc()){
                $container[] = $rows;
            }
            return $container;
        }else{
            return FALSE;
        }
    }

    public function destroy_user($id){
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/create-users.php');
        }
    }

    public function update_user($id,$fname,$lname,$contact,$username,$password,$email){
        $sql = "UPDATE users SET fname='$fname',lname='$lname',contact='$contact',password='$password',username='$username',email='$email' WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/create-users.php');
        }else{
            die("ERROR: ". $this->conn->error());
        }
    }

    public function show_user($id){
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if($result){
            return $result->fetch_assoc();
        }else{
            die("ERROR: ". $this->conn->error);
        }
    }
}

?>