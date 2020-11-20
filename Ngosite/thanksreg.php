
<html>
<head>
<style>
body, html {
    height: 100%;
    margin: 0;
    background-image: url("i009.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
h1{color:purple ; text-align:center ; margin-top:50px}
h2{color:blue ; text-align:center }
</style>
</head>
<body>

<?PHP
	$fname=$_GET['Fname'];
	$mname=$_GET['Mname'];
	$lname=$_GET['Lname'];
	$date=$_GET['Date'];
	$age=$_GET['Age'];
	$gender=$_GET['Gender'];
	$occup=$_GET['Occupation'];
	$mari=$_GET['MS'];
	$contactno=$_GET['Contactno'];
	$address=$_GET['Address'];
	$email=$_GET['Email'];
	$state=$_GET['State'];

	
	
	$host=mysqli_connect("localhost","root","","ngo");

	$result = mysqli_query($host,"SELECT * FROM registration");

	
	
	$sdetail="INSERT INTO registration VALUES ('$fname','$mname','$lname','$date',$age,'$gender','$occup','$mari',$contactno,'$address','$email','$state')";
			$result1=mysqli_query($host,$sdetail);
			?>
		<h1>CONGRATULATIONS!!!</h1><h2> YOU HAVE REGISTRERED SUCCESSSFULLY.</h1>



</body>
</html>
