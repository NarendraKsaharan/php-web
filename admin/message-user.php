<style>
    .success{
        color: blue;
        background: lightcyan;
        border: 1px solid #000;
        border-radius: 15px;
        padding: 10px;
        width: 82%;
        font-weight: bold;
        margin-left: 30%;
        margin-top: 9%;
        text-align: center;
    }
    .error{
        color: red;
        background: lightcyan;
        border: 1px solid #000;
        border-radius: 15px;
        padding: 10px;
        width: 82%;
        font-weight: bold;
        margin-left: 30%;
        margin-top: 9%;
        text-align:center;
    }
</style>
<?php
include_once('config-user.php');

if (isset($_SESSION['success'])) {
    echo "<div class='success'>".$_SESSION['success']."</div>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo "<div class='error'>".$_SESSION['error']."</div>";
    unset($_SESSION['error']);
}

?>