<?php
// define variables and set to empty values
$name = $sex = $dob = $contact = $email = $courseinbest = $yearofpassing = $profession = $organisation = $permanentstreet1 = $permanentstreet2 = $permanentcity = $permanentpincode = $permanentcountry = $blood = "";

// Create connection
$con=mysqli_connect("localhost","root","kolli","bestalumni");

// Check connection
if(mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ($name !=null & $sex!=null & $dob!=null & $contact!=null & $email!=null & $courseinbest!=null & $yearofpassing!=null) {
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
  mysqli_select_db("bestalumni") or die(mysqli_error()); 
  $query="INSERT INTO `registration`(`name`, `sex`, `dob`, `contact`, `email`, `courseinbest`, 
  `yearofpassing`, `profession`, `organisation`, `permanentstreet1`, `permanentstreet2`, `permanentcity`, 
  `permanentstate`, `permanentpincode`, `permanentcountry`, `blood`) 
  VALUES (`$name`, `$sex`, `$dob`, `$contact`, `$email`, `$courseinbest`, `$yearofpassing`, `$profession`, 
  `$organisation`, `$permanentstreet1`, `$permanentstreet2`, `$permanentcity`, `$permanentstate`, `$permanentpincode`, `$permanentcountry`, `$blood`)";
}

?>
