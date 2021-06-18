
<?php 



include 'Config.php';


  //  $filename = $_FILES["fileup"]["name"];
  //  $tempname = $_FILES["uploadfile"]["tmp_name"];   
    // $folder = "image/".$filename;

    include 'insert.php';

    if ($Gender == "male") {
        $holo = "Mr.";
        $Des = "His";
        $He = "He";
        # code...
    }else {
        # code...
        $holo = "Ms.";
        $Des = "Her";
        $He = "She";
    }






?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Harshad Meshram">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@340&display=swap" rel="stylesheet">

    <style>
        body{
            background-image: url(wordpress.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-color: rgb(255, 157, 29);
            background-position: center;
            background-attachment: fixed;
        }
        .panel{
            margin: auto;
          
            max-width: fit-content;
            max-height: fit-content;
            border: 2px solid black;
        }
        .container{
            margin-top: 4%;
            padding: 1%;
            background-color: black;
            border-radius:20px;
            width: 70%;
        }
        .panel{
            padding: 40px;
            border-radius:5px;
           
        }
        #pic{
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid white;
        }
        h1{
            color: white;
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
        .Personal,.Education,.Skills,.Pitch{
            background-color: white;
            border:2px solid orange;
            padding:15px;
        
        }
        
    </style>
</head>
<body>

    <div class="container">
        <div class="panel">
           <div class="container-fluid">
               <center>
               <img src="wordpress.jpg" alt="" srcset="" id="pic" name="profile-pic" class="img-fluid">     
                <h1><?php echo "$First_name $Last_name";?></h1>
                </center>
           </div>
        </div>
        <div class="info">
        <div class="card bg-light mb-3" style="max-width: 70rem;margin:auto;">
                <div class="card-body">
                <p class="card-text"><h5><?php echo "$holo $First_name $Last_name did $Des $gtype from $College in the year $gyear.<br>$He is highly skilled in $primskills , $secskills.<br> $He lives in $City,$state and can be contacted via $Mail and $Mob "?></h5></p>

                 </div>          
        </div>
        <div class="row" style="padding:10px;">
            <h3 style="border: 5px solid orange;margin:auto;background-color:white;">Personal</h3>
        </div>
             <div class=Personal>
                 <div class="row">
                     <div class="col-md-6">
                         <h5>First Name :  <?php echo "$First_name" ?></h5>
                     </div>
                     <div class="col-md-6">
                         <h5>Last Name :  <?php echo "$Last_name" ?></h5>
                     </div>               
                 </div>
                 <br>
                 <div class="row">
                     <div class="col-md-6">
                         <h5>Email :  <?php echo "$Mail" ?></h5>
                     </div>
                     <div class="col-md-6">
                         <h5>Phone No :  <?php echo "$Mob" ?></h5>
                     </div>               
                 </div>
                 <br>
                 <div class="row">
                     <div class="col-md-6">
                         <h5>Gender :  <?php echo "$Gender" ?></h5>
                     </div>
                     <div class="col-md-6">
                         <h5>Lives in :  <?php echo "$City,$state" ?></h5>
                     </div>               
                 </div>
             </div>

             <div class="row" style="padding:10px;">
                <h3 style="border: 5px solid orange;margin:auto;background-color:white;">Education</h3>
             </div>
             <div class="Education">
                <div class="row">
                    <div class="col-md-6">
                    <h5>Graduation :</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><?php echo "$gtype" ?></h5>
                    </div>
                 
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <h5>Passout :</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><?php echo "$gyear" ?></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <h5>College :</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><?php echo "$College" ?></h5>
                    </div>
                </div>
               
             </div>


             <div class="row" style="padding:10px;">
                <h3 style="border: 5px solid orange;margin:auto;background-color:white;">Skills</h3>
             </div>
             <div class="Skills">
                <div class="row">
                    <div class="col-md-6">
                    <h5>Primary :</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><?php echo "$primskills" ?></h5>
                    </div>
                 
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <h5>Secondary :</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><?php echo "$secskills" ?></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <h5>Certification :</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><?php echo "$certifications" ?></h5>
                    </div>
                </div>
               
             </div>


             <div class="row" style="padding:10px;">
                <h3 style="border: 5px solid orange;margin:auto;background-color:white;">Pitch</h3>
             </div>

             <div class="Pitch">
                 <div class="card bg-light mb-3" style="max-width: 70rem;margin:auto;">
                    <div class="card-body">
                    <p class="card-text"><h5><cite title="Source Title"><?php echo "$Pitch";  ?></cite></h5><br><cite ><?php echo "$First_name $Last_name" ?></cite></p>

                 </div>
            </div>

           
                    
               <br>
             </div>
             

             
            </div>

            
            <br>
        </div>

        <br>
        <br>
    </div>
   
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>