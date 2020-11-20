<html>
	<body>

    <style>

	header{padding-left:20px ; padding-top:20px ; background-color:rgb(139,0,0) ; margin-left:100px ; opacity:0.75}

	.image{width:100% ; height:526px ; position:absolute}
	.quo{ font-size:25px ; line-height:25px ; font-family:fantasy ; position:absolute ; color:white ; top:50px ; left:50px ; z-index:1 ; 
		padding:50px 900px 40px 80px ; letter-spacing:0.0001em ; text-align:center ; word-spacing:5px ; color:rgb(0,128,0)}
	.i{width:100% ; height:400px ; position:absolute ; top:0 ; left:0 ; padding:0 ; margin:0}
	svg{opacity:0.8 ; width:1100px ; height:500px ; top:0 ; left:0 ;fill:black ; padding:0 0 0 50px  }

    	body{padding:0 ; margin:0 ; overflow-x:hidden}
    </style>

  <body>

	<?PHP
	
	$host=mysqli_connect("localhost","root","","ngo");
		
	$result = mysqli_query($host,"SELECT * FROM payment");

	$sum1=137400; /* DEFAULT */

	while($row = mysqli_fetch_assoc($result)) 
	{
		$sum1=$sum1+$row['Agriculture'];
	}
	

	$result1 = mysqli_query($host,"SELECT * FROM receiver where State='MAHARASHTRA' and Transaction='transaction done'");
    $msum=0;

	while($row = mysqli_fetch_assoc($result1)) 
	{
		$msum=$msum+$row['Agriculture'];
	}
	
	$result2 = mysqli_query($host,"SELECT * FROM receiver where State='KERALA' and Transaction='transaction done'");
    $ksum=0;

	while($row = mysqli_fetch_assoc($result2)) 
	{
		$ksum=$ksum+$row['Agriculture'];
	}
	
	$result3 = mysqli_query($host,"SELECT * FROM receiver where State='RAJASTHAN' and Transaction='transaction done'");
    $rsum=0;

	while($row = mysqli_fetch_assoc($result3)) 
	{
		$rsum=$rsum+$row['Agriculture'];
	}
	
	$result4 = mysqli_query($host,"SELECT * FROM receiver where State='UTTAR PRADESH' and Transaction='transaction done'");
    $usum=0;

	while($row = mysqli_fetch_assoc($result4)) 
	{
		$usum=$usum+$row['Agriculture'];
	}
		$result5 = mysqli_query($host,"SELECT * FROM receiver where State='WEST BENGAL' and Transaction='transaction done'");
    $wsum=0;

	while($row = mysqli_fetch_assoc($result5)) 
	{
		$wsum=$wsum+$row['Agriculture'];
	}
	
		$result6 = mysqli_query($host,"SELECT * FROM receiver where State='OTHERS' and Transaction='transaction done'");
    $osum=0;

	while($row = mysqli_fetch_assoc($result6)) 
	{
		$osum=$osum+$row['Agriculture'];
	}
	
	$sum2=$msum+$ksum+$rsum+$usum+$wsum+$osum;
	$n1=($msum/$sum2)*100;
	$n2=($ksum/$sum2)*100;
	$n3=($rsum/$sum2)*100;
	$n4=($usum/$sum2)*100;
	$n5=($wsum/$sum2)*100;
	$n6=($osum/$sum2)*100;


	
?>

	<img src="farmer1.jpg" class="image">
	<div class="quo" style="text-align:left ;margin-top:-30px ; color:rgb(107,142,35)">
		<p style="font-size:25px ; color:white "><u>AREAS OF INVESTMENTS</u></p>		
		<p style="font-size:25px ">MAHARASHTRA:<span style="color:rgb(127,255,0) ; font-size:40px">&nbsp;<?PHP echo round($n1,2); ?>&nbsp;%</span></p>
		<p style="font-size:25px ">KERALA:<span style="color:rgb(127,255,0) ; font-size:40px">&nbsp;<?PHP echo round($n2,2); ?>&nbsp;%</span></p>		
		<p style="font-size:25px ">RAJASTHAN:<span style="color:rgb(127,255,0) ; font-size:40px">&nbsp;<?PHP echo round($n3,2); ?>&nbsp;%</span></p>
		<p style="font-size:25px ">UTTAR PRADESH:<span style="color:rgb(127,255,0) ; font-size:40px">&nbsp;<?PHP echo round($n4,2); ?>&nbsp;%</span></p>
		<p style="font-size:25px ">WEST BENGAL:<span style="color:rgb(127,255,0) ; font-size:40px">&nbsp;<?PHP echo round($n5,2); ?>&nbsp;%</span></p>
		<p style="font-size:25px ">OTHER:<span style="color:rgb(127,255,0) ; font-size:40px">&nbsp;<?PHP echo round($n6,2); ?>&nbsp;%</span></p>
	</div>
      <div class="i">
		
		<svg >
  			<polygon points="50,50 1070,50 1070,600 50,600" />
		</svg>
      </div>
	  
      <div class="quo" style="left:720px ; margin-top:50px ; padding-right:250px ;">
	   <p style="color:white">INVESTMENTS</p>
				
		<p style="font-size:20px ; color:white">recieved<span style="color:rgb(127,255,0) ; font-size:40px">&emsp;<?PHP echo $sum1; ?></span></p>
		<p style="font-size:20px ; color:white">used<span style="color:rgb(127,255,0) ; font-size:40px">&emsp;<?PHP echo $sum2; ?></span></p>
	</div>
	<div class="i" style="left:650px">
		
		<svg style="height:480px ; fill:green ; opacity:0.5">
  			<polygon points="50,100 400,100 400,580 50,580" />
		</svg>
      </div>

	

	
   </body>
</html>