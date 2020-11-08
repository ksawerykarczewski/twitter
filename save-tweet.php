<?php
// Get tweet from the URL (GET / Query String) 
$aTweet = [uniqid(), $_GET['txtTwitterTitle']];
$sFile = file_get_contents('tweets.txt');
// Convert the text to an array
$aFile = json_decode($sFile);
array_push($aFile , $aTweet);
//var_dump($aFile);
// Convert the array into text because you CANNOT
// save an array into a file 
$sFile = json_encode($aFile);
echo $sFile;
// Save the text into the file
file_put_contents('tweets.txt', $sFile);
header('Location: tweets.php');
?>