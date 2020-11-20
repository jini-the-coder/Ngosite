<html>
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
</head>
<body>
<?PHP
	$obtainuname=$_GET['uname'];
	$obtainpassw=$_GET['password'];
	$host=mysqli_connect("localhost","root","","ngo");
		
	$result = mysqli_query($host,"SELECT * FROM user");
while($row = mysqli_fetch_assoc($result)) 
{
		$admin1=$row['Firstname'];
		$passw1=$row['id'];
		if($obtainuname==$admin1 && $obtainpassw==$passw1)
		{
			echo "
			<script>
			window.location='specuser.php?edit=$passw1';
			</script>
			";
		}
		
 }?>
 NOT A USER
</body>
</html>