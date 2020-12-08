<?php   
require_once "../../includes/connection.php";
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewBundles();
?>
<!-- Html goes here -->
<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<section>
    <table style="width: 100%" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <td>Bundle Name</td>
                <td>Description</td>
                <td>Bundle Size</td>
                <td>Duration</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($Bundles as $a)
                    {
                        $id = $a['BundleId'];
                        echo "<tr>";
                        echo "<td>".$a['Name']."</td>";
                        echo "<td>".$a['Description']."</td>";
                        echo "<td>".$a['BundleSize']."</td>";
                        echo "<td>".$a['Duration']."</td>";
                        echo "<td>
                        <a href='editbundle.php?Id=".$id."' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
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