<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initail-scale=1" />
	<link rel="stylesheet" href="css/gym.css">
</head>
<body>
 <div class="container">
 <div class="gym">
 	<div class="foto">
 			<img src="img/g1.jpg" alt="Italian Trulli">
</div>
<h3>Fiets</h3>
<a href="https://www.youtube.com/watch?v=7fICF_O5esc">klik hier</a>
</div>

<div class="gym1">
 	<div class="foto">
 			<img src="img/g2.jpg" alt="Italian Trulli">
		 </div>
  <h3>Loopband</h3>
  <a href="https://www.youtube.com/watch?v=fX-YTj2coFA&t=2s">klik hier</a>
 </div>

</div>

<div class="gym1">
 	<div class="foto">
 			<img src="img/g3.jpg" alt="Italian Trulli">
		 </div>
		 <h3>Leg press</h3>
  <a href="https://www.youtube.com/watch?v=dawg6fTa4Rg">klik hier</a>

 </div>



</div>

<div class="gym1">
 	<div class="foto">
 			<img src="img/g4.jpg" alt="Italian Trulli">
		 </div>
		 <h3>Leg press</h3>
		 <a href="https://www.youtube.com/watch?v=dawg6fTa4Rg">klik hier</a>
 </div>
<br>
</div>
 <div class="gym1">
 	<div class="foto">
 			<img src="img/g5.jpg" alt="Italian Trulli">
		 </div>
		 <h3>chest</h3>
		 <a href="https://www.youtube.com/watch?v=aUhqGVwzNBc">klik hier</a>
 </div>

</div> 

<div class="gym1">
 	<div class="foto">
 			<img src="img/g6.jpg" alt="Italian Trulli">
		 </div>
		 <h3>bench press</h3>
		 <a href="https://www.youtube.com/watch?v=bgwt1H6Vjmk">klik hier</a>
 </div>

 <div id="set">
 <?php
$sql = "SELECT id, machine, reps, tijd, niveau, gewicht FROM stats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. "
        <br> 
        - machine: ". $row["machine"]. "
        <br> 
        - reps: " . $row["reps"] . "
        <br>  
        - tijd: " . $row["tijd"] . "
        <br> 
        - niveau: " . $row["niveau"] . "
        <br>
           - gewicht: " . $row["gewicht"] . "
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