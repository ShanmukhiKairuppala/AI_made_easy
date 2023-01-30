
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <?php
    require('db.php');
     session_start();
        
        if(isset($_POST['Name'])){
         //  $Name = stripslashes($_REQUEST['Name']);
        //    $Name = mysqli_real_escape_string($con, $Name); 
           /* $Email    = stripslashes($_REQUEST['Email']);
            $Email    = mysqli_real_escape_string($con, $Email);   */
            $Name = $_POST['Name'];
            $Password = $_POST['Password'];
         //   $Password = stripslashes($_REQUEST['Password']);
          //  $Password = mysqli_real_escape_string($con, $Password);
        $query = "SELECT * FROM `users` WHERE Name = '$Name' and Password = '$Password' ";
            $result   = mysqli_query($con, $query) ;
            $rows = mysqli_num_rows($result);
        if ($rows > 0) {
            $_SESSION['Name'] = $Name;
            while($row = mysqli_fetch_assoc($result)){
               // $role = $row["level"];
               // if($role==10){
               //     echo "welcome " . $Nmae;
                //I    echo "<a href = 'demo1.html'>mainpage </a>";
               // }
                echo "
                <center>
                <h2>click on the below dashboard link</h2><br><h3> <a href = 'dashboard.php'>Dashboard</a></h3>
                <br>
                </center>";
            }


            // Redirect to user dashboard page
           // header("Location: dashboard.php");
        } else {
            echo "
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }

  }
  else {
    ?>
    <div class="container">
        <div class="form-box">
            <h1 id = "title">Sign In</h1>
              <form class = "form" action = "" method = "POST" name = "login">
                <div class="input-group">
                    <div class="input-field">
                    <div ><i class="fas fa-user icon"></i></div>
                        <input type = "text"  name = "Name" placeholder="Username">
                    </div>
                  <!--  <div class="input-field"  id = "nameField">
                        <input type = "email"  name = "Email" placeholder="email id">
                    </div> -->
                    <div class="input-field">
                    <div class="icon"><i class="fas fa-lock"></i></div>
                    <input type = "password"  name = "Password" placeholder="password">
                        
                    </div>
                    <p>Forgot password? <a href = "#" > Click Here!</a></p> 
                </div>
                <input type="submit" value="Login" name="submit" class="login-button"/>
                 <!-- <div class="btn-field">
                  <button type="button" id="signinbtn" >Sign in</button>  
                  <input type="submit" value="Login" name="submit" class="login-button"/>
                </div>-->
                <p class="link"><a href="registration.php">New Registration</a></p>
              </form>
        </div>
    </div>
    <?php
 }
 ?>
<script>
   // let signupbtn = document.getElementById("signupbtn");
    let signinbtn = document.getElementById("signinbtn");
  //  let nameField = document.getElementById("nameField");
    let title= document.getElementById("title");
/*
    signinbtn.onclick = function(){
        nameField.style.maxHeight = "0";
       // title.innerHTML="Sign In";
       // signupbtn.classList.remove("disable");
        signinbtn.classList.add("disable");
    }

   
    signupbtn.onclick = function(){
        window.location.href = "registration.php";
      /*  nameField.style.maxHeight = "60px";
        title.innerHTML="Sign Up";
        signupbtn.classList.remove("disable");
        signinbtn.classList.add("disable");
    }
*/
</script>
</body>
</html>