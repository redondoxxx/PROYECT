<?php

$host="localhost";
$user="root";
$password="";
$db="pagina";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("Error de conexion");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $uname=$_POST["uname"];
    $pass = validate($_POST['password']);


    $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["user_type"]=="user")
    {   
        $_SESSION["uname"]=$uname;

        header("location:userhome.php");
    }

    else if($row["user_type"]=="admin")
    {
        $_SESSION["uname"]=$uname;

        header("location:adminhome.php");
    }

    else
    {
        echo "Usuario o contraseña incorrectos";
    }
}

?>
