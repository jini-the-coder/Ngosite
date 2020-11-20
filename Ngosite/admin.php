<html>
<body>
<?PHP
	$obtainuname=$_GET['uname'];
	$obtainpassw=$_GET['password'];
	$host=mysqli_connect("localhost","root","","ngo");
		
	$result = mysqli_query($host,"SELECT * FROM login");
while($row = mysqli_fetch_assoc($result)) 
{
		$admin1=$row['Username'];
		$passw1=$row['Password'];
		if($obtainuname==$admin1 && $obtainpassw==$passw1)
		{
			echo "
			<script>
			window.location='news.php';
			</script>
			";
		}
		
 }?>
 <h1>NOT A ADMIN</h1>
</body>
</html>