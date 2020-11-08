<?php
$sTweetIdFromUrl = $_POST['txtTweetId'];
$sTweetTitleFromUrl = $_POST['txtTweetTitle'];
// bridge pages do NOT show anything, they
// do a job and take the user somehwere else
// echo 'This page only update and redirects the user';the user';

// Open the file and get the content
$sTweets = file_get_contents('tweets.txt');
// Convert the content to an array
$aTweets = json_decode($sTweets);
//echo print_r($aTweets);
//loop
foreach ($aTweets as &$aTweet) {
    if ($sTweetIdFromUrl == $aTweet[0]) {
        $aTweet[1] = $sTweetTitleFromUrl;
        break;
    }
};

// Update the title with the new title
// Convert the main array to string
$sTweets = json_encode($aTweets);
//echo print_r($sTweets);
// Save it back to the file
file_put_contents('tweets.txt', $sTweets);
// redirect the user to the tweets page
header('Location: tweets.php');
