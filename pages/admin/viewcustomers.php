<?php   
require_once "../../includes/connection.php";
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewCustomers();
?>
<!-- Html goes here -->
<section>
    <div class="table-title">
        <h2 style = "color:black;">User Details</h2>
        <div class="search-box">
            <i class="material-icons">&#xE8B6;</i>
            <input type="text" class="form-control" placeholder="Search&hellip;" onkeydown="searchbundle()" id='search'>
        </div>
    </div>
    <table style="width: 100%" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <td>
                    <h3><b>Username</b></h3>
                </td>
                <td>
                    <h3><b>Last Name</b></h3>
                </td>
                <td>
                    <h3><b>First Name</b></h3>
                </td>
                <td>
                    <h3><b>Email</b></h3>
                </td>
                <td>
                    <h3><b>Address</b></h3>
                </td>
                <td>
                    <h3><b>PhoneNo</b></h3>
                </td>
                <td>
                    <h3><b>Current Bundle</b></h3>
                </td>
                <td>
                    <h3><b>Actions</b></h3>
                </td>
            </tr>
        </thead>
        <tbody id="details">
            <?php foreach($Customers as $a)
                    {
                        $id = $a['Username'];
                        echo "<tr>";
                        echo "<td>".$a['Username']."</td>";
                        echo "<td>".$a['LastName']."</td>";
                        echo "<td>".$a['FirstName']."</td>";
                        echo "<td>".$a['Email']."</td>";
                        echo "<td>".$a['Address']."</td>";
                        echo "<td>".$a['PhoneNo']."</td>";
                        echo "<td>".$a[0]."</td>";
                        echo "<td>
                        <a href='editcustomer.php?Uid=".$id."' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
                    </td>";
                        // echo "<td><form method='post' action='viewbundles.php'>
                        // <input type='submit' class='edit' title='Edit' value='Edit'>
                        // </form></td>";
                        // echo "<option value='".$a['BundleId']."'>".$a['Name']."</option>";
                        echo "</tr>";
                    }?>
        </tbody>
    </table>
</section>
<!-- html ends here -->
<?
require "footer.php";
?>