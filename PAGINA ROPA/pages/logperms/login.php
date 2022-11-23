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
    $uname=$_POST["uname"];
    $password=$_POST["password"];


    $sql="select * from users where user_name='".$uname."' AND password='".$password."' ";

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
