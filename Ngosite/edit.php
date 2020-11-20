

<?php
$host=mysqli_connect("localhost","root","","ngo");
 if (isset($_POST['transaction']))
   {
	$newName = $_POST['transaction'];
	$id= $_GET['edit'];
	$oldName = $_POST['trans'];

  if($oldName=="transaction done")
  {
  print "transaction already done";
  header("refresh:1;url=news.php");
  }
?>
  

<?php
      if($oldName!="transaction done" && $newName=="transaction done")
      {
		  $sdetails ="UPDATE receiver SET Transaction='$newName' WHERE  Id=$id";
		  $resu=mysqli_query($host,$sdetails);
	  echo "<form action=bank.php?id=$id method=post>
        <h1>ALLOW TRANSACTION</h1>
      <input type=submit value=OK>
      </form>
            ";
      }	
    if($oldName!="transaction done" && $newName!="transaction done")
	{
	$sdetail ="UPDATE receiver SET Transaction='$newName' WHERE  Id=$id";
	$res=mysqli_query($host,$sdetail);
	 header("refresh:1;url=news.php");
	 
	}
   
	
   }
   ?>