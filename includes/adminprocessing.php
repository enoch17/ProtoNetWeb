<?php
$_SESSION['error']="";
$Bundles = $Customers = $ActiveCustomers = $InActiveCustomers = $BIdndName=[];
if(isset($_POST['CreateCustomer'])){CreateCustomer();}
if(isset($_POST['CreateBundle'])){CreateBundle();}
if(isset($_GET['Id'])){ViewBundles();PreEditBundle();}
if(isset($_GET['Uid'])){ViewCustomers();PreEditCustomer();}
if(isset($_POST['EditBundle'])){EditBundle();}
if(isset($_POST['EditCustomer'])){EditCustomer();}
function CreateCustomer()
{
    $_SESSION['cusername']=$_SESSION['cpassword']=$_SESSION['cfirstname']=$_SESSION['clastname']=$_SESSION['caddress']=$_SESSION['cemail']=$_SESSION['cphoneNo']=$_SESSION['cbundle']="";
    //Validation
    $username =$_SESSION['cusername'] = $_REQUEST['username'];  
    $password =$_SESSION['cpassword'] = $_REQUEST['password'];
    $firstname = $_SESSION['cfirstname'] = $_REQUEST['firstname'];
    $lastname = $_SESSION['clastname'] = $_REQUEST['lastname'];
    $address =$_SESSION['caddress'] = $_REQUEST['address'];
    $email = $_SESSION['cemail'] = $_REQUEST['email'];
    $phoneNo = $_SESSION['cphoneNo'] = $_REQUEST['phoneNo'];
    $bundle = $_SESSION['cbundle'] = $_REQUEST['bundle'];
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
    ViewBundles();
    global $db, $Customers ,$ActiveCustomers, $InActiveCustomers, $BIdndName;
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
            if($details['CurrentBundleId']=='--')
            {
                array_push($details,"Not Active");
                $Customers[$i] =$details;
                $InActiveCustomers[$i]=$details;
            }
            else{
                array_push($details,$BIdndName[$details['CurrentBundleId']]);
                $Customers[$i] =$details;
                $ActiveCustomers[$i] =$details;
            }
            $i = $i +1;
        }
    }    
}
function PreEditCustomer()
{
    global $Customers;
    $Id = $_GET['Uid'];
    foreach($Customers as $a)
    {
        if($a['Username'] == $Id)
        {
            $_SESSION['InitUsername']= $Id;
            $_SESSION['cusername'] = $a['Username'];
            $_SESSION['clastname']= $a['LastName'];
            $_SESSION['cfirstname']=$a['FirstName'];
            $_SESSION['caddress']= $a['Address'];
            $_SESSION['cemail']=$a['Email'];
            $_SESSION['cphoneNo']=$a['PhoneNo'];
        }
    }
}

function EditCustomer()
{    //Validation
    $username =$_SESSION['cusername'] = $_REQUEST['username'];  
    $password =$_SESSION['cpassword'] = $_REQUEST['password'];
    $firstname = $_SESSION['cfirstname'] = $_REQUEST['firstname'];
    $lastname = $_SESSION['clastname'] = $_REQUEST['lastname'];
    $address =$_SESSION['caddress'] = $_REQUEST['address'];
    $email = $_SESSION['cemail'] = $_REQUEST['email'];
    $phoneNo = $_SESSION['cphoneNo'] = $_REQUEST['phoneNo'];
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
    $query = "UPDATE users_tb SET Password='$password' WHERE Username='$username'";
    $result = mysqli_query($db, $query);
    if(!$result)
    {
        $_SESSION['error']= "Error Updating User";
    }
    else
    {
        $query = "UPDATE customers_tb SET LastName='$lastname',FirstName='$firstname',Email='$email',Address='$address',PhoneNo='$phoneNo' WHERE Username='$username'";
        $result = mysqli_query($db, $query);
        if(!$result)
        {
            $_SESSION['error'] = "Error Updating User";
            $result = mysqli_query($db,$query);
        }
        else
        {
            $_SESSION['error'] = "Successful";
            $_SESSION['cusername']=$_SESSION['cpassword']=$_SESSION['cfirstname']=$_SESSION['clastname']=$_SESSION['caddress']=$_SESSION['cemail']=$_SESSION['cphoneNo']=$_SESSION['cbundle']="";   
            echo "<script>alert('Successful')</script>";
            echo '<script>window.location="../admin/viewcustomers.php"</script>';
        }
    }}
    
}

