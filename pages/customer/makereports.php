<?php
    require_once "../../includes/connection.php";
    require_once "../../includes/customerprocessing.php";
    require "header.php";
?>
<div id="login-box">
    <div class="left">
        <h1 style = "color: black;">MAKE REPORTS</h1>
        <form method="post" action="makereports.php">
            <label>Report: <br><textarea cols="35" rows="5" name="report" required></textarea></label><br>
            <p id="Error"><?php if($_SESSION['error']!="Successful"){echo $_SESSION['error'];}?></p>
            <p id="Success"><?php if($_SESSION['error']=="Successful"){echo "Successful";}?></p>
            <input type="submit" name="MakeReport" value="Send Report" />
        </form>
    </div>
<?
require "footer.php";
?>





