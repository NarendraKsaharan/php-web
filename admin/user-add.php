<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <?php include_once("includes/head.php"); ?>
    <style>
        body {
            font-family: sans-serif;
            /* background: -webkit-linear-gradient(to right, #155799, #159957);
            background: linear-gradient(to right, #155799, #159957); */
            color: whitesmoke;
            z-index: 100;
        }
        .form-main {
            width: 100%;
            margin-left: -3%;
            background: -webkit-linear-gradient(to right, #155799, #159957);
            background: linear-gradient(to right, #155799, #159957);
        }


        h1 {
            text-align: center;
            margin: 4px;
            font-size: 38px;
        }
        .form{
            margin-top: 6%;
        }


        form {
            width: 25rem;
            margin: auto;
            color: whitesmoke;
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(11, 15, 13, 0.582);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            padding: 20px 25px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            /* margin: 10px 0; */
            border-radius: 5px;
            padding: 15px 18px;
            box-sizing: border-box;
        }

        button {
            background-color: #030804;
            color: white;
            padding: 14px 20px;
            border-radius: 5px;
            margin: 7px 0;
            width: 100%;
            font-size: 18px;
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
                width: 25rem;
            }
        }

        @media screen and (max-width: 400px) {
            form {
                width: 20rem;
            }
        }
    </style>    
</head>

<body>
<?php include_once("includes/nav.php"); ?>
    <section class="home-section">
    <?php include_once("includes/header.php"); ?>

        <div class="home-content">
            <div class="main-top">
                <div class="top">
                    <div class="sidebar-button">
                        <span class="dashboard">Welcome to Dashboard</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="aas">
                        <a href="">+ Add New Users</a> 
                    </div>
                </div>
            </div>
            <!-- <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Recent Sales</div>
                    <div class="sales-details">
                        <ul class="details">
                            <li class="topic">Date</li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Customer</li>
                            <li><a href="#">Alex Doe</a></li>
                            <li><a href="#">David Mart</a></li>
                            <li><a href="#">Roe Parter</a></li>
                            <li><a href="#">Diana Penty</a></li>
                            <li><a href="#">Martin Paw</a></li>
                            <li><a href="#">Doe Alex</a></li>
                            <li><a href="#">Aiana Lexa</a></li>
                            <li><a href="#">Rexel Mags</a></li>
                            <li><a href="#">Tiana Loths</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Sales</li>
                            <li><a href="#">Delivered</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Returned</a></li>
                            <li><a href="#">Delivered</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Returned</a></li>
                            <li><a href="#">Delivered</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Delivered</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Total</li>
                            <li><a href="#">$204.98</a></li>
                            <li><a href="#">$24.55</a></li>
                            <li><a href="#">$25.88</a></li>
                            <li><a href="#">$170.66</a></li>
                            <li><a href="#">$56.56</a></li>
                            <li><a href="#">$44.95</a></li>
                            <li><a href="#">$67.33</a></li>
                            <li><a href="#">$23.53</a></li>
                            <li><a href="#">$46.52</a></li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="#">See All</a>
                    </div>
                </div>
                
            </div> -->
            
        </div>
        
    </section>
    <section>
        <div class="table">
            <div class="full">
                <div class="form-main">
                    <div class="form">
                        <form action="user-save-dash.php" method="post">
                            <!-- Headings for the form -->
                            <div class="headingsContainer">
                                <h1>Sign Up</h1>
                            </div>

                            <!-- Main container for all inputs -->
                            <div class="mainContainer">
                                <!-- Username -->
                                <!-- <label for="username">Your username</label> -->
                                <input type="text" name="name" >

                                <br><br>
                                <!-- <label for="username">email</label> -->
                                <input type="text" name="email" >

                                <br><br>

                                <!-- Password -->
                                <!-- <label for="pswrd">Your password</label> -->
                                <input type="password" name="password" >
                                <br>
                                <br>
                                <!-- <label for="pswrd">confirm password</label> -->
                                <input type="password" name="cpassword" >

                                <!-- sub container for the checkbox and forgot password link -->
                                <!-- <div class="subcontainer">
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label>
                                    <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                                </div> -->


                                <!-- Submit button -->
                                <button type="submit">Sign Up</button>

                                <!-- Sign up link -->
                                <!-- <p class="register">Not a member? <a href="#">Register here!</a></p> -->

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <footer>
            <div class = "footer">
                <h3>Showing 1 to 10 of 57 entries</h3>
                <h3>Previous  &nbsp <span>1</span> &nbsp 2  &nbsp 3 &nbsp 4 &nbsp 5  &nbsp Next</h3>
            </div>
    </footer> -->

    

</body>

</html>