<?php
require "connection.php";
$Bundles = $Customers = $ActiveCustomers = $InActiveCustomers =[];
function CreateCustomer()
{
    //Validation
    global $db;
    $type = "Customer";
    // $username $password 
    // $username $type $lastname $firstname $email $address $phoneNo $currentBundleId
    $_SESSION = $username;
    $query = "INSERT INTO users_tb (Username,Password,Type) VALUES('$username','$password','$type')";
    $result = mysqli_query($db, $query);
    if(!$result)
    {
        $_SESSION['error']= "Username in Use";
        echo "Username in use";
    }
    else
    {
        $query = "INSERT INTO customers_tb (Username,LastName,FirstName,Email,Address,PhoneNo,CurrentBundleId) 
        VALUES('$username','$lastname','$firstname','$email','$address','$phoneNo','$currentBundleId')";
        $result = mysqli_query($db, $query);
        if(!$result)
        {
            $_SESSION['error'] = "Error Creating Customer";
            $query = "DELETE FROM users_tb WHERE Username = '$username'";
            $result = mysqli_query($db,$query);
        }
        else
        {
            $_SESSION['error'] = "Success";
        }
    }
}

function ViewCustomers()
{
    global $db, $Customers ,$ActiveCustomers, $InActiveCustomers;
    $query = "SELECT * FROM customers_tb  ";
    $result = mysqli_query($db, $query);
    if(!$result)
    {
        $_SESSION["error"] = "Error Retrieving Customer Details";
    }
    else
    {
        $i = 0;
        $count = mysqli_num_rows($result);
        while($i<$count)
        {
            $details = mysqli_fetch_assoc($result);
            $Customers[$i] =$details;
            if($details['CurrentBundleId']=='--')
            {
                $InActiveCustomers[$i]=$details;
            }
            else{$ActiveCustomers[$i] =$details;}
            $i = $i +1;
        }
    }    
}

function EditCustomer()
{
    // $username $password 
    // $username $type $lastname $firstname $email $address $phoneNo $currentBundleId
    
}

function CreateBundle()
{
    global $db;
    // $Name = "NewBundle"; $Description= "FirstBundle"; $BundleSize="30"; $Duration="30";
    $query = "SELECT * FROM bundles_tb ORDER BY BundleId DESC LIMIT 1 ";
    $result = mysqli_query($db, $query);
    if(!$result)
    {
        $_SESSION["error"] = "Error Updating Bundles ";
    }
    else
    {
        $count = mysqli_num_rows($result);
        if($count == 0)
        {
            $newId = 00001;
            $query = "INSERT INTO bundles_tb (BundleId , Name,Description,BundleSize,Duration) VALUES('$newId','$Name','$Description','$BundleSize', '$Duration')";
            $result = mysqli_query($db, $query);
            if(!$result)
            {
                $_SESSION["error"] = "Error Updating Bundles";
            }
            else
            {
                $_SESSION["error"] = "Success";
            }
        }
        else if($count == 1)
        {
            $details = mysqli_fetch_assoc($result);
            $prevId = $details['BundleId'];
            $newId = $prevId + 1;
            $query = "INSERT INTO bundles_tb (BundleId, Name,Description,BundleSize,Duration) VALUES('$newId','$Name','$Description','$BundleSize', '$Duration')";
            $result = mysqli_query($db, $query);
            if(!$result)
            {
                $_SESSION["error"] = "Error Updating Bundles";;
            }
            else
            {
                $_SESSION["error"] = "Success";
            }
        }
    }    
}

function ViewBundles()
{
    global $db;
    global $Bundles;
    $query = "SELECT * FROM bundles_tb  ";
    $result = mysqli_query($db, $query);
    if(!$result)
    {
        $_SESSION["error"] = "Error Retrieving";
    }
    else
    {
        $i = 0;
        $count = mysqli_num_rows($result);
        while($i<$count)
        {
            $details = mysqli_fetch_assoc($result);
            $Bundles[$i] =$details;
            $i = $i +1;
        }
        // echo $Bundles[0]['BundleId'];
    }
} 
?>