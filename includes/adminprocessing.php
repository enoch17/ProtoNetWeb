<?php
$Bundles = $Customers = $ActiveCustomers = $InActiveCustomers =[];
$_SESSION['cusername']=$_SESSION['cpassword']=$_SESSION['cfirstname']=$_SESSION['clastname']=$_SESSION['caddress']=$_SESSION['cemail']=$_SESSION['cphoneNo']=$_SESSION['cbundle']="";
if(isset($_POST['CreateCustomer'])){CreateCustomer();}
function CreateCustomer()
{
    //Validation
    $username =$_SESSION['cusername'] = $_REQUEST['username'];  
    $password =$_SESSION['cpassword'] = $_REQUEST['password'];
    $firstname = $_SESSION['cfirstname'] = $_REQUEST['firstname'];
    $lastname = $_SESSION['clastname'] = $_REQUEST['lastname'];
    $address =$_SESSION['caddress'] = $_REQUEST['address'];
    $email = $_SESSION['cemail'] = $_REQUEST['email'];
    $phoneNo = $_SESSION['cphoneNo'] = $_REQUEST['phoneNo'];
    $bundle = $_SESSION['cbundle'] = $_REQUEST['bundle'];
    $CtSessions = array($_SESSION['cusername'],$_SESSION['cpassword'],$_SESSION['cfirstname'],
    $_SESSION['clastname'],$_SESSION['caddress'],$_SESSION['cemail'],$_SESSION['cphoneNo'],$_SESSION['cbundle'],);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $_SESSION["error"] = "Email is invalid";
        echo "<script>document.getElementsByName(email).style.border = '1px solid red';</script>";
        $_SESSION['cemail'] = "";
    }
    else if(preg_match("/^[a-zA-Z-' ]*$/",$phoneNo))
    {
        $_SESSION['error'] = "Only Numbers allowed for Phone Number";
        $_SESSION['cphoneNo']="";   
    }
    else
    {
    global $db;
    $type = "Customer";
    // $username $password 
    // $username $type $lastname $firstname $email $address $phoneNo $currentBundleId
    ///remember ti hash passwords
    $password = md5($password);
    if($bundle == "0"){$bundle="--";}
    $query = "INSERT INTO users_tb (Username,Password,Type) VALUES('$username','$password','$type')";
    $result = mysqli_query($db, $query);
    if(!$result)
    {
        $_SESSION['error']= "Username in Use";
        unset($_SESSION['cusername']);
        $_SESSION['cusername']="";
    }
    else
    {
        $query = "INSERT INTO customers_tb (Username,LastName,FirstName,Email,Address,PhoneNo,CurrentBundleId) 
        VALUES('$username','$lastname','$firstname','$email','$address','$phoneNo','$bundle')";
        $result = mysqli_query($db, $query);
        if(!$result)
        {
            $_SESSION['error'] = "Error Creating Customer";
            $query = "DELETE FROM users_tb WHERE Username = '$username'";
            $result = mysqli_query($db,$query);
        }
        else
        {
            $_SESSION['error'] = "Successful";
            $_SESSION['cusername']=$_SESSION['cpassword']=$_SESSION['cfirstname']=$_SESSION['clastname']=$_SESSION['caddress']=$_SESSION['cemail']=$_SESSION['cphoneNo']=$_SESSION['cbundle']="";   
        }
    }}
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
        $_SESSION["error"] = "Error Retrieving Bundles";
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
    }
} 
?>