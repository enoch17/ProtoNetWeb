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
        <h1>EDIT USER</h1>
        <form method="post" action="createcustomer.php">
            <input type="text" name="username" placeholder="Edit Username" value="<?php echo $_SESSION['cusername']?>" required/>
            <input type="text" name="firstname" placeholder="Edit First Name" value="<?php echo $_SESSION['cfirstname']?>" required/>
            <input type="text" name="lastname" placeholder="Edit Last Name" value="<?php echo $_SESSION['clastname']?>" required/>
            <input type="text" name="address" placeholder="Edit Adress" value="<?php echo $_SESSION['caddress']?>" required/>
            <input type="text" name="email" placeholder="Edit E-mail" value="<?php echo $_SESSION['cemail']?>" required/>
            <input type="text" name="phoneNo" placeholder="Edit Phone Number" value="<?php echo $_SESSION['cphoneNo']?>" required/>
            <input type="text" name="password" placeholder="Change Password" value="<?php echo $_SESSION['cpassword']?>" required/>


           
            <p id="Error"><?php if($_SESSION['error']!="Successful"){echo $_SESSION['error'];}?></p>
            <p id="Success"><?php if($_SESSION['error']=="Successful"){echo "Successful";}?></p>
            <input type="submit" name="CreateCustomer" value="Edit User" />
        </form>
    </div>
<!-- html ends here -->
<?
require "footer.php";
?>