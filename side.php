
<div class="left">
        <div class="company">
                <h3>AMAzon</h3>
                <span class="fa fa-times" onclick="closs()"></span>
        </div>
        <ul>
        <a href="admin.php" id="active" class="fas fa-th-large"><li class="side" >Dashboard</li></a>
        <a href="product.php" class="fa fa-tag"><li class="side">Products</li></a>
        <a href="collection.php" class="fa fa-folder"><li class="side">Collections</li></a>
        <a href="order.php" class="fa fa-line-chart"><li class="side">Analytics</li></a>
        <a href="customer.php" class="fa fa-user"><li class="side">Customers</li></a>
        <a href="order.php" class="fa fa-shopping-bag"><li class="side">Orders</li></a>
        <a href="review.php" class="fa fa-book"><li class="side">Reviews</li></a>
        <a href="logout.php" class="logOut"><li class="logout">Log Out &rarr;</li></a>
        </ul>
       </div>
       <script>
        document.querySelectorAll('ul a').forEach(e=>{
                e.addEventListener('click',(e)=>{
                        // alert(e.target.className);
                  e.target.style.color = 'red';
                })
        })
       </script>