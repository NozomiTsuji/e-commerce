<?php
      include '../classes/Library.php';
      $obj = new Library;

      if(isset($_POST['update'])){
        $name = $_POST['book-name'];
        $genre = $_POST['book-genre'];
        $author = $_POST['book-author'];
        $item_id = $_POST['item-id'];

        $obj->update_book($item_id,$name,$genre,$author); 
      }
      
?>