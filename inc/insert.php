<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="insert-message">
                <?php        
                    require('connect.php');            
                    if(isset($_POST['insert'])){        
                        if( isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image'])){
                            if(! empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['image'])){

                                $name = trim($_POST['name']);                                
                                $price = trim($_POST['price']);
                                $image = trim($_POST['image']);
                                $name = mysqli_real_escape_string($conn, $name);                                
                                $price = mysqli_real_escape_string($conn, $price);
                                $image = mysqli_real_escape_string($conn, $image);

                                $query = "INSERT INTO watches(name, price, image) VALUES('{$name}', '{$price}', '{$image}')";

                                if(mysqli_query($conn, $query) === TRUE){                                    
                                    header("Location: ../index.php");    
                                    mysqli_close($conn);                                    
                                    die();
                                }else{                                    
                                    
                                    header("Location: ".$_SERVER['HTTP_REFERER']) . "Phone has not been added to your shop!";

                                }
                            }else{                                
                                
                                header("Location: ".$_SERVER['HTTP_REFERER']) . "All fields are required";
                            }
                        }else{                            
                            header("Location: ".$_SERVER['HTTP_REFERER']) . "All fields are required";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>