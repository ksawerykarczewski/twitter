<?php
  session_start();
  $sInjectPageTitle = 'Admin';
  // $bInjectShowLogoutButton = 1;
  $hideLogoutButton = '';
  $hidePostButton = 'hidden';
  require_once('top.php');
?>

<form action="save-tweet.php">
    <input type="text" name="txtTwitterTitle" placeholder="tweet title">
    <button>TWEET</button>
</form>
  
</body>
</html>