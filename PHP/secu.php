<?php

ini_set('display_error' , 'On');
error_reporting(E_ALL | E_STRICT);

echo "<html>";
if(isset($_GET["username"]) && isset($_GET["password"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "SqliDB";

    $conn = new mysqli($servername, $username , $password , $db_name);

    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
    $user = $_GET['username'];
    $pass = $_GET['password'];
    $sql = "SELECT * FROM login WHERE User='$user' AND Password='$pass'";
    if($result = $conn->query($sql))
    {
        if($result->num_rows >=1)
        {
            $row = $result->fetch_assoc();
            echo "You logged in as " . $row["User"];
        }
        else {
            echo "Sorry to say , that's invalid login info!";
        }
    }
    $conn->close();
}
else
echo "Must supply username and password ...";
echo "</html>"

?>

<form action="/cox/ex1.php" method="GET">
    <input type="text" name="username" placeholder="user">
    <br>
    <input type="text" name="password" placeholder="password">
    <input type="submit" value="ok">
</form>