<?php


$servername = "localhost";
$username = "mozammel";
$password = "1q2w3e4r";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "mydatabase");

// Check connection
if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
}
echo "Connected successfully <br><br>";


$sql = 'select * from nytable';
//SELECT * FROM `nytable`

$result = mysqli_query($conn, $sql);
$pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC);
//free res
mysqli_free_result($result);
//close
mysqli_close($conn);
print_r($pizzas);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php page</title>
</head>

<h1>mysql data showing</h1>
<?php foreach($pizzas as $pizza){?>
    <h1 style ="color: red; background-color:green"; ><?php echo htmlspecialchars($pizza['title']);?></h1>


<?php } ?>


</html>