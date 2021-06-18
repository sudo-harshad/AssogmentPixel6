<?php
include 'Validation.php';
include 'Config.php';
?>
  

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Harshad Meshram">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP6</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@340&display=swap" rel="stylesheet">



    <style>
        body{
            background-image: url(wordpress.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        fieldset {
        border: 2px solid black;
        padding: 10px;
        }
        legend {
          background-color: black;
          color: white;
          padding: 5px 10px;

        }
        .reg{
            margin: auto;background-color: aliceblue;padding: 24px;max-width:inherit;max-height: max-content;
            border-radius: 10px;opacity: 1;border:1px solid black;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);opacity: 1;
        }
        
        input {
            padding: 3px;
    
        }
        p{
            color: black;
            font-size: 20px;
            font-family: 'Bree Serif', serif;;
        }
        .p1{
            color: blanchedalmond;
            font-size: 10px;
        }

        .dropd{
            width:200px;
            height:35px;
            border-radius:5px;
            background-color: aliceblue;
            color:black;
            font-style:bold;
        }
       
       
    </style>


</head>
<body>


        <?php 
            include 'Header.php';
           

        ?>

    

    <div class="container" style="padding-top:60px;">
        <div class="reg" >
        
              <h3> Registration Form</h3>
           
        <form class="form"  method="post" action="Profile.php" style="gap: 10px; border: 2px solid black;border-left: none;border-right: none;">
            <br>
       
             <fieldset>
                <legend>Personal Information </legend>
                <div>
                <div class="row">
                    <div class="col-md-6" >
                        <?php
                        
                       
                        
                        ?>
                        <Label><p>First Name</p> </Label>
                        <input type="text" name="fname" id="fname" class="form-control" required>
                        <span class = "error">* <?php echo $nameErr;?></span>

                    </div>
                    <div class="col-md-6">
                        <Label><p>Last Name </p></Label>
                        <input type="text" name="lname" id="lname" class="form-control" required>
                        <span class = "error">* <?php echo $lnameErr;?></span>

                    </div>
                </div>
                <br>    
                <div class="row" style="padding-top: 10px;">
                    <div class="col-sm-6">
                        <Label><p>Gender</p></Label>
                        <span class = "error">* <?php echo $genderErr;?></span>
                    </div>
                    <div class="col-md-6">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                </div>
                
                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <Label><p>E-mail*</p></Label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <span class = "error">* <?php echo $emailErr;?></span>

                    </div>
                    <div class="col-md-6">
                        
                        <Label><p>Phone No</p></Label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">+91</span>
                            <input type="number" class="form-control"  name="Mobile">
                          </div>
                    </div>
                </div>

               <div class="row">
                <div class="col-md-6">
                    <label for="city"><p>City</p></label>
                    <input type="text" name="city" id="city" class="form-control">
                </div>
                <div class="col-md-6">
                  
                    <label for=""><p> Select State</p></label>
                    <?php echo $state;?>
                    <br>
                    
                            <select id="States" name="states" class="dropd">
                              <option value=""> Select state</option>
                              <option value="Maharshtra">"Maharashtra"</option>
                              <option value="Delhi">"Delhi"</option>
                              <option value="Goa">Goa</option>
                              <option value="Chandigarh">Chandigarh</option>
                            </select>

                </div>
               </div>
               <br>

               <div class="row">
                <div class="col-sm-6">
                <p>Upload photo </p>
                </div>
                <div class="col-sm-3">
                    <input type="file" name="fileup" id="file" enctype="multipart/form-data">
                </div>
               </div>
            
             <br>


             <legend>Education</legend>
             <br>
             <br>
                <div class="row">
                <div class="col-md-6">
                  
                  <label for=""><p1>Graduation</p1></label>
                  <br>
                  
                          <select id="graduation1" name="graduation1" class="dropd">
                            <option value=""> Select </option>
                            <option value="Under graduate">"Under Graduate"</option>
                            <option value="Graduate">"Graduate"</option>
                          </select>

              </div>
                   
                <div class="col-md-6" >
                    <label for="passout"><p1>Graduation Year</p1></label>
                    <br>
                            <select id="passout" name="passout" class="dropd">
                            <option value="">Select year</option>
                              <option value="2021">2021</option>
                              <option value="2020">2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                            </select>

                </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="graduation-percentage"><p>Graduation Grade/Percentage</p></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="grades" id=grade class="form-control">
                     </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="specialization"><p>Specialization</p></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="specializtion" name="specialisation">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="college"><p>college</p></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="collegename" name="collegename">
                    </div>
                </div>
                <br>
                
                    
                <legend>Skills</legend>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="skills"><p>Primary Skills</p></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="primskills">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="secskills"><p>Secondary Skills</p></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="secskills">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="certification"><p>certifications</p></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="certification">
                    </div>
                </div>

                <legend>Pitch</legend>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="pitch"><p>Pitch<p></label>
                    </div>
                    <div class="col-md-6">
                        <textarea name="pitch" id="" cols="50" rows="5" class="textarea"></textarea>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row">
                <button class="btn btn-primary" type="submit" name="submit" action="insert.php">submit</button>
                </div>
                <br>
                <br>
            </div>
            <br> 
            

         


           


            
             </fieldset>
        </form>
           
        </div>
    </div>
            
           


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>