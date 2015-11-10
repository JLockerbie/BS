<?php
//Script for connecting to the mysql database
$host = '';
$username = '';
$password = '';
$dbname = '';

//Open the connection
 $con=mysqli_connect($host,$username,$password,$dbname);

//Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$nameSub = $_POST['name'];
$prevNameSub = $_POST['prevName'];
$persona = $_POST['personaClicks'];



//Create sql statement to find 3 random prompts from the database
$sql = "SELECT promptText FROM prompts ORDER BY RAND()";

$result = mysqli_query($con,$sql);

$myArray = array();

while($row = mysqli_fetch_array($result)) {
	
	$prompt = $row['promptText'];

	// Do not use the comparison clues if it's the first persona i.e. there is no previous persona!
	if ($persona == 1) {

		if (strpos($prompt,'[prevName]') === false) {
    		$prompt = str_replace("[name]",$nameSub, $prompt);
		$myArray[] = $prompt;
		} 

	} else {
		$prompt = str_replace("[name]",$nameSub, $prompt);
		$prompt = str_replace("[prevName]",$prevNameSub, $prompt);
		$myArray[] = $prompt;
	}
 }

	print json_encode($myArray);

mysqli_close($con);
?> 