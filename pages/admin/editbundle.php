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
        <h1>EDIT BUNDLE</h1>
        <form method="post" action="createcustomer.php">
            <input type="text" name="existingbundle" placeholder="Existing Bundle" value="<?php echo $_SESSION['cexistingbundle']?>" required/>
            <input type="text" name="newbundle" placeholder="New Bundle" value="<?php echo $_SESSION['cnewbundle']?>" required/>
            <input type="text" name="newbundle" placeholder="New Bundle Description" value="<?php echo $_SESSION['cnewbundle']?>" required/>
            <input type="text" name="newbundle" placeholder="New Bundle Duration" value="<?php echo $_SESSION['cnewbundle']?>" required/>



           
            <p id="Error"><?php if($_SESSION['error']!="Successful"){echo $_SESSION['error'];}?></p>
            <p id="Success"><?php if($_SESSION['error']=="Successful"){echo "Successful";}?></p>
            <input type="submit" name="CreateCustomer" value="Edit Bundle" />
        </form>
    </div>
<!-- html ends here -->
<?
require "footer.php";
?>