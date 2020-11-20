<?php	
    $id= $_GET['id'];
	$host=mysqli_connect("localhost","root","","ngo");
    $result = mysqli_query($host,"SELECT * FROM receiver WHERE Id=$id");

    while($row = mysqli_fetch_assoc($result)) 
   { 
     $noc= $row['Name on card'];
 
    $cn= $row['Card number'];
 
   $cvv=$row['CVV'];
   $amount=$row['Agriculture']+$row['Education']+$row['Healthcare']+$row['Housing'];
		
 }

 $res = mysqli_query($host,"SELECT * FROM bank");

while($row = mysqli_fetch_array($res)) 
{ 
  if($row['Name on card']==$noc)
  {
  $amounts= $row['Amount']; 
 }
}
 $sdetails="INSERT INTO balance VALUES ('','$amount')";
$ress=mysqli_query($host,$sdetails);
 $amt=$amounts+$amount;
 $done ="UPDATE bank SET Amount=$amt WHERE CVV=$cvv";
 $res=mysqli_query($host,$done);
 header("refresh:1;url=news.php");
 
 ?>
 ..............  TRANSACTING IN FEW MINUTES  .................
