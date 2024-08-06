<?php
    if(isset($_GET['searchBtn'])){
        $search = $_GET['search'];
        $conn = new mysqli("localhost","root","","amazon");
        if($conn->connect_error){
            die("Connection Error: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM products";
        $query = $conn->query($sql);
        $row = mysqli_num_rows($query);
       
      if($row >0){
       while($row = $query->fetch_assoc()){
        if(str_contains($row['title'],$search)){
            echo $row['title'];
        }
         }
       }
      $conn->close();

    }
?>