<?php     

include('config.php');
session_start();
if(isset($_POST['login_btn'])){
     
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql ="SELECT email,password FROM admin WHERE email='$email' and password='$password'";   

        $query= $conn-> prepare($sql);     
          
          $query-> execute();
        
           $results=$query->fetch();    
         
               if($query->rowCount()) {                   
            $_SESSION['login']=$_POST['email'];
            echo "Connected";
            header('location:index.php');
             
           }               
           else {
            echo "<script>alert('Invalid Details');</script>";   
             }
         }
?>

<head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>

	<style>
	.font{
		font-size: 30px;
		font-family: arial;
		color: #f3b12b;
		text-align: center;
	}

	.form-group{
		font-size: 18px;
		font-family: Monaco;
		color: lightgray;
		text-align: left;

	}
</style>
</head>  

<div class = "section">
    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-5 my-5">
                    
                    <div class = "card-header">
                        
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                        	<h4 class="font">ADMIN LOGIN</h4>
                            <div class="form-group">
                                <label for="">Email id</label>
                                <input type="email" name="email" class="form-control" placeholder="Email id" required="">
                            </div><br>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>

                            <br>
                        
                             
                            <div class="form-group" style="text-align: center;">
                                <button type="submit" name="login_btn" class="btn btn-light">LOGIN</button>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>