<?php 
require "includes/header.php";
require "includes/loginprocessing.php";
?>
<!DOCTYPE html>
<html>

<body>
    <img class="wave" src="img/">
    <div class="container">
        <div class="img">
            <img src="img/">
        </div>
        <div class="login-content">
            <form action="Index.php" method="post">
                <img src="img/">
                <h1 class="title">
                    <font size="7" ; face="calibri">welcome

                    </font>
                </h1>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" onkeydown="clearMessage()" name="username" value="<?php echo $_SESSION['username']?>">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" onkeydown="clearMessage()" name="password">
                    </div>
                </div>
                <p style="text-align: center;" id="message"><?php echo $_SESSION['error']?></p>
                <input type="submit" class="btn" style="color: white;" value="Login" name="ctLogin">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/Index.js"></script>
    <script>
        function clearMessage()
        {
            document.getElementById('message').innerHTML = "";
        }
    </script>
</body>

</html>
<?php ?>