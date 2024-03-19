<?php
include_once('config-user.php');
if(isset($_SESSION['isLoggedIn'])) {
  header("location: dashboard.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

<style>
   body {
    font-family:sans-serif; 
    background: -webkit-linear-gradient(to right, #155799, #159957);  
    background: linear-gradient(to right, #155799, #159957); 
    color:whitesmoke;
  }
  .main{
            width:100%;
            /* float:left; */
            display:flex;
            background:-webkit-linear-gradient(to right, #155799, #159957);
            padding:28px 0px;
        }
        .img{
            width:100%;
            float:left;
            height:100%; 
            
        }
        img{
            width:100%;
            display:block;
            height:100%;
            border-radius:16px;

        }
        .left{
            width:60%;
            padding-left:36px;
        }
        /* .right{
            width:28%;
        } */


        h1 {
            text-align: center;
        }
        h3 {
          font-size: 32px;
          margin: 16px;
        }

  form{
    width:22rem;
    height:80vh;
    color:whitesmoke;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;
  }

  input[type=text], input[type=password]{
    width: 100%;
    margin: 8px 0;
    border-radius: 25px;
    padding: 15px 20px;
    box-sizing: border-box;
  }

    button {
    background-color: #030804;
    color: white;
    padding: 15px 20px;
    border-radius: 25px;
    margin: 6px 0;
    width: 100%;
    font-size: 16px;
  }

  button:hover {
    opacity: 0.6;
    cursor: pointer;
  }

  .headingsContainer{
    text-align: center;
  }

  .headingsContainer p{
    color: gray;
  }
  .mainContainer{
    padding: 16px;
  }


  .subcontainer{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
  }

  .subcontainer a{
    font-size: 16px;
    margin-bottom: 12px;
  }

  span.forgotpsd a {
    float: right;
    color: whitesmoke;
    padding-top: 16px;
  }

  .forgotpsd a{
    color: rgb(74, 146, 235);
  }
  
  .forgotpsd a:link{
    text-decoration: none;
  }

  .register{
    color: white;
    text-align: center;
  }
  
  .register a{
    color: rgb(74, 146, 235);
  }
  
  .register a:link{
    text-decoration: none;
  }

  /* Media queries for the responsiveness of the page */
  @media screen and (max-width: 600px) {
    form{
      width: 25rem;
    }
  }
  
  @media screen and (max-width: 400px) {
    form{
      width: 20rem;
    }
  }


</style>
</head>
<body>
    <div class="main">
        <div class="left">
            <div class="img">
                <img src="images/side.jpeg" alt="Somthing Went wrong">
            </div>
        </div>
        <div class="right">
              <form action="login.php" method="post">
              <!-- Headings for the form -->
              <div class="headingsContainer">
                  <h3>Sign in</h3>
              </div>
<?php
include_once('message-user.php');
?>

              <!-- Main container for all inputs -->
              <div class="mainContainer">
                  <!-- Username -->
                  <!-- <label for="username">Your username</label> -->
                  <input type="text" placeholder="Enter Username" name="name" required>

                  <br><br>

                  <!-- Password -->
                  <!-- <label for="password">Your password</label> -->
                  <input type="password" placeholder="Enter Password" name="password" required>

                  <!-- sub container for the checkbox and forgot password link -->
                  <div class="subcontainer">
                      <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                      </label>
                      <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                  </div>


                  <!-- Submit button -->
                  <button type="submit">Sign in</button>

                  <!-- Sign up link -->
                  <p class="register">New here?  <a href="registration.php">Create an account</a></p>

              </div>

          </form>
        </div>
    </div>

</body>
</html>
