<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script> -->
    
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-warning">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="../index.php">KenaBecha.com</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="../index.php">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="productform.php">Add Product</a></li>
              <li  style="font-weight: bold"><a href="#">Product List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">           
              
            
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
        <!--        Navigation End here-->
        <h1>Product List</h1>
         
         <div class="product-thumb">
             <h2>Product thumbs will go here...</h2>
             <?php include("productthumbnail.php"); 
             ?>
             
             
         </div>
        
        <footer class="container-fluid bg-4 text-center">
          <p>Copyrighted By <a href="https://www.facebook.com/farhadhossain683">Farhad Hossain</a></p> 
        </footer>
    </div> 
    
</body>
</html>