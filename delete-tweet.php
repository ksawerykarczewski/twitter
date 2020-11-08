<?php
$sTweetIdFromUrl = $_GET['tweetId'];
//echo "The user wants to delete tweet with ID $sTweetId";
// open the database (file) and get the data from it
$sTweets = file_get_contents('tweets.txt');
// convert the string(text) to an array
$aTweets = json_decode($sTweets);
//var_dump($aTweets);
foreach($aTweets as $iIndex => $aTweet){
    // echo $iIndex;
    // echo $aTweet;
    if($sTweetIdFromUrl == $aTweet[0]){
        array_splice($aTweets, $iIndex, 1);
        break;
    }
}
//echo json_encode($aTweets);
// tweet is no longer in memory
// but still in a file
// convert the new tweet array into text
//echo json_encode($aTweets);
$sTweets = json_encode($aTweets);
//echo $sTweets;
// save the text with the tweets (1 was deleted)
file_put_contents('tweets.txt', $sTweets);
header('Location: tweets.php');

?>