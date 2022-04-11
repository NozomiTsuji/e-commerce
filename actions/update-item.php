<?php
      include '../classes/Library.php';
      $obj = new Library;

      if(isset($_POST['update'])){
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $author = $_POST['author'];

        $item_id = $_GET['id'];

        $obj->update_book($item_id); 
      }
      
?>