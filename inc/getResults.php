

        <?php
            require('connect.php');
            if(isset($_GET['criteria'])){
                if(!empty($_GET['criteria'])){

                    $criteria = trim($_GET['criteria']);
                    $criteria = mysqli_real_escape_string($conn, $criteria);
                    $query = "SELECT * FROM watches WHERE name LIKE '%{$criteria}%' and deleted=0";
                    $result = mysqli_query($conn, $query);

                    if(mysqli_num_rows($result) > 0){
                        while($rows = mysqli_fetch_assoc($result)){
        ?>
        <div class="col-md-3 col-sm-12">
            <div id="result">                                        
                <img src="img/<?php echo $rows['image']?>">
                <p><b><?php echo $rows['name']?></b></p>
                <p>Price: <?php echo $rows['price']?></p>
                <?php echo "------------------------<br><br>"; ?>
            </div>    
        </div>
    
        <?php
                    }

                if (mysqli_num_rows($result) > 1){
                        $watch = "watches";
                }else{
                        $watch = "watch";
                    }                    
                    echo "<div class='number-watches-found'>";
                    echo "<p>We have found: " . "<b>" .mysqli_num_rows($result) . " " . $watch;                    
                    echo "</div>";
                    
               }else{
                   
                    echo "No results";
                }
            }else{
                echo "<div class='search-messages'>";
                echo "<p>You need to type in at least one character</p>";
                echo "</div>";
            }
        }
        ?>
  
