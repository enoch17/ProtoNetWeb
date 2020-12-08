<?php
session_start();
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";?>
<!-- Html goes here -->
<div class="btn-group">
    <table style="width: 100%">
        <tr>
            <td><button>New Users</button></td>
            <td><button>Active Users</button></td>
            <td><button>Inactive Users</button></td>
            <td><button>Total Data Usage</button></td>
        </tr>
    </table>
</div>

<!-- html ends here -->
<?php
require "footer.php";
?>