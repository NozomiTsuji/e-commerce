<?php

include 'Connection.php'; //connection 2 files

class Library extends Connection{

    //contain SQL codes INSERT INTO... SELECT * ...

    public function store_book($bName,$bGenre,$bAuthor){
        $sql = "INSERT INTO books(name,genre,author)VALUES('$bName','$bGenre','$bAuthor')";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/dash-books.php');
        }

    }
    public function show_books(){
        $sql = "SELECT * FROM books";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){ //if there are any data inside table::books
            while($rows = $result->fetch_assoc()){
                $container[] = $rows; //get all of the data
            }
            return $container;
        }else{
            return FALSE;
        }
    }
    public function destroy_book($id){
        $sql = "DELETE FROM books WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/dash-books.php');
        }
    }


    //act:
    //1.create UI for update: (HTML/BOOTSTRAP)
    //2.complete update_book method
    //3. create Update action
    public function update_book($id,$name,$genre,$author){
        $sql = "UPDATE books SET name='$name',genre='$genre',author='$author' WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/dash-books.php');
        }

    }

    // public function show_book($id){
    //     $sql = "SELECT * FROM books WHERE id = '$id'";
    //     $result = $this->conn->query($sql);

    //     if($result){
    //         return $result->fetch_assoc();
    //     }
    // }

}

?>