<?php
// define variables and set to empty values
$name = $sex = $dob = $contact = $email = $courseinbest = $yearofpassing = $profession = $organisation = $permanentstreet1 = $permanentstreet2 = $permanentstate = $permanentcity = $permanentpincode = $permanentcountry = $blood = "";

// Create connection
$link=mysqli_connect("localhost","username","password","bestalumni") or die("Error " . mysqli_error($link)); 

 $name = $_POST["name"];
  $sex =  $_POST["sex"];
  $dob =  $_POST["dob"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $courseinbest = $_POST["courseinbest"];
  $yearofpassing = $_POST["yearofpassing"];
  $profession = $_POST["profession"];
  $organisation = $_POST["organisation"];
  $permanentstreet1 = $_POST["permanentstreet1"];
  $permanentstreet2 = $_POST["permanentstreet2"];
  $permanentcity = $_POST["permanentcity"];
  $permanentpincode = $_POST["permanentpincode"];
  $permanentcountry = $_POST["permanentcountry"];
  $blood = $_POST["blood"];
 
  $query="INSERT INTO registration (`name`, `sex`, `dob`, `contact`, `email`, `courseinbest`, 
  `yearofpassing`, `profession`, `organisation`, `permanentstreet1`, `permanentstreet2`, `permanentcity`, 
  `permanentstate`, `permanentpincode`, `permanentcountry`, `blood`) 
  VALUES ('$name', '$sex', '$dob', '$contact', '$email', '$courseinbest', '$yearofpassing', '$profession', 
  '$organisation', '$permanentstreet1', '$permanentstreet2', '$permanentcity', '$permanentstate', '$permanentpincode', '$permanentcountry', '$blood')";
  if (!mysqli_query($link,$query)) {
  die('Error: ' . mysqli_error($link));
}
echo "1 record added";


?>
