<?php
if( ! $_POST ){  header('Location: signup'); }
if( ! filter_var(  $_POST['email'], FILTER_VALIDATE_EMAIL  ) ){ 
    header('Location: signup-view.php');
    echo 'bad email';
    exit();
}

$sUsers = file_get_contents('private/users.txt');
$aUsers = json_decode($sUsers);

// Check for duplicated emails
foreach( $aUsers as $aUser ){
  // $aUser ["5f48e543ec534","b@b.com"]
  if( $_POST['email'] ==  $aUser[1] ){
    header('Location: signup-view.php');
    echo 'email already exists';
    exit();
  }
}

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

// echo $sUsers;
// print_r($aUsers);
// [ID, email]
$aUser = [uniqid(), $_POST['email']];
array_push($aUsers, $aUser);
// var_dump($aUsers);
file_put_contents('private/users.txt', json_encode($aUsers)  );
header('Location: post-view.php');
exit();