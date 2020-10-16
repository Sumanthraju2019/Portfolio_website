<?php

$error = "";
$success = "";
if(array_key_exists("submit",$_POST))
{
    $link = mysqli_connect("localhost","sumanth","","da1");
    if(mysqli_connect_error()){
        die("Database connection Error");
    }

    if(!$_POST['fname'])
    {
        $error .="First Name is required<br>";
    }
    if(!$_POST['lname'])
    {
        $error .="Last name is required<br>";
    }
    if(!$_POST['email'])
    {
        
        $error .= "An email address is required<br>";
    }
    if(!$_POST['phno'])
    {
        
        $error .= "Phone number is required<br>";
    }

    if($error!="")
    {
        
        $error = "<p>There is an error in your form</p>".$error;
    }
    else
    {
        
            $query = "INSERT INTO contact(FNAME,LNAME,EID,PHNO) 
            VALUES('".mysqli_real_escape_string($link,$_POST['fname'])."',
            '".mysqli_real_escape_string($link,$_POST['lname'])."',
            '".mysqli_real_escape_string($link,$_POST['email'])."',
            '".mysqli_real_escape_string($link,$_POST['phno'])."')";
            if(!mysqli_query($link,$query))
            {
                $error = "<p>Please try again.</p>";
            }
            else
            {
                
                $success =  "<p>Successfully submitted.</p>";
            }

        
        
        
    }
}

  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            MY PORTFOLIO
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style>
            
          html
          {
            scroll-behavior: smooth;
            background-color: rgb(247, 247, 247);
          }
          #submit
          {
            margin-left: 10%;
            width: 130px;
            border-radius: 4px;
            padding: 10px;
            color: black;
            background-color: rgba(243, 248, 253, 0.664);
          }
          #btp
          {
            font-size: 40px;
            margin-right: 0%;
            margin-left: 100%;
          }
          #btp:hover
          {
            cursor: pointer;
          }
          #submit:hover
          {
            background-color: rgb(235, 235, 235);
          }
          .reviews
          {
            margin: 0%;
            margin-right: 0%;
            padding-right: 10%;
            padding-left: 13%;
            padding-top: 40px;
            background-color:;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 22px;
            font: bold;
          }
            .navbar
            {
              background-color: rgba(255, 174, 0, 0.671);
            }
            .nav
            {
                float: right;
            }
            
            body
            {
                font-family: 'Times New Roman', Times, serif;
                scroll-behavior: smooth;

            }
            i
            {
                color: orange;
            }
            a
            {
              color: orange;
            }
            
            
            H4{
              font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            .lang
            {
                font-weight: 800;
                color: rgb(43, 170, 255);
            }
            p{
            margin: 10px;  
            font-weight: 400;
            font-size: 20px;
            }
            .input{
              width: 350px;
              padding: 10px;
            }
            .gu
            {
              margin-top: 40px;
            }
            .cont
            {
              margin-top: 50px;
            }
            .z
            {
                text-align: center;
                color: rgb(0, 162, 255);
            }
            #about
            {
              padding-bottom: 20px;
              padding-top: 15px;
              padding-left: 200px;
              padding-right: 200px;
              color: black;
              margin-top: 50px;
              margin-left: 0%;
              margin-right: 0%;
              background-color: ;
            }
            .form-control
            {
              padding-top: 80px;
              padding-left: 20%;
              background-color: rgba(236, 236, 236, 0.274);
            }
            .myd
            {
                position: absolute;
                margin-top: -40%;
                margin-left: 26%;
                font-size: 50px;
                text-align: center;
                color: white;
            }
            .dp{
                border-radius: 50%;
            }
            
            {
                color: yellow;
            }
           #skills
           {
               margin: 50px;
           }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      </head>
    
    <body>
      
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">MY PORTFOLIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">SKILLS</a>
              
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#acq" role="button" aria-haspopup="true" aria-expanded="false">ACADEMIC QUALIFICATIONS</a>
                
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT ME</a>
            </li>
          </ul>
        </div>
      </nav>
         
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="photo-1497032628192-86f99bcd76bc.jpg" height="1000px" width="500px" height="700px" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="960x0.jpg" width="500px" height="1000px" alt="Second slide">
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div>
            <div class="myd">
                <span>ATCHI SUMANTH RAJU</span>
            <ul>
                <a href="#"><i class="fab fa-linkedin"></i>&nbsp</a>
                <a href="#"><i class="fab fa-facebook-f"></i>&nbsp</a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </ul>
            
            </div>
          </div>
<hr class="hr">
          <div class="container gu">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6" style="margin-left: 60px;">
                    <img src="dp.jpg" width="400px" alt="" class="dp">
                </div>
                
         
            </div>
        </div><br>
        <div class="container c1">
            <h2>ABOUT ME</h2>
            <p>I am a 20 year old undergraduate studying B.Tech Information
                Technology in VIT VELLORE.I am very passionate about technology
                ,a coding enthusiast and have explored many technologies and coding
                languages.I always aim to acquire more and more knowledge.I am Visionary with goals and dreams. I have good relationship with people and can work with
                anybody anywhere irrespective of the environment. I believe anything is achievable with the help of my work.  
            </p>

        </div>

        <div class="container cont">
          <div class="row">
            <div class="col-12 points">
                <p><i class="fas fa-angle-right"></i><b>Name :</b>  ATCHI SUMANTH RAJU</p>
                <p><i class="fas fa-angle-right"></i><b>Phone :</b>  8919240391</p>
                <p><i class="fas fa-angle-right"></i><b>City :</b>  HYDERABAD</p>
                <p><i class="fas fa-angle-right"></i><b>Email :</b>  sumanthrajuatchi@gmail.com</p>
            </div>

            
          
          </div>
        
        </div>

        <div id="skills" class="container">
          <h2>SKILLS</h2>
          <div class="row">

            <div class="re">
                <img src="hcjsjq.png" width="260px" alt="">
                
                <img src="" alt="">
                    <img src="angular-card.png" width="260px" alt="">
                   <b style="font-size: 50px; color: blue;">C&nbsp;</b><b style="color: rgb(61, 108, 196); font-size: 50px;">&nbsp;C++</b><b style="font-size: 50px; color: crimson;">&nbsp;&nbsp;PYTHON</b>
                </div>
                
                <div class="col-4 re">
                
                </div>

          </div>
        </div>
        <div id="acq">
            <div>
                <h2 style="text-align: center; color: crimson;">ACADEMIC QUALIFICATIONS</h2>
                <p class="z">Under Graduation</p>
                <p class="z">Qualification : B Tech Information Technology</p>
                <p class="z">Institution : VELLORE INSTITUTE OF TECHNOLOGY, VELLORE</p>
                <h2 style="text-align: center; color: crimson;">INTERMEDIATE(PLUS ONE AND PLUS TWO)</h2>
                <p class="z">Institution : Chaitanya IIT Academy</p>
                <p class="z">Year of passing : 2019</p>
                <p class="z">Percentage : 95%</p>
                <p class="z">Place : Madhapur, HYDERABAD</p>
                <h2 style="text-align: center; color: crimson;">SECONDARY EDUCATION</h2>
                <p class="z">Institution : Chaitanya IIT Academy</p>
                <p class="z">Year of passing : 2017</p>
                <p class="z">Percentage : 97%</p>
                <p class="z">Place : S R NAGAR, HYDERABAD</p>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="Screenshot 2020-10-16 211725.png" width="500px" height="700px" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="Screenshot 2020-10-16 211806.png" width="500px" height="700px" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="Screenshot 2020-10-16 211833.png" width="500px" height="700px" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        

        <br>
        <div class="container contact">
          <h2>CONTACT ME</h2>
          <form class="form-control" id="contact" method="POST">
              <label for="fname">First Name</label>
              <input class="input" name="fname" type="text" placeholder="First Name" required><br><br>
              <label for="lname">Last Name</label>
              <input class="input" name="lname" type="text" placeholder="Last Name" required><br><br>
              <label for="email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input class="input" name="email" type="email" placeholder="Email" required><br><br>              
              <label for="phno">Phone No &nbsp;</label>
              <input type="number" name="phno" id="ph" class="input" placeholder="Phone Number" required>
              <span id="vph" style="visibility: hidden;">Enter a valid number</span>
              <br>
              <br><br>
              <input type="submit" onclick="validate()" name="submit" id="submit">
              <div class="err"><?php echo $error; ?></div>
              <div class="succ"><?php echo $success; ?></div>
            </form>
           <a href="#carouselExampleIndicators"><i id="btp" class="fas fa-angle-double-up"></i></a>


        </div>
        <script type="text/javascript">
         function validate()
         {
            var ph = document.getElementById("ph").value;
            var vph = document.getElementById("vph");
            var l = String(ph).length;
            if(l<10)
            {
              vph.style.visibility="visible";
            }
          }
        </script>
    </body>
    
</html>