
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <?php
        require('db.php');
        if(isset($_REQUEST['Name'])){
            $Name = stripslashes($_REQUEST['Name']);
            $Name = mysqli_real_escape_string($con, $Name);
            $Email    = stripslashes($_REQUEST['Email']);
            $Email    = mysqli_real_escape_string($con, $Email);
            $Password = stripslashes($_REQUEST['Password']);
            $Password = mysqli_real_escape_string($con, $Password);
            $query    = "INSERT into `users` (Name, Password , Email)
                         VALUES ('$Name','$Password', '$Email')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "
                      <h3>You are registered successfully.</h3><br/>
                      <p class='link'>Click here to <a href='login.php'>Login</a></p>
                      </div>";
            } else {
                echo "
                      <h3>Required fields are missing.</h3><br/>
                      <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                      </div>";
            }
 } else {
    ?>
    <div class="container">
        <div class="form-box">
            <h1 id = "title">Sign Up</h1>
              <form name = "Registration" class="form " action = "" method = "POST">
                <div class="input-group">
                    <div class="input-field">
                    <div><i class="fas fa-user icon"></i></div>
                        <input type = "text"  name = "Name" placeholder="Username" required/>
                        
                    </div>
                    <div class="input-field"  id = "nameField">
                   <div> <i class="fa fa-envelope icon"></i></div>
                        <input type = "email"  name = "Email" placeholder="email id" required/>
                       
                    </div>
                    <div class="input-field">
                    <div class="icon"><i class="fas fa-lock"></i></div>
                        <input type = "password"  name = "Password" placeholder="password" required/>
                    </div>
                    <p>Forgot password? <a href = "#" > Click Here!</a></p> 
                </div>
                <input type="submit" value="Register" name="submit" class="login-button"/>
               <!-- <div class="btn-field">
                <button type="button" id="signinbtn" >Sign up</button>  
                
                </div> -->
                <p class="link"><a href="login.php">Click to Login</a></p>
              </form>
        </div>
    </div>
    <?php
 }
 ?>
<script>
    let signupbtn = document.getElementById("signupbtn");
    
    let nameField = document.getElementById("nameField");
    let title= document.getElementById("title");
/*
    signinbtn.onclick = function(){
        window.location.href = "login.php";
     //   <a href = "login.php" > Click Here!</a>
       nameField.style.maxHeight = "0";
        title.innerHTML="Sign In";
        signupbtn.classList.add("disable");
        signinbtn.classList.remove("disable");
    } 

    
    signupbtn.onclick = function(){
        nameField.style.maxHeight = "60px";
        title.innerHTML="Sign Up";

    }
*/
</script>
</body>
</html>
