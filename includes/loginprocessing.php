<?php
if(isset($_POST['Login'])){formValidation();}
if(isset($_POST['logoutUser'])){logOut();}

function formValidation()
{
    $username =$_SESSION['username'] = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if(empty($_REQUEST['username'])||empty($_REQUEST['password']))
    {
        $_SESSION["error"] = "Username and Password is required";
    }
    else
    {
        loginUser($username,$password);
    }
}
function loginUser($username,$password)
{
    global $db;
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);
    $query = "SELECT * FROM users_tb ";
    $password = md5($password);
    $query .= " WHERE Username = '$username' AND Password = '$password'";
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
            $details = mysqli_fetch_assoc($result);
            $type = $details['Type'];
            if($type == "Customer")
            {
                header("Location: ./pages/customer/dashboard.php", true, 301);
            }
            else{
                header("Location: ./pages/admin/dashboard.php", true, 301);
            }
        }
        else
        {
            $_SESSION["error"] = "Incorrect Username or Password";
        }
        mysqli_free_result($result);
    }
}

function logOut()
{
    session_destroy();
    header("Location: ../Index.php", true, 301);
}
?>