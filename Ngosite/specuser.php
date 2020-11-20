
<html>
<head>
<style>
body, html {
    background-image: url("i009.jpg");
	 background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
p{font-size:40px ; color:darkblue ; font-family:cursive ; text-align:center ; padding-top:100px}
</style>

<body>
<?php
$host=mysqli_connect("localhost","root","","ngo");

	$id= $_GET['edit'];
    $result = mysqli_query($host,"SELECT * FROM receiver WHERE Id=$id");
?>



<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
	<p>
  <?php print $row['Firstname'];
		?>
 
  <?php print $row['Middlename'];
		?>
 
  <?php print $row['Lastname'];
		?>
 <br><br><span style="color:red ; font-family:impact">STATUS:</span>
  <span style="color:green"><?php print $row['Transaction'];
		?></span>
 </p>
 <?PHP
 }?>

</body>
</html>
	