<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initail-scale=1" />
	<link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div id="container">
<div class="blok2">
<?php
$sql = "SELECT id, gerecht, Vetpercentage, Koolhydraten, Suiker, calorieen  FROM eten";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. "
        <br> 
        - gerecht: ". $row["gerecht"]. "
        <br> 
        - Vetpercentage: " . $row["Vetpercentage"] . "
        <br>  
        - Koolhydraten: " . $row["Koolhydraten"] . "
        <br> 
        - Suiker: " . $row["Suiker"] . "
        <br>
           - calorieen: " . $row["calorieen"] . "
           <br><HR><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
        ?>
</div>
</div>
</body>
</html>