<?php
  session_start();
  $sInjectPageTitle = 'Tweets';
  // $bInjectShowLogoutButton = 1;
  $hideLogoutButton = '';
  $hidePostButton = '';
  $hidePostButton = '';
  $hideTweetsButton = 'hidden';
  require_once('top.php');
?>

<h1>Tweets</h1>

<?php
    $sFile = file_get_contents('tweets.txt');
    $aFile = json_decode($sFile);
    // reverse an array
    $aFile = array_reverse($aFile);

    if (count($aFile) == 0){
        echo 'You have no tweets';
    }

    foreach($aFile as $aTweet){
        $sTweetId = $aTweet[0];
        $sTweetTitle = $aTweet[1];
        //echo $sTweetTitle;
        echo "
        <div class='tweet'>
        <div>Title: $sTweetTitle</div>
        <a href='delete-tweet.php?tweetId=$sTweetId'>
        DELETE
        </a>
        <a href='update-tweet.php?tweetId=$sTweetId'>
        UPDATE
        </a>
        </div>
        ";
    }
    exit();
?>
  
</body>
</html>