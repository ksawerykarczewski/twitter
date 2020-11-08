<?php
$sTweetIdFromUrl = $_GET['tweetId'];
$sTweets = file_get_contents('tweets.txt');
$aTweets = json_decode($sTweets);
//print_r($aTweets);
foreach ($aTweets as $aTweet) {
    $sTweetIdFromFile = $aTweet[0]; // id is index 0 //title is index 1
    if($sTweetIdFromFile == $sTweetIdFromUrl){
        ?>
        <div class="tweet">
            <form action="bridge-update-tweet.php" method="post">
                <input type="hidden" name="txtTweetId" value="<?=$sTweetIdFromFile ?>">
                <input name="txtTweetTitle" type="text" value="<?=$aTweet[1]; ?>">
                <button>Update Tweet</button>
            </form>
        </div>
        <?php
    }
}
?>