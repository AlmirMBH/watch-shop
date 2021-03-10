<?php include('components/header.html')?>
<?php include('components/navbar.php')?>
<?php require('inc/connect.php');?>



<main>
        <section id="slider">
            <div class="titles">
                <h1>Diesel</h1>
                <h3>For Successful Living</h3>
            </div>          
        </section>

        <section id="diesel">            
            <div class="container">
                <div class="row">
                        <?php
                        $query = "SELECT * FROM watches WHERE name LIKE '%Diesel%' AND price < 420 AND deleted = 0 LIMIT 8";
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){                              
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>             
                                    <div class="col-md-3 col-sm-12"> 
                                            <div class="watches"> 
                                                <div class="watch-item">
                                                        <div class="watch-img">
                                                            <img src="img/<?php echo $row['image']; ?>" alt="diesel" title="<?php echo $row['name']; ?>">
                                                        </div>
                                                            <h3 class="watch-name"><?php echo $row['name']; ?></h3>    
                                                            <p><?php echo "Price: " . $row['price']; ?></p>  
                                                            <a href="inc/remove.php?id=<?php echo $row['id']?>">Remove watch</a> 
                                                </div>
                                            </div>  
                                        </div>                              
                                    <?php                    
                                }
                            }else{
                                echo "No phones";
                            }
                            ?>
                </div>
            </div>
        </section> 

        <section>
            <div class="divider"></div>
            <div class="featured-diesel titles">
                <h1>Featured</h1>
                <h2>Diesel T-832</h2>
                <img src="img/featured12.png" alt="diesel" title="cerruti">   
            </div>      
        </section>

        <section id="cerruti">            
            <div class="container">
                <div class="row">
                        <?php
                        $query = "SELECT * FROM watches WHERE name LIKE '%Diesel%' AND price > 420 AND deleted = 0 LIMIT 4";
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){                              
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>             
                                    <div class="col-md-3 col-sm-12"> 
                                            <div class="watches"> 
                                                <div class="watch-item">
                                                        <div class="watch-img">
                                                            <img src="img/<?php echo $row['image']; ?>" alt="diesel" title="<?php echo $row['name']; ?>">
                                                        </div>
                                                            <h3 class="watch-name"><?php echo $row['name']; ?></h3>    
                                                            <p><?php echo "Price: " . $row['price']; ?></p>  
                                                            <a href="inc/remove.php?id=<?php echo $row['id']?>">Remove watch</a> 
                                                </div>
                                            </div>  
                                        </div>                              
                                    <?php                    
                                }
                            }else{
                                echo "No phones";
                            }
                            ?>
                </div>
            </div>
        </section> 
    </main>
    <?php include('components/footer.html')?>