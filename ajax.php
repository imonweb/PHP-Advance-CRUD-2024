<?php 

$action = $_REQUEST['action'];

if(!empty($action)){
  require_once 'partials/User.php';
  $obj = new User();
}

// Adding user action
if($action == 'adduser' && !empty($_POST)){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $photo = $_POST['photo'];

  $playerid = (!empty($_POST['userId'])) ? $_POST['userId']: "";

  $imagename = "";
  if(!empty($photo['name'])){
    $imagename = $obj->uploadPhoto($photo);
    $playerData = [
      'name' => $username,
      'email' => $email,
      'mobile' => $mobile,
      'photo' => $photo
    ];
  } else {
     $playerData = [
      'name' => $username,
      'email' => $email,
      'mobile' => $mobile,
      
    ];
  }
  $playerid = $obj($playerData);

  if(!empty($playerid)){
    $player = $obj->getRow('id', $playerid);
    echo json_encode($player);
    exit();
  }
}