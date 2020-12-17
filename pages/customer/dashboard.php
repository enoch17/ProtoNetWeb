<?php
    session_start();
    require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<table style="width: 100%">
<tr>
  	<!-- Hover #1 -->
<td><div class="box-1">
  <div class="btn btn-one">
    <span>SUBSCRIBED PACKAGE</span>
  </div>
</div></td>
 
<!-- Hover #2 -->
<td><div class="box-2">
  <div class="btn btn-two">
    <span>CANCEL SUBSCRIPTION</span>
  </div>
</div></td>

<!-- Hover #3 -->
<td><div class="box-3">
  <div class="btn btn-three">
    <span>SHARE SUBSCRIPTION</span>
  </div>
</div></td>
</tr>
</table>

</body>
</html>
<?require "footer.php"?>