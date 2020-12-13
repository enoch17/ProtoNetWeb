<?php
if(isset($_POST['MakeReport'])){MakeReport();}
function MakeReport()
{
    $report = $_REQUEST['report'];
    $comment = $_REQUEST['comment'];
    $report = $report.': '.$comment;
    $username = $_SESSION['username'];
    $datendtime = date('Y-m-d H:i:s');
    global $db;
    $query = "SELECT * FROM reports_tb ORDER BY ReportId DESC LIMIT 1 ";
    $result = mysqli_query($db, $query);
    if(!$result)
    {
        $_SESSION["error"] = "Error while creating report ";
    }
    else
    {
        $count = mysqli_num_rows($result);
        if($count == 0)
        {
            $newId = 00001;
            $query = "INSERT INTO reports_tb VALUES('$newId','$report','$username','$datendtime')";
            $result = mysqli_query($db, $query);
            if(!$result)
            {
                $_SESSION["error"] = "Error while creating report";
            }
            else
            {
                $_SESSION["error"] = "Successful";
            }
        }
        else if($count >= 1)
        {
            $details = mysqli_fetch_assoc($result);
            $prevId = $details['ReportId'];
            $newId = $prevId + 1;
            $query = "INSERT INTO reports_tb VALUES('$newId','$report','$username','$datendtime')";
            $result = mysqli_query($db, $query);
            if(!$result)
            {
                $_SESSION["error"] = "Error while creating report";
            }
            else
            {
                $_SESSION["error"] = "Successful";
            }
        }
    }
}
?>