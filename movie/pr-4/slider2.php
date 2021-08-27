<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>




</head>
<body>
    <hr class="my-4">

 <div class="container my-4">
          <div class="row ">
   
        <?php


        
      $query = "select * from add_movie";
    $sql = mysqli_query($conn , $query);
      while ($res= mysqli_fetch_array($sql)) {
            $path="images/".$res['image'];
?>         

            <div  class="col-md-3 card border-0 bg-transparent"><a href="3kjg.php">
              
                 
   
              <img class="card-img-top mb-3 " src="<?php echo $path ;?>"  alt="Card image ">
   
                  <h3 class="card-title text-white mb-"><?php echo strtoupper($res['movie_name']);  ?></h3> 
              </a></div>
     <?php
          }?>
         </div>
      </div> 
</body>
</html>