<?php
require "connection.php";
if(isset($_POST['ctLogin'])){formValidation("ct");}
if(isset($_POST['adLogin'])){formValidation("ad");}
if(isset($_POST['logoutUser'])){logOut();}

function formValidation(string $type)
{
    $username =$_SESSION['username'] = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if(empty($_REQUEST['username'])||empty($_REQUEST['password']))
    {
        $_SESSION["error"] = "Username and Password is required";
    }
    else
    {
        if($type == "ct"){loginCustomer($username,$password);};
        if($type == "ad"){loginAdmin($username,$password);};
    }
}
function loginCustomer($username,$password)
{
    global $db;
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);
    $query = "SELECT * FROM customer_tb ";
    $password = md5($password);
    $query .= " WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $query);
    if(!$result)
    {
        $_SESSION["error"] = "Incorrect Username or Password";
    }
    else
    {
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            header("Location: ./pages/customer/dashboard.php", true, 301);
            exit();   
        }
        else
        {
            $_SESSION["error"] = "Incorrect Username or Password";
        }
        mysqli_free_result($result);
    }
}
?>