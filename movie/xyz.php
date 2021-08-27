<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>


<form id="basic-form" action="" method="post">
<p>
<label for="name">Name <span>(required, at least 3 characters)</span></label>
<input id="name" name="name" minlength="3" type="text" required>
</p>
<p>
<label for="email">E-Mail <span>(required)</span></label>
<input id="email" type="email" name="email" id="email" required>
</p>
<p>
<input class="submit" type="submit" value="SUBMIT">
</p>
</form>

<script>$(document).ready(function() {
$("#basic-form").validate();
});</script>

$(function() {
  
  $("form[name='register']").validate({

    rules: {
     
      name: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
      // contactno: {
      //   required: true,
      //   minlength: 5
      // }
    },
    
    messages: {
      name: "Please enter your name",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      // contactno: {
      //   required: "Please provide a password",
      //   minlength: "Your password must be at least 5 characters long"
      // },
      email: "Please enter a valid email address"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});


Name: Bhavya Sheth
Date: 26/08/2021
In time: 09:51 AM

-> Discussion with team.
-> Meeting with Kushal Sir.
-> Editing in user's home page.
-> Tried to implement bootstrap classes on user home page.
-> Solving error of search bar.
-> R&D about search using AJAX.
-> Completed livesearch of movies on user home page using ajax.

Out time: 7:17 pm

----------------------------------------------------------------
RUN

<?php
include('config.php');

if(isset($_POST['register']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $contactno = $_POST['contactno'];
    

    $query = "INSERT INTO users(name, email, password, contactno) VALUES('$name','$email','$password','$contactno')";

    //echo $query;

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo"Account created successfully";
        //   header("location:setexam.php");
//echo "<script>alert('CREATE')</script>";
        
    }
    else
    {
        echo "Failed" ;
       
          // echo "<script>window.location.href='setexam.php';</script>";
       
    }
}

?>

<head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jquery-func.js"></script>


  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
 
    <!-- <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="js/form-validation.js"></script>
 -->

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

  form .error {
  color: red;
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

                        <form name="register" action="#" id="register" method="POST">
                          <h4 class="font">REGISTER!!</h4>

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="name" name="name" class="form-control" placeholder="Enter name">

                            </div><br>

                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            </div><br>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Create Password"></div></br>

                                <div class="form-group">
                                <label for="">Contact Number</label>
                                <input type="number" name="contactno" class="form-control" placeholder="Enter Contact Number"></div></br>

                            <br>
                        
                             
                            <div class="form-group" style="text-align: center;">
                                <button type="submit" name="register" class="btn btn-light">REGISTER</button>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>


<script>
$(function() {
  
  $("form[name='register']").validate({

    rules: {
     
      //name: "required",
      contactno: "required",
      name: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
      // contactno: {
      //   required: true,
      //   minlength: 5
      // }
    },
    
    messages: {
      name: "Please enter your name",

      // contactno: {
      //   required: "Please provide a password",
      //   minlength: "Your password must be at least 5 characters long"
      // },

      contactno: "Please enter your contact number ",


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      // contactno: {
      //   required: "Please provide a password",
      //   minlength: "Your password must be at least 5 characters long"
      // },
      email: "Please enter a valid email address"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>  
