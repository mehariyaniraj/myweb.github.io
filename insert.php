<?php

if (isset($_POST['name']))
    
{echo "hi";
    $SERVER ="localhost";
    $username ="root";
    $password = "";
    $db = "base";

    $connection=mysqli_connect($SERVER,$username,$password,$db);
    if(!$connection)
    {
        die(mysqli_connect_error()); 
    }
    echo "<br>";
    echo "connected";

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $passcode = $_POST['Password'];
    $cpassword = $_POST['Confirmpassword'];
    if ($passcode == $cpassword)
    echo "<br>";
    echo $sql = "INSERT INTO form (name,surname,Password,Confirmpassword) VALUES('$name','$surname','$passcode,'$cpassword')";
    $query=mysqli_query($connection,$sql);
    if($query)
    {
        echo "data inserted";
    }
}
?>