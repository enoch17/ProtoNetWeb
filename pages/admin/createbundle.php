<?php   
require_once "../../includes/connection.php";
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewBundles();
?>
<!-- Html goes here -->
<div id="login-box">
    <div class="left">
        <h1>CREATE BUNDLE</h1>
        <form method="post" action="createbundle.php">
            <input type="text" name="bundlename" placeholder="Bundle Name" value="<?php echo $_SESSION['bundlename']?>" required/>
            <input type="text" name="bundlesize" placeholder="Bundle Size" value="<?php echo $_SESSION['bundlesize']?>" required/>
            <input type="text" name="description" placeholder="Description" value="<?php echo $_SESSION['description']?>" required/>
            <input type="text" name="duration" placeholder="Duration in Days" value="<?php echo $_SESSION['duration']?>" required/>
           

            <p id="Error"><?php if($_SESSION['error']!="Successful"){echo $_SESSION['error'];}?></p>
            <p id="Success"><?php if($_SESSION['error']=="Successful"){echo "Successful";}?></p>
            <input type="submit" name="CreateBundle" value="Create Bundle" />
        </form>
    </div>
<!-- html ends here -->
<?
require "footer.php";
?>