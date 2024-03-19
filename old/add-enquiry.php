<?php
include_once('admin/config-user.php');

?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once('includes/head.php'); ?>

    <style>
        .form-full{
            width:100%;
            background: -webkit-linear-gradient(to right, #03cca4, #03cc4f);
            background: linear-gradient(to right, #03cca4, #03cc4f);
            /* height:100vh; */
            position: fixed;
        }
        .form-main{
            width:40%;
            margin:7% auto;
            background: -webkit-linear-gradient(to right, #03cca4, #03cc4f);
            background: linear-gradient(to right, #1b86f3, #19ecef);
            padding: 20px;
            border-radius: 20px;
        }
        .form-main h2 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
            color: aquamarine;
            font-size: 32px;
        }
        .form-main input,textarea {
            width: 100%;
            padding: 10px;
            margin:6px 0px;
            border-radius:16px;
        }
        .form-main label {
            font-size: 21px;
            font-weight: bold;
            color: paleturquoise;
        }
        .form-main form{
            width:100%;
        }
        .form-main input#submit {
            width: auto;
            background: lightgrey;
            margin-left: 26%;
            padding: 16px 32px;
            margin-top: 12px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: bold;
        }
        .form-main input#submit:hover{
            background: cornsilk;
        }
        label.error {
        color: red;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 1px;
        margin-left:30%;
    }
        
    </style>
</head>
<body>
	<header>
		<?php include_once('includes/menu.php'); ?>
	</header>

    <section class="form">
        <div class="form-full">
            <div class="form-main">
                <form action="enquiry-save.php" method="post" class="register">
                    <h2>Inquiry Form</h2>
                    <label for="">Name:</label>
                    <input type="text" name="name" required><br>
                    <label for="">Email:</label>
                    <input type="email" name="email" required><br>
                    <label for="">Phone</label>
                    <input type="tel" name="phone" required><br>
                    <label for="">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                    <input type="submit" value="Click Here! To Submit" id="submit">
                </form>
            </div>
        </div>
    </section>
	
<script>
$(document).ready(function(){

    $('.register').validate();

});
</script>    
</body>
</html>