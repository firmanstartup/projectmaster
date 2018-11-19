<?php 

// Make responsive text according to the length of the text character

$text = strlen("Hallo World");
if($text > 30 && $text < 100 || $text > 100){
	//show text size if more than 30 characters and less than 100 characters or text more than 100 characters
	echo "<h5>".$text."</h5>";
}elseif ($text > 20 || $text >= 20) {
	//Text display if the text character is more than 20 characters or more than 20 characters
	echo "<h3>".$text."</h3>";
}elseif ($text < 10 || $text >= 10) {
	//Text display if the text is less than 10 or text more than 10 characters
	echo "<h1>".$text."</h1>";
}else{
	//show normal text size
	echo $text;
}

?>