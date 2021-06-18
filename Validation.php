<?php


$nameErr = "";
$First_name = "";
$Last_name = "";
$Mail = "";
$City = "";
$Grade = "";
$Special = "";
$Gender = "";
$College = "";
$name = "";
$lnameErr = $nameErr = $emailErr = $genderErr = $websiteErr = "";
$stateerror = $name = $lname = $email = $gender = $comment = $website = "";
$state = "";

$des = "";
$pro = "";
if ($Gender == "male" ) {
    $des = "Mr.";
    $pro = "His";
    # code...
}else if($Gender == "female" ) {
    $des = "Ms.";
    $pro = "Her";
}
else{
    $des = "Mr./Ms.";
};





  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
   
    if (empty($_POST["fname"])) 
    {
      $nameErr = "Name is required";
   
    } else 
    {
      $name = test_input($_POST["fname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
       {
        $nameErr = "Only letters and white space allowed";
       }
    }



    if (empty($_POST["lname"])) 
    {
      $lnameErr = "Name is required";
   
    } else 
    {
      $lname = test_input($_POST["lname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
       {
        $lnameErr = "Only letters and white space allowed";
       }
    }
  
    if (empty($_POST["email"])) 
    {
      $emailErr = "Email is required";
    } else
     {
      $email =test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
       {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender =test_input($_POST["gender"]);
      $Gender = $gender;
    }

    
    
  


  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }  


?>
