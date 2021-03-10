<?php include('components/header.html')?>
<?php include('components/navbar.php')?>
<?php include('components/search.php')?>
<?php require('inc/connect.php');?>



<main>
        <section id="slider">
            <div class="titles clearfix"><h1>Watches for people with style</h1></div>
            <div class="featured-image-top">
                <img src="img/featured3.png" alt="cerruti">
            </div>
        </section>



        <section id="latest">
            <div class="divider"></div>
            <div class="home-titles">
                <h1>Style, elegance, image,<br> beauty, reliability</h1>
            </div>

            <div class="container">
                <div class="row">
                        <?php
                        $query = "SELECT * FROM watches WHERE name LIKE '%Cerruti%' LIMIT 4"; 
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){                              
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>             
                                    <div class="col-md-3 col-sm-12"> 
                                            <div class="watches"> 
                                                <div class="watch-item">
                                                        <div class="watch-img">
                                                            <img src="img/<?php echo $row['image'];?>" alt="cerruti" title="<?php echo $row['name']; ?>">
                                                        </div>
                                                            <h3 class="watch-name"><?php echo $row['name']; ?></h3>    
                                                            <p><?php echo "Price: $" . $row['price']; ?><br>
                                                            <a href="inc/remove.php?id=<?php echo $row['id']?>">Remove watch</a></p>  
                                                            
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

        <section id="featured">
            <div class="divider"></div>
            <div class="home-titles">        
                <h1>Featured</h1>
            </div>
            <div class="featured-image-bottom" >
                <img src="img/featured7.png" alt="cerruti">
            </div>
        </section>

        <section id="best-selling">            
            <div class="container">
                <div class="row">
                        <?php
                        $query = "SELECT * FROM watches WHERE name LIKE '%Diesel%' LIMIT 4";
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
                                                            <p><?php echo "Price: " . $row['price']; ?><br>
                                                            <a href="inc/remove.php?id=<?php echo $row['id']?>">Remove watch</a> </p>  
                                                            
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

        <section id="contact">
            <div class="divider"></div>
            <div class="home-titles">        
                <h1>Contact Us</h1>
            </div>
            <div class="contact">
                <div class="contact contact-form">
                    <form action="#">
                        <input type="text" name="fname" placeholder="First name"><br/><br/>
                        <input type="text" name="lname" placeholder="Last name"><br/><br/>
                        <input type="email" name="email" placeholder="Email"><br/><br/>
                        <input type="textarea" name="message" placeholder="Message"><br/><br/>
                        <button>Submit</button>
                    </form>
                </div>
                <div class="contact contact-info">
                    <h2>Contact info</h2>
                    <p><strong>Phone:</strong> +(0)132 456 888</p>
                    <p><strong>Email:</strong> almir@gmail.com</p>                    
                    <p><strong>Address:</strong> Marka Marulica 22,<br> 71000 Sarajevo, BiH</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>

        <section id="about">
            <div class="divider"></div>
            <div class="home-titles">
                <a id="anchor"><h1>About</h1></a>
            </div>
            <div class="text">
                <p><b>Behind the Watch Gallery is a way of thinking about our place in the world and an aspiration to contribute.</b><p>
                <p>We call this perpetual spirit. It is based on a fundamental belief in unlimited human potential, in continuous improvement
                    and lasting excellence, in always pushing the boundaries and taking the long-term view. Our watches are built to last. 
                    So is our contribution to future generations. Discover more about our corporate commitments on gallerywatch.org</p>
            </div>
        </section>



        <section id="insert-watch">
            <div class="divider"></div>
            <div class="home-titles">        
            <a id="insert"><h1>Add watch</h1></a>
            </div>
            <div class="insert">
                <div class="insert insert-form">
                    <form action="inc/insert.php" method="POST">
                        <input type="text" name="name" placeholder="Enter name"><br/><br/>                        
                        <input type="text" name="price" placeholder="Enter price"><br/><br/>
                        <input type="text" name="image" placeholder="Enter image name (img folder)"><br/><br/>
                        <input type="submit" name="insert" value="Add watch"><br/><br/>
                    </form>
                </div>
                <div>
                    <?php require('inc/insert.php'); ?>
                </div>
            <div class="clearfix"></div>
        </section>        
    </main>
    <?php include('components/footer.html');
    mysqli_close($conn);
    exit(1);
    ?>
    
        
    
    