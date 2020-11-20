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
	$contactno=$_GET['Contactno'];
	$email=$_GET['Email'];
	$state=$_GET['State'];
	$occupation=$_GET['Occupation'];
	$agriculture=$_GET['Agriculture'];
	$education=$_GET['Education'];
	$healthcare=$_GET['Healthcare'];
	$housing=$_GET['Housing'];
	$noc=$_GET['Noc'];
	$cn=$_GET['CN'];
	$month=$_GET['Month'];
	$year=$_GET['Year'];
	$cvv=$_GET['Cvv'];
	$a=1;
	$amount=$agriculture+$education+$healthcare+$housing;
	
	$host=mysqli_connect("localhost","root","","ngo");
	
		
	$result = mysqli_query($host,"SELECT * FROM bank");
    while($row = mysqli_fetch_assoc($result)) 
    {
		$banknoc=$row['Name on card'];
		$bankcn=$row['Card number'];
		$bankcvv=$row['CVV'];
		if($banknoc==$noc && $bankcn==$cn && $bankcvv==$cvv)
		{
			$amounts=$row['Amount'];
		$sdetail="INSERT INTO payment VALUES ('$fname','$mname','$lname',$age,$contactno,'$email','$state','$occupation',$agriculture,$education,$healthcare,$housing,'$noc',$cn,$cvv)";
	
		$res=mysqli_query($host,$sdetail);
		
		echo"
		<h1>THANK YOU !!!<h1><br>
		<h2> PAYMENT DONE SUCCESSFULLY !!</h2>
		";
			$a=0;
		}
		
    }
	if($a==0)
	{  
	    $sdetails="INSERT INTO balance VALUES ('$amount','')";
		$ress=mysqli_query($host,$sdetails);
        $amt=$amounts-$amount;
		$done ="UPDATE bank SET Amount=$amt WHERE CVV=$cvv";
        $res=mysqli_query($host,$done);
	}
	if($a==1)
	{
			echo "
			<h1>OPPS !!!<h1><br>
			<h2> PAYMENT UNSUCCESSFULL 
			     GIVEN BANK DETAILS ARE WRONG</h2>
			";
	}	
?>
</body>
</html>