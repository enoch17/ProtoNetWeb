<?php   
require_once "../../includes/connection.php";
require_once "initsessions.php";
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewBundles();
?>
<!-- Html goes here -->
<div id="login-box">
    <div class="left">
        <h1 style = "color: black;">CREATE USER</h1>
        <form method="post" action="createcustomer.php">
            <input type="text" name="username" placeholder="Username" value="<?php echo $_SESSION['cusername']?>" required/>
            <input type="text" name="firstname" placeholder="First Name" value="<?php echo $_SESSION['cfirstname']?>" required/>
            <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $_SESSION['clastname']?>" required/>
            <input type="text" name="address" placeholder="Adress" value="<?php echo $_SESSION['caddress']?>" required/>
            <input type="text" name="email" placeholder="E-mail" value="<?php echo $_SESSION['cemail']?>" required/>
            <input type="text" name="phoneNo" placeholder="Phone Number" value="<?php echo $_SESSION['cphoneNo']?>" required/>
            <input type="text" name="password" placeholder="Initial Password" value="<?php echo $_SESSION['cpassword']?>" required/>

            <p>
                <label style="color:black;">Select Bundle
                <select id="bundle" name="bundle">
                    <option value="0">None</option>
                    <?php foreach($Bundles as $a)
                    {
                        echo "<option value='".$a['BundleId']."'>".$a['Name']."</option>";
                    }
                ?>
                </label>
                </select>
            </p>
            <p id="Error"><?php if($_SESSION['error']!="Successful"){echo $_SESSION['error'];}?></p>
            <p id="Success"><?php if($_SESSION['error']=="Successful"){echo "Successful";}?></p>
            <input type="submit" name="CreateCustomer" value="Create User" />
        </form>
    </div>
<!-- html ends here -->
<?
require "footer.php";
?>