<?php 


	require "../conn.php";

	$fp =fopen("/dev/ttyACM0", "w+");
	sleep(3);

	if( !$fp) {
	        echo "Error";die();
	}

	fwrite($fp, $_SERVER['argv'][1] . 0x00);
	$data= fread($fp, 200);

	echo $data;


	fclose($fp);

	$array = explode("||", $data);

	if (isset($array[2])) {
		$phone = softSan($array[0]);
		$timestamp = softSan($array[1]);
		$msg = softSan($array[2]);

		mysqli_query($conn, "INSERT INTO messages(message_timestamp, message, phone) VALUES('$timestamp', '$msg', '$phone')");
	}

 ?>