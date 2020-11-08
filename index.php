<?php
  session_start();
  $sInjectPageTitle = 'Admin';
  $sInjectPageTitle = 'Signup';
  // $bInjectShowLogoutButton = 0;
  $hideLogoutButton = 'hidden';
  $hidePostButton = 'hidden';
  $hideTweetsButton = 'hidden'; 
  ?>

<div class="row">
  <div class="column">
  </div>
  <div class="column">
  <?php require_once('top.php'); ?>
  <br>
  <div class="center">
  <p>Join Twitter.</p>
  <form action="signup-action.php" method="POST">
    <input  type="text" 
            name="email"
            placeholder="email"
    >
    <button class="button">signup</button>
  </form>
  </div>
</div>
  
</body>
</html>