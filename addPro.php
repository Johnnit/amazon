
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./media.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>
<body>
<?php
        if(isset($_POST['save'])){
           

            $conn = new mysqli("localhost","root","","amazon");
            $title = $_POST['title'];
            $desc = $_POST['description'];
            $price = $_POST['price'];
            $filename = $_FILES["image"]["name"];
            if($filename == trim($filename) && str_contains($filename," ")){
               echo "There's an error in the filename you're uploading....<br> Kindly remove the spaces in the file name.";
               return;
            }
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "./image/" . $filename;
            if($conn->connect_error){
                die("Connection error " . $conn->connect_error);
            }
            $sql = "INSERT INTO products (title,description,image,price) VALUES ('$title','$desc','$filename','$price')";
            $query = $conn->query($sql);

            //( movinr uploaded image into the image folder
            if(move_uploaded_file($tempname,$folder)){
                echo "image uploaded";
            } 
            else{
                echo "not uploaded";
            }
            if($query){
                header('Location: product.php');
            }

            $conn->close();
        }
  
?>
    <div class="container">
        <!-- nav -->
        <?php include('nav.php');?>
        <!-- aside -->
       <?php include("side.php");?>
       <!-- main editor -->
        <div class="right">
            
            <h3 class="title" style="font-size: 18px;"> <i onclick="history.back();" class="fa fa-arrow-left"></i>  Add Product</h3>

            <!-- content start -->
            <div class="content">
               

                <!-- start editing -->
                <div class="editor">
                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                            
                        <div class="wrap">
                        <label for="title">Title</label>
                            <input type="text" name="title" id="title">
                        </div>

                        <div class="wrap">
                        <label for="title">Description</label>
                        <textarea name="description" id="description" rows="10"></textarea>
                        </div>

                        <div class="wrap">
                        <label for="title">Image</label>
                        <div class="imageWrap">
                            <input type="file" name="image" id="image">
                        </div>
                        </div>

                        <div class="wrap">
                        <label for="title">Pricing</label>
                        <input type="number" name="price" id="price">
                        </div>
                        <!-- shipping -->
                        <div class="wrap">
                            <h3>Shipping</h3>
                        <label for="title">Pricing</label>
                        <input type="number" name="price" id="price">
                        </div>

                                 <!-- top nav -->
                <div class="top">
                     <button name="save" class="add">Save</button>
                </div>
                <!-- end of top -->
                    </form>
                </div>
                <!-- end editor -->
            </div>
            <!-- end of content -->
            <footer>
         <cite>&copy; AMAzon. All right reserved.</cite>
      </footer>
        </div>
    </div>

    <script>
        document.querySelector('.imageWrap').addEventListener("click",()=>{
            document.getElementById("image").click();
        })
    </script>
</body>
</html>