<?php
//	include "connection.php";
  $Name = $_REQUEST['Name'];
	$Email = $_REQUEST['Email'];
  $Phone = $_REQUEST['Phone'];
  $Message = $_REQUEST['Message'];

  //TO BE DONE ONCE CONNECTED TO DATABASE

	//$sql = "INSERT INTO ____ ".
  //    "(Name,Email,Phone,Message) ".
  //    "VALUES ('$Name','$Email','$Phone','$Messaage')";

   //$retval = mysqli_query( $con,$sql );

   //if(! $retval ) {
  //    die('Could not enter data: ' . mysqli_error($con));
  // }

   echo "Entered '$Name' data successfully\n";

?>
