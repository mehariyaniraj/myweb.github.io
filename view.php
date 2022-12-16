<?php
if (isset($_POST['name']))
{
    $SERVER ="localhost";
    $username ="root";
    $password = "";
    $db = "base";

    $connection=mysqli_connect($SERVER,$username,$password,$db);
    if(!$connection)
    {
        die(mysqli_connect_error()); 
    }
    echo "connected";

    $name = $_POST['name'];
    $sql = "SELECT *from form WHERE name = '$name'";

    $query = mysqli_query($connection,$sql);
    if($query)
    {
        $r = mysqli_fetch_array($query);
        if ($r>0) 
        {
            echo "<br>";
            echo "hi";
            echo "<table>";
            echo "<tr>";
            echo "<th>";
            echo "name";
            echo "<th>";
            echo "surname";
            echo "<th>";
            echo "<br>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>";
            echo $r ['name'];
            echo "<th>";
            echo $r ['surname'];
            echo "<th>";
            echo "</tr>";

        }                
    }
}
?>