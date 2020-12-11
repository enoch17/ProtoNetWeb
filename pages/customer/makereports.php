<link rel="stylesheet" type="text/css" href="css/style.css">
<div id="login-box">
    <div class="left">
        <h1 style = "color: black;"></h1>
        <form method="post" action="createbundle.php">
            <input type="text" name="fullname" placeholder="FULL NAME" value="<?php echo $_SESSION['fullname']?>" required/>
            <input type="text" name="username" placeholder="USER NAME" value="<?php echo $_SESSION['username']?>" required/>
            <input type="text" name="email" placeholder="E MAIL" value="<?php echo $_SESSION['email']?>" required/>
            <label for="comment">SELECT A REPORT:</label>

<select name="report" id="REPORT">
  <option value="payment">PAYMENT ISSUE</option>
  <option value="slowinternet">SLOW INTERNET</option>
  <option value="internetactivation">BUNDLE ACTIVATION</option>
  <option value="others">OTHERS</option>
</select>
<br>
<p>
            <label>
                COMMENT: <br><textarea cols="35" rows="5" name="mes"></textarea></label><br>
            <input type="submit" name="CreateBundle" value="SEND REPORT" />
</br>
</p>
           
        </form>
    </div>






