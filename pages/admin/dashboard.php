<?php
session_start();
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
<?
require "footer.php";
?>