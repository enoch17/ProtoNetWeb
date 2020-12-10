<?php   
require_once "../../includes/connection.php";
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewTransactions();
?>
<!-- Html goes here -->
<section>
    <div class="table-title">
        <h2 style = "color:black;">Transaction Details</h2>
        <div class="search-box">
            <i class="material-icons">&#xE8B6;</i>
            <input type="text" class="form-control" placeholder="Search&hellip;" onkeydown="searchtransaction()" id='search'>
        </div>
    </div>
    <table style="width: 100%" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <td>
                    <h3><b>Transaction Id</b></h3>
                </td>
                <td>
                    <h3><b>Bundle Name</b></h3>
                </td>
                <td>
                    <h3><b>Cost</b></h3>
                </td>
                <td>
                    <h3><b>Username</b></h3>
                </td>
                <td>
                    <h3><b>Status</b></h3>
                </td>
                <td>
                    <h3><b>Date & Time</b></h3>
                </td>
            </tr>
        </thead>
        <tbody id="details">
            <?php foreach($Transactions as $a)
                    {
                        echo "<tr>";
                        echo "<td>".$a['TransactionId']."</td>";
                        echo "<td>".$a['BundleName']."</td>";
                        echo "<td>".$a['Cost']."</td>";
                        echo "<td>".$a['Username']."</td>";
                        echo "<td>".$a['Status']."</td>";
                        echo "<td>".$a['DateandTime']."</td>";
                        echo "</tr>";
                    }?>
        </tbody>
    </table>
</section>
<!-- Script under construction -->
<script>
    function searchbundle()
    {}
</script>
<!-- html ends here -->
<?
require "footer.php";
?>