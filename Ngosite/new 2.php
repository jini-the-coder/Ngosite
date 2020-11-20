<html>
<head>
<style>
body, html {
    background-image: url("registration3.jpg");
}
</style>
</head>
<body>
<?PHP
	
	$host=mysqli_connect("localhost","root","","ngo");
		
	$result = mysqli_query($host,"SELECT * FROM payment");
	$agriculture = 0;
	$education = 0;
	$healthcare = 0;
	$housing = 0;
?>
<table border="1">
<tr>
<th>Firstname</th>
<th>Middlename</th>
<th>Lastname</th>
<th>Age</th>
<th>contactno</th>
<th>Email</th>
<th>State</th>
<th>City</th>
<th>Occupation</th>
<th>Agriculture</th>
<th>Education</th>
<th>Healthcare</th>
<th>Housing</th>
<th>Card details</th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
<tr>
<td>
  <?php print $row['Firstname'];
		?>
 </td>
 <td>
  <?php print $row['Middlename'];
		?>
 </td>
 <td>
  <?php print $row['Lastname'];
		?>
 </td>
 <td>
  <?php print $row['Age'];
		?>
 </td>
 <td>
  <?php print $row['Contactno'];
		?>
 </td>
 <td>
  <?php print $row['Email'];
		?>
 </td>
 <td>
  <?php print $row['State'];
		?>
 </td>
 <td>
  <?php print $row['City'];
		?>
 </td>
  <td>
  <?php print $row['Occupation'];
		?>
 </td>
<td>
  <?php print $row['Agriculture'];
        $agriculture = $agriculture + $row['Agriculture'];
		?>
 </td>
 <td>
  <?php print $row['Education'];
        $education = $education + $row['Education'];
		?>
 </td>
 <td>
  <?php print $row['Healthcare'];
        $healthcare = $healthcare + $row['Healthcare']; 
		?>
 </td>
 <td>
  <?php print $row['Housing'];
	    $housing = $housing + $row['Housing'];
		?>
 </td>
  <td>
  <?php print $row['Name on card'];
		?>
 </td>
  <td>
  <?php print $row['Card number'];
		?>
 </td>
  <td>
  <?php print $row['CVV'];
		?>
 </td>
 </tr>
 <?PHP
 }?>
</table>
agriculture:<?PHP print $agriculture ?><br>
education: <?PHP print $education ?><br>
healthcare:<?PHP print $healthcare?><br>
housing: <?PHP print $housing?><br>
</body>
</html>