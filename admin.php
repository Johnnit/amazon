
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
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

            <h3 class="title">Dashboard</h3>
          <!-- Analytics -->
           <div class="analytics">
            <!-- customers section -->
               <section class="grp customers">
                  <div class="top">
                     <i class="fa fa-home" title="customer"></i>
                     <span class="title">Customers</span>
                  </div>
                  <div class="bottom">
                     <div class="today">
                        <span class="name">Today Customers</span>
                        <span class="num">200</span>
                     </div>
                     <div class="total">
                        <span class="name">Total Customers</span>
                        <span class="num">200</span>
                     </div>
                  </div>
               </section>
               <!-- end of customer -->
                 <!-- customers section -->
               <section class="grp orders">
                  <div class="top">
                     <i class="fa fa-home" title="order"></i>
                     <span class="title">Orders</span>
                  </div>
                  <div class="bottom">
                     <div class="today">
                        <span class="name">Today Orders</span>
                        <span class="num">200</span>
                     </div>
                     <div class="total">
                        <span class="name">Total Orders</span>
                        <span class="num">200</span>
                     </div>
                  </div>
               </section>
               <!-- end of customer -->
                 <!-- customers section -->
               <section class="grp sales">
                  <div class="top">
                     <i class="fa fa-home" title="sales"></i>
                     <span class="title">Sales</span>
                  </div>
                  <div class="bottom">
                     <div class="today">
                        <span class="name">Today Sales</span>
                        <span class="num">200</span>
                     </div>
                     <div class="total">
                        <span class="name">Total Sales</span>
                        <span class="num">200</span>
                     </div>
                  </div>
               </section>
               <!-- end of customer -->
                 <!-- customers section -->
               <section class="grp revenue">
                  <div class="top">
                     <i class="fa fa-home" title="revenue"></i>
                     <span class="title">Revenue</span>
                  </div>
                  <div class="bottom">
                     <div class="today">
                        <span class="name">Today Revenue</span>
                        <span class="num">200</span>
                     </div>
                     <div class="total">
                        <span class="name">Total Revenue</span>
                        <span class="num">200</span>
                     </div>
                  </div>
               </section>
               <!-- end of customer -->
           </div>
           <!-- end of analytics -->

   
                <!-- sales table -->
                 <div class="tableWrapper">
                  <h3 class="title">Recent Orders</h3>
                  <table>
                     <tr>
                        <th>SN</th>
                        <th>Customer Name</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Date</th>

                     </tr>
                     <tr>
                        <td>01</td>
                        <td>Ajala John</td>
                        <td>Men shirt</td>
                        <td class="status success">success</td>
                        <td>20/12/2024</td>
                     </tr>
                     <tr>
                        <td>02</td>
                        <td>Ajala John</td>
                        <td>Men shirt</td>
                        <td class="status success">success</td>
                        <td>20/12/2024</td>
                     </tr>
                     <tr>
                        <td>03</td>
                        <td>Ajala John</td>
                        <td>Men shirt</td>
                        <td class="status pending">pending</td>
                        <td>20/12/2024</td>
                     </tr>
                     <tr>
                        <td>04</td>
                        <td>Ajala John</td>
                        <td>Men shirt</td>
                        <td class="status success">success</td>
                        <td>20/12/2024</td>
                     </tr>
                  </table>
                 </div>
      <!-- end of table wrapper -->
     
      <!-- chart section -->
      <div class="analytic">
         <div class="title">
            <h2>Analytical charts</h2>
         </div>
         <div class="charts">

         <div class="chart">
            <h3>Sales</h3>
            <canvas id="myChart"></canvas>
         </div>
         <div class="chart">
            <h3>Revenue</h3>
            <canvas id="mySales"></canvas>
         </div>
         </div>

      </div>
       <!-- end of chart -->

      <!-- sales table -->
                 <div class="tableWrapper">
                  <h3 class="title">Recent Orders</h3>
                  <table>
                     <tr>
                        <th>SN</th>
                        <th>Customer Name</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Date</th>

                     </tr>
                     <tr>
                        <td>01</td>
                        <td>Ajala John</td>
                        <td>Men shirt</td>
                        <td class="status success">success</td>
                        <td>20/12/2024</td>
                     </tr>
                     <tr>
                        <td>02</td>
                        <td>Ajala John</td>
                        <td>Men shirt</td>
                        <td class="status success">success</td>
                        <td>20/12/2024</td>
                     </tr>
                     <tr>
                        <td>03</td>
                        <td>Ajala John</td>
                        <td>Men shirt</td>
                        <td class="status pending">pending</td>
                        <td>20/12/2024</td>
                     </tr>
                     <tr>
                        <td>04</td>
                        <td>Ajala John</td>
                        <td>Men shirt</td>
                        <td class="status success">success</td>
                        <td>20/12/2024</td>
                     </tr>
                  </table>
                 </div>
      <!-- end of table wrapper -->
     
      <footer>
         <cite>&copy; AMAzon. All right reserved.</cite>
      </footer>
        </div>
        <!-- end of right -->
      
    </div>
    <!-- end of container -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="chart.js"></script>
    <script>
      window.closed =()=>{
        <?php unset($_SESSION['name']);?>
      }
    </script>
</body>
</html>