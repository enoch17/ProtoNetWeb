<?php
    require_once "../../includes/connection.php";
    require_once "../../includes/customerprocessing.php";
    require "header.php";
?>
<div id="login-box">
    <div class="left">
        <h1 style="color: black;"></h1>
        <form method="post" action="makereports.php">
            <label for="comment">SELECT A REPORT:</label>

            <select name="report" id="report">
                <option value="Payment">Payment Issue</option>
                <option value="Slow Internet">Slow Internet</option>
                <option value="Internet Activation">Bundle Activation</option>
                <option value="Others">Others</option>
            </select>
            <br>
            <p>
                <label>
                    COMMENT: <br><textarea cols="35" rows="5" name="comment"
                        placeholder="Describe the issue"></textarea></label><br>
            <p id="Error"><?php if($_SESSION['error']!="Successful"){echo $_SESSION['error'];}?></p>
            <p id="Success"><?php if($_SESSION['error']=="Successful"){echo "Successful";}?></p>
            <input type="submit" name="MakeReport" value="SEND REPORT" />
            </br>
            </p>

        </form>
    </div>
    <?
require "footer.php";
?>