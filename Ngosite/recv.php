
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
h1{color:purple ; text-align:center ; padding-top:50px}
h2{color:blue ; text-align:center}
</style>
</head>
<body>
<?PHP
	$fname=$_GET['Fname'];
	$mname=$_GET['Mname'];
	$lname=$_GET['Lname'];
	$age=$_GET['Age'];
 	$gender=$_GET['Gender']; /* varchar */
	$occupation=$_GET['Occupation']; 
	$martialstatus=$_GET['MS'];
	$contactno=$_GET['Contactno'];
	$address=$_GET['Address'];
	$state=$_GET['State'];
	$salary=$_GET['Salary'];
	$file=$_GET['File'];
	$agriculture=$_GET['Agriculture'];
	$education=$_GET['Education'];
	$healthcare=$_GET['Healthcare'];
	$housing=$_GET['Housing'];
	$noc=$_GET['Noc'];
	$cn=$_GET['CN'];
	$month=$_GET['Month'];
	$year=$_GET['Year'];
	$cvv=$_GET['Cvv'];
	$trans="pending";
	$a=1;
	
	$host=mysqli_connect("localhost","root","","ngo");
	
		$result = mysqli_query($host,"SELECT * FROM bank");
        while($row = mysqli_fetch_assoc($result)) 
    {
		$banknoc=$row['Name on card'];
		$bankcn=$row['Card number'];
		$bankcvv=$row['CVV'];
		if($banknoc==$noc && $bankcn==$cn && $bankcvv==$cvv)
		{
	    $sdetail="INSERT INTO receiver VALUES ('','$fname','$mname','$lname',$age,'$gender','$occupation','$martialstatus',$contactno,'$address','$state',$salary,'$file',$agriculture,$education,$healthcare,$housing,'$noc',$cn,$cvv,'$trans')";
	
	    $res=mysqli_query($host,$sdetail);
	    echo"<h1>YOUR DETAILS HAVE BEEN RECORDED<h1>
        <h2>USE GIVEN ID TO CONFIRM YOUR TRANSACTION </h2>
         <h1> YOUR ID IS </h1>
     	";
	
	    $last_id = mysqli_insert_id($host);
        echo "<h2><span style=font-size:60px >".$last_id."</spna></h2>";
	
    	$sdetails="INSERT INTO user VALUES ('$fname',$last_id)";
    	$results=mysqli_query($host,$sdetails);
			$a=0;
		}
		
    }
	if($a==1)
	{
			echo "
			<h1>OPPS !!!<h1><br>
			<h2>  UNSUCCESSFULL 
			     GIVEN BANK DETAILS ARE WRONG</h2>
			";

	
	}	
?>

</body>
</html>