function CreateBundle()
{
    $_SESSION['bundlename']=$_SESSION['bundlesize']=$_SESSION['description']=$_SESSION["duration"]="";
    $bundlename =$_SESSION['bundlename'] = $_REQUEST['bundlename'];  
    $bundlesize =$_SESSION['bundlesize'] = $_REQUEST['bundlesize'];
    $duration = $_SESSION['duration'] = $_REQUEST['duration'];
    $description = $_SESSION['description'] = $_REQUEST['description'];
    if(!preg_match("/^[1-9][0-9]{0,3}$/",$duration))
    {
        $_SESSION['error']= "Duration should be between 0-999 Days";
        $_SESSION['duration']="";
    }
    else{
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
            $query = "INSERT INTO bundles_tb (BundleId , Name,Description,BundleSize,Duration) VALUES('$newId','$bundlename','$description','$bundlesize', '$duration')";
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
        else if($count >= 1)
        {
            $details = mysqli_fetch_assoc($result);
            $prevId = $details['BundleId'];
            $newId = $prevId + 1;
            $query = "INSERT INTO bundles_tb (BundleId, Name,Description,BundleSize,Duration) VALUES('$newId','$bundlename','$description','$bundlesize', '$duration')";
            $result = mysqli_query($db, $query);
            if(!$result)
            {
                $_SESSION["error"] = "Error Updating Bundles";;
            }
            else
            {
                $_SESSION['bundlename']=$_SESSION['bundlesize']=$_SESSION['description']=$_SESSION["duration"]="";
                $_SESSION["error"] = "Successful";
            }
        }
    }    
}
}

function ViewBundles()
{
    global $db;
    global $Bundles,$BIdndName;
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
            $BIdndName[$details['BundleId']]=$details['Name']; 
        }
    }
}

function PreEditBundle()
{
    ViewBundles();
    global $Bundles;
    $Id = $_GET['Id'];
    foreach($Bundles as $a)
    {
        if($a['BundleId'] == $Id)
        {
            $_SESSION['InitBundleId']= $Id;
            $_SESSION['bundlename'] = $a['Name'];
            $_SESSION['bundlesize']= $a['BundleSize'];
            $_SESSION['duration']= $a['Duration'];
            $_SESSION['description']=$a['Description'];
        }
    }
}
function EditBundle()
{
    $Id = $_SESSION['InitBundleId'];
    $bundlename =$_SESSION['bundlename'] = $_REQUEST['bundlename'];  
    $bundlesize =$_SESSION['bundlesize'] = $_REQUEST['bundlesize'];
    $duration = $_SESSION['duration'] = $_REQUEST['duration'];
    $description = $_SESSION['description'] = $_REQUEST['description'];
    if(!preg_match("/^[1-9][0-9]{0,3}$/",$duration))
    {
        $_SESSION['error']= "Duration should be between 0-999 Days";
        $_SESSION['duration']="";
    }
    else
    {
        global $db;
        $query = "UPDATE bundles_tb SET Name='$bundlename', Description='$description', BundleSize='$bundlesize',Duration='$duration' WHERE BundleId = '$Id'";
        $result = mysqli_query($db, $query);
            if(!$result)
            {
                $_SESSION["error"] = "Error Updating Bundles";
            }
            else
            {
                $_SESSION['bundlename']=$_SESSION['bundlesize']=$_SESSION['description']=$_SESSION["duration"]="";
                $_SESSION["error"] = "Successful";
                echo "<script>alert('Successful')</script>";
                echo '<script>window.location="../admin/viewbundles.php"</script>';
            }
        }
}   
?>