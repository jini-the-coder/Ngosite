<head>
<style>
body, html {
    background-image: url("i009.jpg");
	 background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<style>

table , th,td{border:1.5px solid darkblue ; border-collapse:collapse}
th{height:50px ; color:blue; font-size:20px ; width:60px}
tr{width:60px ; padding-right:20px}
td{  font-size:18px ; color:darkgreen ; text-align:center}
table{width:100%}
input[type="submit"]{width:50%}
input[type="text"]{width:90%}
</style>
<body>

<?PHP
	
	$host=mysqli_connect("localhost","root","","ngo");
		
	$result = mysqli_query($host,"SELECT * FROM receiver");
?>
<table>

<tr>
<th>ID</th>
<th>Firstname</th>
<th>Middlename</th>
<th>Lastname</th>
<th>Age</th>
<th>Gender</th>
<th>Occupation</th>
<th>Martial Status</th>
<th>Contactno</th>
<th>Address</th>
<th>State</th>
<th>Salary</th>
<th>File</th>
<th>Transaction</th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
<tr>
<td>
  <?php print $row['id'];
		?>
 </td>
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
  <?php print $row['Gender'];
		?>
 </td>
 <td>
  <?php print $row['Occupation'];
		?>
 </td>
 <td>
  <?php print $row['Martial status'];
		?>
 </td>
 <td>
  <?php print $row['Contact no'];
		?>
 </td>
 <td>
  <?php print $row['Address'];
		?>
 </td>
 <td>
  <?php print $row['State'];
		?>
 </td>
 <td>
  <?php print $row['Salary'];
		?>
 </td>
 <td>
  <?php echo"<a href=".$row['File'].">VIEW</a>";
		?>
 </td>
 <td>
  <?php
  echo "<form action=edit.php?edit=$row[id] method=post>
  <input type=text name=transaction value='".$row['Transaction']."'>
  <input type=hidden name=trans value='".$row['Transaction']."'>
  <input type=submit value=Submit>
  </form>
  "; ?>
  </td>
 </tr>
 <?PHP
 }?>
</table>
</body>
</html>