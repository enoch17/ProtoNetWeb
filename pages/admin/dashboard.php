<?php
require_once "../../includes/connection.php";
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewCustomers();
?>
<!-- Html goes here -->
<div class="btn-group">
    <table style="width: 100%">
        <tr>
            <td><button>Users :<?php echo count($Customers)?></button></td>
            <td><button>Active Users :<?php echo count($ActiveCustomers)?></button></td>
            <td><button>Inactive Users:<?php echo count($InActiveCustomers)?></button></td>
            <td><button>Total Data Usage</button></td>
        </tr>
    </table>
</div>

<!-- html ends here -->
<?php
require "footer.php";
?>