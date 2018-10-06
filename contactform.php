<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$artistname = $_POST['artistname'];
	$message = $_POST['message'];

	$mailto = "paorella@ing.uchile.cl";
	$headers = "From: ".$mail;
	$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

	mail($mailto,$artistname,$txt,$headers);
	header("Location: index.html?mailsend");
}
?>
