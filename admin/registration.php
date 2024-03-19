<?php
include_once('config-user.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    

    <style>
        body {
            font-family: sans-serif;
            background: -webkit-linear-gradient(to right, #155799, #159957);
            background: linear-gradient(to right, #155799, #159957);
            color: whitesmoke;
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
            padding-left: 42px;
        }
        /* .right{
            width:35%;
        } */


        h1 {
            text-align: center;
        }
        h3{
            font-size: 24px;
            margin:0px;
        }
        .auto {
             margin-top: 11px;
            font-size: 18px;
        }
        .auto a {
        text-decoration: none;
        font-size: 21px;
        margin-left: 32px;
        }


        form {
            width: 22rem;
            height: 80vh;
            color: whitesmoke;
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: mediumaquamarine;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            padding: 20px 25px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            margin-top: 7px;
            border-radius: 25px;
            padding: 12px 16px;
            box-sizing: border-box;
        }

        button {
            /* background-color: #030804; */
            background-color: #030dcc;
            color: white;
            padding: 10px 16px;
            border-radius: 25px;
            margin-top: 25px;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            opacity: 0.6;
            cursor: pointer;
        }

        .headingsContainer {
            text-align: center;
        }

        .headingsContainer p {
            color: gray;
        }

        .mainContainer {
            padding: 16px;
        }


        .subcontainer {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .subcontainer a {
            font-size: 16px;
            margin-bottom: 12px;
        }

        span.forgotpsd a {
            float: right;
            color: whitesmoke;
            padding-top: 16px;
        }

        .forgotpsd a {
            color: rgb(74, 146, 235);
        }

        .forgotpsd a:link {
            text-decoration: none;
        }

        .register {
            color: white;
            text-align: center;
            margin: 4px;
        }

        .register a {
            color: rgb(74, 146, 235);
        }

        .register a:link {
            text-decoration: none;
        }

        /* Media queries for the responsiveness of the page */
        @media screen and (max-width: 600px) {
            form {
                width: 20rem;
            }
        }

        @media screen and (max-width: 400px) {
            form {
                width: 18rem;
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
            <form action="user-save.php" method="post">
                <!-- Headings for the form -->
                <div class="headingsContainer">
                    <h3>Sign Up</h3>
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
                    <!-- <label for="username">email</label> -->
                    <input type="text" placeholder="email" name="email" required>

                    <br><br>

                    <!-- Password -->
                    <!-- <label for="password">Your password</label> -->
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <br>
                    <br>
                    <!-- <label for="password">confirm password</label> -->
                    <input type="password" placeholder="Confirm Password" name="cpassword" required>

                    <!-- sub container for the checkbox and forgot password link -->
                    <!-- <div class="subcontainer">
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                    </div> -->


                    <!-- Submit button -->
                    <button type="submit">Sign Up</button>

                    <div class="auto">
                        Already registered? <a href="index.php">Login!</a>
                    </div>
                    <!-- Sign up link -->
                    <!-- <p class="register">Not a member? <a href="#">Register here!</a></p> -->

                </div>

            </form>
        </div>
    </div>
</body>

</html>