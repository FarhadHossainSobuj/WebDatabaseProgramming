<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../style.css">
    <script>
        function search(){
           var input, filter, table, tr, td,td2, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            td2 = tr[i].getElementsByTagName("td")[2];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            } 
              if (td2) {
              txtValue = td2.textContent || td2.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          } 
        }
    </script>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-warning">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">KenaBecha.com</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="view/productform.php">Add Product</a></li>
              <li><a href="view/productlist.php">Product List</a></li>
              <li><a href="view/userlist.php">User List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            
            <li><a href="view/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
        <!--        Navigation End here-->
        <center>
        <h1>User list goes here</h1><br><br>
        <input type="text" id="myInput" placeholder="Search by name or id" onkeyup="search();">
        <table width="50%" border="1" id="myTable">
            
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        <?php include("../model/alluser.php");?> 
        </center>
        
        <footer class="container-fluid bg-4 text-center">
          <p>Copyrighted By <a href="https://www.facebook.com/farhadhossain683">Farhad Hossain</a></p> 
        </footer>
    </div> 
    
</body>
</html>
