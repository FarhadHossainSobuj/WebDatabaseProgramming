<div class="row">
 <div class="col-md-3 col-sm-3"></div>
 <div class="col-md-6 col-sm-6">

     <h2>Add the product details:</h2> <hr>
    <form action="<?php echo base_url()."index.php/Main/addProductDetails"; ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="productName">Product Name:</label>
        <input type="text" class="form-control" name="productName" max="20" required>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" class="form-control" name="productPrice"  required>
      </div>
      <div class="form-group">
        <label for="details">Details:</label>
          <textarea class="form-control" name="productDetails" maxlength="250"></textarea>
      </div>
      <div class="form-group">
        <label for="image">Upload product image:</label>
          <input type="file" class="form-control" name="productImage"  required>
      </div>


      <input type="submit" class="btn btn-default" value="Add">
    </form>
 </div>

 <div class="col-md-3 col-sm-3"></div>
</div>