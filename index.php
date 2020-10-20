<?php 
	//Variable Setting
	$name = $_REQUEST ['name'];
	$email = $_REQUEST ['Email'];
	$message = $_REQUEST ['Message'];

	//Check input fields
	if(empty($name) || empty($email) || empty($message))
	{
		echo"Please fill all the fields";
	} else {
        mail("shindearyan179@gmail.com", "Website Message", $message, "From: $name <$email>");
        echo "<script type='text/javascript'>alert('Your Message sent successfully');
        window.history.log(-1);
        </script>";
	}
?>