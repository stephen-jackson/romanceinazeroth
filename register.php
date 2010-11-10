<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Account Creation</title>
<link rel = "stylesheet" type = "text/css" href = "style.css" />
</head>
<body>
<div id="wrap">
<?php include("header.php"); ?>
  <?php
  Echo "<h1>Welcome ".$_SESSION['currentUser']."</h1>";
  include("db_connect.php");
  include('armoryscraper.php');
  
  $name = $_POST['username'];
  $pw = $_POST['pw'];
  $charName = $_POST['charName'];
  $charRealm = $_POST['charRealm'];
  $region = $_POST['region'];
  
  $character = new armoryscraper($region,$charRealm,$charName);
  
  $lvl = $character->getLevel();
  $race = $character->getRaceId();
  $sex = $character->getGenderId();
  $charClass = $character->getClassId();
  $faction = $character->getFactionId();
  $HK = $character->getLifetimeHonorableKills();
  
  $query = "INSERT INTO users (userName, password) VALUES ('$name', '$pw')";
  $result = mysqli_query($db, $query)
  or die("Error querying database");
  
  $query = "INSERT INTO characters (charName, charRealm, lvl, race, sex, charClass, Faction, HK) VALUES ('$charName', '$charRealm', '$lvl', '$race', '$sex', '$charClass', '$faction', '$HK')";
  $result = mysqli_query($db, $query)
   or die("Error Querying Database");
   
   $query = "INSERT INTO userCharacters (userId, userChar, userRealm) VALUES ('$name', '$charName', '$charRealm')";
   $result = mysqli_query($db, $query)
   or die ("Error Queryin Database");
   
   echo "<h1>Thankyou for registering for romanceinazeroth.com.</h1>";
  
  ?>
  </div>
  </body>
  </html>