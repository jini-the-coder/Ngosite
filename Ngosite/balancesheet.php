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
		
	$result = mysqli_query($host,"SELECT * FROM balance");
	$ar=0;
	$au=0;
?>
<table border="1"><html>

<tr>
<th>       Amount received       </th>
<th>         Amount used         </th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
<tr>
 <td>
  <?php print $row['Amount received'];
        $ar=$ar+$row['Amount received'];
		?>
 </td>
 <td>
  <?php print $row['Amount used'];
        $au=$au+$row['Amount used'];
		?>
</td>
 </tr>
 
 <?PHP
 }?>
 <?PHP
 $ae=$ar-$au;?>
 </table>
 
 <br><br><br><br><br><br>
 <table>
 <tr>
 <td>
   AMOUNT RECEIVED = <?PHP echo $ar;?>
 </td>
  <td>
   AMOUNT USED = <?PHP echo $au;?>
 </td>
  <td>
   AMOUNT REMAINING = <?PHP echo $ae;?>
 </td>
 </tr>
</table>
</body>
</html>