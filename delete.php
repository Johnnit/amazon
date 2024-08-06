<?php 
session_start();
 $id = $_GET["id"];

 $conn = new mysqli("localhost","root","","amazon");
 if($conn->connect_error){
     die("Connection Error: " . $conn->connect_error);
 }
        $sql = "DELETE FROM products WHERE id = $id";
        $res = $conn->query($sql);
        if($res == true){
            $_SESSION['delete'] ="Product deleted successfully";
            header("Location: product.php");
        }else{
            $_SESSION['delete'] ="Failed to delete product.";
            header("Location: product.php");
        }
?>