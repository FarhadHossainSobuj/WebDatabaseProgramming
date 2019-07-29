
<center><h1>Product Details:</h1><hr></center>


 <div class="product-thumb">

     <?php               

        foreach($this->a->fetchtable2() as $row){
            $pid = $row->p_id;
            $path = base_url()."".$row->filepath;
            $price = $row->price;
            $details = $row->details;
            if($pid == $_GET['id']){
            echo "<div class='bg-1'>
                            <center>
                                <img class='img-responsive' src='$path' alt='Lights' style='width:300px'>
                                <div class='caption'>
                                    <h4>Price : $price</h4>
                                    <h4>Id : $pid</h4>
                                    <h4>Features:</h4>
                                    <h6>$details</h6> 
                                </div>
                            </center>
                        </div>";
            }
        }

     ?>

 </div>