<link rel="stylesheet" type="text/css" href="css/style.css">
<div id="login-box">
    <div class="left">
        <h1 style = "color: black;">MAKE REPORTS</h1>
        <form method="post" action="createbundle.php">
            <input type="text" name="fullname" placeholder="FULL NAME" value="<?php echo $_SESSION['fullname']?>" required/>
            <input type="text" name="username" placeholder="USER NAME" value="<?php echo $_SESSION['username']?>" required/>
            <input type="text" name="email" placeholder="E MAIL" value="<?php echo $_SESSION['email']?>" required/>
            <label>MESSAGE: <br><textarea cols="35" rows="5" name="mes"></textarea></label><br>
            <input type="submit" name="CreateBundle" value="SEND REPORT" />
           
        </form>
    </div>






