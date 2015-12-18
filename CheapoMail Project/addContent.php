<head>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>


<!--Add Records to Database-->
<?php
	$con = mysqli_connect("localhost", "mailInfo2180","administrator","MailingSystem");
	
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySql: " . mysqli_connect_error();
	}
	
	//For Users
	$sql1 = "INSERT INTO User(Firstname, Lastname, Password, Username) 
	VALUES
	(
		'$fname',
		'$lname',
		'$password',
		'$username'
	)";
	
	//For Messages
	$sql2 = "INSERT INTO Message(Body, Subject, User_id, Recipient_ids) 
	VALUES
	(
		'$body',
		'$subject',
		'$userId',
		'$recipientIDs'
	)";
	
	//For Messages_read
	$sql3 = "INSERT INTO Message_read(Message_id, Reader_id, Date) 
	VALUES
	(
		'$message_id',
		'$reader_id',
		'$date'
	)";
	
	if (!mysqli_query($con,$sql1)){
		die('Error: ' . mysqli_error($con));
	}
	echo "<p class='status' id='successful'>One Record has just been added.</p>";
	mysqli_close($con); 	
	
?>
