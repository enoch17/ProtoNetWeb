<?php   
require_once "../../includes/connection.php";
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewBundles();
?>
<!-- Html goes here -->
<section>
    <div class="table-title">
        <h2 style = "color:black;">Bundle Details</h2>
        <div class="search-box">
            <i class="material-icons">&#xE8B6;</i>
            <input type="text" class="form-control" placeholder="Search&hellip;" onkeydown="searchbundle()" id='search'>
        </div>
    </div>
    <table style="width: 100%" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <td>
                    <h3><b>Bundle Name</b></h3>
                </td>
                <td>
                    <h3><b>Description</b></h3>
                </td>
                <td>
                    <h3><b>Bundle Size</b></h3>
                </td>
                <td>
                    <h3><b>Bundle Price</b></h3>
                </td>
                <td>
                    <h3><b>Duration</b></h3>
                </td>
                <td>
                    <h3><b>Actions</b></h3>
                </td>
            </tr>
        </thead>
        <tbody id="details">
            <?php foreach($Bundles as $a)
                    {
                        $id = $a['BundleId'];
                        echo "<tr>";
                        echo "<td>".$a['Name']."</td>";
                        echo "<td>".$a['Description']."</td>";
                        echo "<td>".$a['BundleSize']."</td>";
                        echo "<td>".$a['BundlePrice']."</td>";
                        echo "<td>".$a['Duration']."</td>";
                        echo "<td>
                        <a href='editbundle.php?Id=".$id."' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
                        <a href='#' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>
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
<!-- Script under construction -->
<script>
    function searchbundle()
    {
        search = document.getElementById('search');
        document.getElementById('details').innerHTML = search;
        alert(search);
        <?php foreach($Bundles as $a)
        {
            if($a['Name']== search)
            {
                echo "<tr>";
                echo "<td>".$a['Name']."</td>";
                echo "<td>".$a['Description']."</td>";
                echo "<td>".$a['BundleSize']."</td>";
                echo "<td>".$a['BundlePrice']."</td>";
                echo "<td>".$a['Duration']."</td>";
                echo "<td>
                <a href='editbundle.php?Id=".$id."' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
            </td>";
                // echo "<td><form method='post' action='viewbundles.php'>
                // <input type='submit' class='edit' title='Edit' value='Edit'>
                // </form></td>";
                // echo "<option value='".$a['BundleId']."'>".$a['Name']."</option>";
                echo "</tr>";   
            }
        }
        ?>
    }
</script>
<!-- html ends here -->
<?
require "footer.php";
?>