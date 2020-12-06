<?php 
require "includes/connection.php";
require "includes/loginprocessing.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>ProntoNet</title>
    <link rel="stylesheet" type="text/css" href="css/Index.css">
    <link rel="shortcut icon" href="https://png.pngtree.com/png-clipart/20190904/original/pngtree-internet-icon-png-image_4467503.jpg"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
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
                      <p style="color: orange; text-align: center">
                          <font size="15" ; face="calibri">welcome</font>
                    </p>

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
                <input type="submit" class="btn" style="color: white;" value="Login" name="Login">
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
