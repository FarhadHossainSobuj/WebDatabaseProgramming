<body>
    <div class="container">
        <nav class="navbar navbar-warning">
          <div class="container-fluid">
            <div class="navbar-header">
             <a class="navbar-brand"  href='<?php echo base_url()."index.php/Main/data"; ?>'>KenaBecha.com</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href='<?php echo base_url()."index.php/Main/data"; ?>'>Home</a></li>
              <li><a href='<?php echo base_url()."index.php/Main/addProduct"; ?>'>Add Product</a></li>
              <li><a href='<?php echo base_url()."index.php/Main/productList"; ?>'>Product List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">              
            <li><a href='<?php echo base_url()."index.php/Main/logout"; ?>'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
        <!--        Navigation End here-->
