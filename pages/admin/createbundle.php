<?php   
require_once "../../includes/connection.php";
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewBundles();
?>
<!-- Html goes here -->
<div id="login-box">
    <div class="left">
        <h1>CREATE BUNDLE</h1>
        <form method="post" action="createcustomer.php">
            <input type="text" name="bundlename" placeholder="Bundle Name" value="<?php echo $_SESSION['cbundlename']?>" required/>
            <input type="text" name="bundlesize" placeholder="Bundle Size" value="<?php echo $_SESSION['cbundlesize']?>" required/>
            <input type="text" name="description" placeholder="Description" value="<?php echo $_SESSION['cdescription']?>" required/>
            <input type="text" name="Duration" placeholder="Duration" value="<?php echo $_SESSION['cduration']?>" required/>
           

            <p id="Error"><?php if($_SESSION['error']!="Successful"){echo $_SESSION['error'];}?></p>
            <p id="Success"><?php if($_SESSION['error']=="Successful"){echo "Successful";}?></p>
            <input type="submit" name="CreateBundle" value="Create Bundle" />
        </form>
    </div>
<!-- html ends here -->
<?
require "footer.php";
?>