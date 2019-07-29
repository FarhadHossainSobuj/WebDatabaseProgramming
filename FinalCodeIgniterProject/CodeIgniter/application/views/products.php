<h1>Product List</h1>
         
 <div class="product-thumb">
     <h2>Product thumbs will go here...</h2>
     <?php 
     
        echo '<div class="row">';
        foreach($this->a->fetchtable() as $row){
            $pid = $row->p_id;
            $path = base_url()."".$row->filepath;
            $price = $row->price;
            $details = $row->details;
             echo " <div class='col-md-3'>
                        <div class='thumbnail'>
                            <a href='product_detail?id=$pid'>
                                <img src='$path' alt='caption' style='width:200px; width=200px;'>
                                <div class='caption'><p>Price : $price</p></div>
                            </a>
                        </div>
                    </div>";
        }
        echo "</div>";
     ?>


 </div>