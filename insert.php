<?php

include 'Config.php';   

if (isset($_POST['submit'])) {
    

    $First_name = $_POST['fname'];
    $Last_name = $_POST['lname'];
    $Gender = $_POST['gender'];
    $Mail = $_POST['email'];
    $Mob = $_POST['Mobile'];
    $City = $_POST['city'];
    $state = $_POST['states'];
    //$image = $_FILES['fileup']['name'];
    $gtype = $_POST['graduation1'];
    $gyear = $_POST['passout'];
    $Grade = $_POST['grades'];
    $Special = $_POST['specialisation'];
    $College = $_POST['collegename'];
    $primskills = $_POST['primskills'];
    $secskills = $_POST['secskills'];
    $certifications = $_POST['certification'];
    $Pitch = $_POST['pitch'];
}


//$sqlin="INSERT INTO `Data` (`fname`, `lname`, `gender`, `mail`, `mobno`, `city`, `state`, `profilephoto`, `graduation type`, `passout`, `grade`, `specialisation`, `college`, `primaryskills`, `secondaryskills`, `certification`, `pitch`) VALUES ('$First_name', ' $Last_name ', '$Gender', '$Mail', '$Mob', '$City', '$state','profile' ,'$gtype', '$gyear', '$Grade', '$Special', '$College', '$primskills', '$secskills', '$certifications', '$Pitch')";
    
            $sqlin   = "INSERT INTO `Data` (`fname`, `lname`, `gender`, `mail`, `mobno`, `city`, `state`, `profilephoto`,
             `graduation type`, `passout`, `grade`, `specialisation`, `college`, `primaryskills`, `secondaryskills`, `certification`, `pitch`)
            VALUES ('$First_name','$Last_name','$Gender','$Mail','$Mob','$City','$state', 'image', '$gtype', '$gyear', '$Grade','$Special','$College','$primskills','$secskills','$certifications','$Pitch')";
            
           
            if (mysqli_query($connection,$sqlin)) 
            {
              
                    $msg="data inserted Successfully";
                    echo $msg;

                    # code...
                

              } else {
                echo "Error: " . $sqlin . "<br>" . mysqli_error($connection);
              }
            # code...
            

            
    # code...



?>