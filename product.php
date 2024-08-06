<?php include('search.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./media.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>
<body>
    <div class="container">
        <!-- nav -->
        <?php include('nav.php');?>
        <!-- aside -->
       <?php include("side.php");?>
       <!-- main editor -->
        <div class="right">
            <h3 class="title">Product</h3>

            <!-- content start -->
            <div class="content">
                <!-- top search section -->
                <?php include('searchh.php');?>
                <!-- end of search section -->
                 <section>
                    <table>
                        <tr>
                            <th><input type="checkbox" name="selectAll" id='selectAll'></th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        <p style="color:red; text-align:center; padding-bottom:25px;">
                        <?php if(isset($_SESSION['delete'])){
                            echo $_SESSION['delete'];
                            unset($_SESSION['delete']);
                        };?></p>
                        <!-- add contents from the database -->
                        <?php
    $conn = new mysqli("localhost","root","","amazon");
    if($conn->connect_error){
        die("Connection Error: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM products";
    $query = $conn->query($sql);
    $row = mysqli_num_rows($query);
  if($row >0){
    while($row = $query->fetch_assoc()){
        $pp = $row['image'];
        echo " <tr>
                            <td><input type='checkbox' name='select' id='select'></td>
                            <td>$row[title]</td>
                            <td>$row[description] </td>
                            <td><img src='./image/$pp' accept='.jpg, .png,.jpeg,.gif' alt='cloth'></td>
                            <td>#$row[price]</td>
                            <td class='action'>
                                 <a href=\"delete.php\"><button>Edit</button></a>
                                <a href=\"delete.php?id=$row[id]\"> <button  style='background:red; color:white; border:none;'>Delete</button></a>
                            </td>
                        </tr>
                        ";
    }
  }
  $conn->close();
?>
                        <tr>
                            <td>02</td>
                            <td>Luxurious watch</td>
                            <td>Crafted with exquisite attention to detail, this 
                                luxurious wristwatch is a timeless masterpiece 
                                that epitomizes elegance and sophistication. 
                                Its flawless design showcases a meticulously 
                                polished stainless steel case, accentuated by a 
                                stunningly intricate dial adorned with shimmering 
                                diamonds or other precious gemstones. </td>
                            <td><img src="../store/clothe.jpg" alt="cloth"></td>
                            <td>#20 000</td>
                            <td class="action">
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Luxurious watch</td>
                            <td>Crafted with exquisite attention to detail, this 
                                luxurious wristwatch is a timeless masterpiece 
                                that epitomizes elegance and sophistication. 
                                Its flawless design showcases a meticulously 
                                polished stainless steel case, accentuated by a 
                                stunningly intricate dial adorned with shimmering 
                                diamonds or other precious gemstones. </td>
                            <td><img src="../store/clothe.jpg" alt="cloth"></td>
                            <td>#20 000</td>
                            <td class="action">
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Luxurious watch</td>
                            <td>Crafted with exquisite attention to detail, this 
                                luxurious wristwatch is a timeless masterpiece 
                                that epitomizes elegance and sophistication. 
                                Its flawless design showcases a meticulously 
                                polished stainless steel case, accentuated by a 
                                stunningly intricate dial adorned with shimmering 
                                diamonds or other precious gemstones. </td>
                            <td><img src="../store/clothe.jpg" alt="cloth"></td>
                            <td>#20 000</td>
                            <td class="action">
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Luxurious watch</td>
                            <td>Crafted with exquisite attention to detail, this 
                                luxurious wristwatch is a timeless masterpiece 
                                that epitomizes elegance and sophistication. 
                                Its flawless design showcases a meticulously 
                                polished stainless steel case, accentuated by a 
                                stunningly intricate dial adorned with shimmering 
                                diamonds or other precious gemstones. </td>
                            <td><img src="../store/clothe.jpg" alt="cloth"></td>
                            <td>#20 000</td>
                            <td class="action">
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Luxurious watch</td>
                            <td>Crafted with exquisite attention to detail, this 
                                luxurious wristwatch is a timeless masterpiece 
                                that epitomizes elegance and sophistication. 
                                Its flawless design showcases a meticulously 
                                polished stainless steel case, accentuated by a 
                                stunningly intricate dial adorned with shimmering 
                                diamonds or other precious gemstones. </td>
                            <td><img src="../store/clothe.jpg" alt="cloth"></td>
                            <td>#20 000</td>
                            <td class="action">
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Luxurious watch</td>
                            <td>Crafted with exquisite attention to detail, this 
                                luxurious wristwatch is a timeless masterpiece 
                                that epitomizes elegance and sophistication. 
                                Its flawless design showcases a meticulously 
                                polished stainless steel case, accentuated by a 
                                stunningly intricate dial adorned with shimmering 
                                diamonds or other precious gemstones. </td>
                            <td><img src="../store/clothe.jpg" alt="cloth"></td>
                            <td>#20 000</td>
                            <td class="action">
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                    </table>
                 </section>
            </div>
            <!-- end of content -->
            <footer>
         <cite>&copy; AMAzon. All right reserved.</cite>
      </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="chart.js"></script>
   <script src="select.js"></script>
</body>
</html>