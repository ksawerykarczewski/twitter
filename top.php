<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  <?= $sInjectPageTitle ?? 'Twitter Clone' ?>
  </title>
</head>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="style.css">
<body>

<nav>
  <a href="/">home</a>
  <a href="/about-us.php">about us</a>
  <a href="/contact-us.php">contact us</a>

  <a href="tweets.php" <?= $hideTweetsButton; ?>>See tweets</a>
  <a href="post-view.php" <?= $hidePostButton; ?>>Post a tweet</a>
  <a href="logout.php" <?= $hideLogoutButton; ?>>Logout</a>
  
  
</nav>