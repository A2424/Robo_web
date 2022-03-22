<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>roboWeb</title>
    <!-- complete css link -->
    <link rel="stylesheet" href="stylesheet.css" />
    <!-- contact form css -->
    <link rel="stylesheet" type="text/css" href="Style.css">
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- social icon  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- avtar cdn -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> -->
  </head>
  <body>
  
    <header>
      <!-- navbar -->
      <nav class="main-nav">
        <input type="checkbox" id="check" />
        <label for="check" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <a href="index.php" class="logo"><i class="fab fa-android" style="font-size: 55px;"></i>Web</a>
        <ul class="navlinks">
          <li style="float: left;"><a href="index.php"><i class="material-icons"style="font-size:25px;">home</i>Home</a></li>
         <div class="dropdown">
           <li ><a href="#">content</a> </li>
          <div class="dropdown-content">
            <a href="#blog">Blogs</a>
            <!-- <a href="#">Events</a> -->
            <a href="#video">Videos</a>
            <a href="#qut">Thoughts</a>
            <a href="#contact">Leave message</a>
          </div>
        </div>  
        <li><a href="#comm">community</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#" class="signin"><span class="fa fa-sign-in"></span> SignIn</a></li>
        </ul>
      </nav>
    </header>
    <?php
        if(isset($_SESSION['msg']))
        {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
      <!-- landing -->
    <div class="landing">
     <!-- <h1 class="heading1">All About Robotics</h1> -->
      <video width="100%" height="25%" autoplay loop muted>
        <source src="video.mp4" type="video/mp4">
       
        Your browser does not support the video tag.
      </video>
      <div class="text-box">
        <h1 style="font-size: 225px;font-weight: 900;">ROBOTICS</h1>
      </div>
    </div>

    <!-- Intro section -->

     <!-- intro section -->
     <div id="about">
    <div class="background-set">
      <h2 class="varient">Introduction</h2>
      <br>
      <div class="text-color">
      <strong><b><p>World of Robotics is a science ensued by humans.</p>
      <p>Opportunities enhances craze of interest.</p>
      <p>here u will get knowledge how the robotics is</p> 
      <p>being raising by new and superb innovations.This</p>
      <p>platform makes you interact with best mentors</p> 
      <P>who guids you to encourage your ideas.</p>
      <p>Robos are minds of adepted humans controlled</p> 
      <P>to through their efficience.Here one can enhance</p>
      <p>thier skills and also events too will provides</p> 
      <p>you,your adroit mind a golden opprtunity.</p></b></strong>
    </div>
    <div class="cube">
      <div class="top"></div>
      <div>
        <span style="--i:0"></span>
        <span style="--i:1"></span>
        <span style="--i:2"></span>
        <span style="--i:3"></span>
      </div>
      
    </div>
    </div>
  </div>

    <!-- video section -->

    <div class="videos" id="video">
      <h1 ><b>Videos For Learners</b></h1>

    
     
      <iframe width="350" height="300" style="margin-right:4em;" src="https://www.youtube.com/embed/oHKCwyUa2rg?controls=0">
      </iframe>

      <iframe width="350" height="300" style="margin-right: 4em;" src="https://www.youtube.com/embed/-UsIABWyOtI?controls=0">
      </iframe>

      <iframe width="350" height="300"style="margin-right:" src="https://www.youtube.com/embed/PUaQmT-lZWw?controls=0">
    
      </iframe>
      <!-- <iframe width="300" height="200" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
      </iframe> -->
    </div>

     <!-- blog section -->

     <div class="container-blog" id="blog">
      <h2>blogs</h2>
      <!-- <p><hr ></p> -->
      <br>
      <div class="row">
        <!-- <div class="col-lg-4"> -->
      <div class="card-blog-1">
        <img class="card-img-top" src="sofia.jpg" alt="Card image" style="width:100%; height: 50%;">
        <div class="card-body">
          <h4 class="card-title">Hanson AI</h4>
          <p class="card-text">Hanson Robotics’ most advanced human-like robot, Sophia, personifies our dreams for the future of AI. As a unique combination of science, engineering, and artistry, Sophia is simultaneously a human-crafted science fiction character depicting the future of AI and robotics, and a platform for advanced robotics and AI research.</p>
          <a href="https://www.hansonrobotics.com/sophia/" class="btn btn-primary" >read more</a>
        </div>
      </div>
      <br>
      
      <div class="card-blog-2">
         <img class="card-img-middle" src="images.jpg" alt="Card image" style="width:100%;">
        <div class="card-body">
          <h4 class="card-title">Tom Green</h4>
          <p class="card-text">News briefs for the week take a look at goods-to-robot fulfillment—the Nimble Robotics way, waiter robots in a war-torn city, realism taking hold in the faces of humanoid robots, Google’s robots learn to do chores, advantages of drones with birds’ feet, and microrobots fighting cancer.San Francisco-based Nimble Robotics offers avery good which is goods-to-robot pick n’ pack solution with retail customers paying per pick.</p>
          <a href="https://blog.robotiq.com/?_ga=2.117819401.1402713675.1585648939-1874993358.1585648939" class="btn btn-primary">read more</a>
        </div>
      </div>
    
      <div class="card-blog-3">
         <img class="card-img-bottom" src="blog2.jpg" alt="Card image" style="width:100%;">
        <div class="card-body">
          <h4 class="card-title">Alex Owen-Hill</h4>
          <p class="card-text">You don't want to break your robot cables due to bad routing, right? Robot cable management can seem complex because robots can move in so many ways. But with the right approach, your cables can last for years.Good cable management is vital when you are working with robots.You might imagine that the worst situation is when a cable is routed so badly that the robot rips it apart. robot cabling problems are hard to fix on the fly.</p>
          <a href="#" class="btn btn-primary">read more</a>
        </div>
      </div>
      </div>
    </div>
    


<!-- Quotes Section -->
<div class="quotes" id=qut> 
<div class="w3-container">
  <h1><b>Quotes</b></h1>
<br>
  <div class="w3-panel w3-card-3 w3-center" style="width:50% right">
    <span style="font-size:100px">❝</span><br>
    <br>
    <h2 style="margin-top:-60px"><i><b> Robotics and other combinations will make the world pretty fantastic compared with today.</b></i></h2>
  </div>
  <div class="w3-panel w3-card-3 w3-center" style="width:50% right">
    <span style="font-size:100px">❝</span><br>
    <br>
    <h2 style="margin-top:-60px"><i><b>We're fascinated with robots because they are reflections of ourseleves.</b></i></h2>
  </div>
  
</div>

</div>
   <!-- community -->
   <div class="community" id="comm">
    <h1 ><b>Our Community</b></h1>
       <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card p-0">
            <div class="card-image"> <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
            <div class="card-content d-flex flex-column align-items-center">
                <h4 class="pt-2">SomeOne Famous</h4>
                <h5>Creative Desinger</h5>
                <ul class="social-icons d-flex justify-content-center">
                    <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a> </li>
                    <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a> </li>
                    <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a> </li>
                </ul>
            </div>
        </div>
    </div>
        <div class="col-lg-4">
            <div class="card p-0">
                <div class="card-image"> <img src="https://images.pexels.com/photos/2746187/pexels-photo-2746187.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
                <div class="card-content d-flex flex-column align-items-center">
                    <h4 class="pt-2">SomeOne Famous</h4>
                    <h5>Creative Desinger</h5>
                    <ul class="social-icons d-flex justify-content-center">
                        <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a> </li>
                        <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a> </li>
                        <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-0">
                <div class="card-image"> <img src="https://images.pexels.com/photos/381843/pexels-photo-381843.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
                <div class="card-content d-flex flex-column align-items-center">
                    <h4 class="pt-2">SomeOne Famous</h4>
                    <h5>Creative Desinger</h5>
                    <ul class="social-icons d-flex justify-content-center">
                        <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a> </li>
                        <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a> </li>
                        <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-0">
                <div class="card-image"> <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
                <div class="card-content d-flex flex-column align-items-center">
                    <h4 class="pt-2">SomeOne Famous</h4>
                    <h5>Creative Desinger</h5>
                    <ul class="social-icons d-flex justify-content-center">
                        <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a> </li>
                        <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a> </li>
                        <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="card p-0">
              <div class="card-image"> <img src="https://images.pexels.com/photos/2746187/pexels-photo-2746187.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
              <div class="card-content d-flex flex-column align-items-center">
                  <h4 class="pt-2">SomeOne Famous</h4>
                  <h5>Creative Desinger</h5>
                  <ul class="social-icons d-flex justify-content-center">
                      <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a> </li>
                      <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a> </li>
                      <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a> </li>
                  </ul>
              </div>
          </div>
      </div>
    </div>
</div>
</div>

<!-- contact form -->

<div class="cover" id="contact">

  <div class="container">
    <div class="head-color"><h1 color="white" style="font-family: Georgia, 'Times New Roman', Times, serif;width:800px;height:200px;  "><strong><b>LETS TALK</b></strong></h1>
    <p id="text-size1" style="font-family: 'Times New Roman', Times, serif;"><i>Want to grab more?Write to us!</i></p>
    <h4 class="text-size1"><b>Address: 33 Krishna Bagh,Heera Bagh</b></h4>
    <h4 class="text-size1"><b>Road Dayal Bagh,near Anand Apartment,</b></h4>
    <h4 class="text-size1"><b>Agra</b></h4>
    <p id="text-size2" style="font-family: 'Times New Roman', Times, serif;"><i>Mail:robostar@gmail.com</i></p>
    </div>
    <div class="frame" >
    <!-- enctype="text/plain" -->
      <form class="top-align" action="insertprocess.php" method="POST" >
        <center>
            <input color="white" class="input-color1" type="text" name="name" value="" placeholder="Full name" required>
            <input color="white" class="input-color1" type="text" name="email" value="" placeholder="Email" required>
            <br>
            
            <br>
            <input color="white" class="input-color2" type="tel"  name="mobile" value="" placeholder="Mobile" required>
            <br>
            
            <br>
            <input color="white" class="input-color2" type="text"  name="subject" value="" placeholder="Subject" required>
            <br>
            
            <br>
            <textarea id="input-color3" type="text" name="message" placeholder="Message" value="" rows="4" cols="50" > </textarea>
            <br>
            <br>
            <button  id="input-color" type="submit">Submit</button>
            <!-- <input id="input-color" type="submit" name="Submit" value="Submit"> -->
            <!-- <input color="white" id="input-color" type="text" name="message" value="" placeholder="Message*"> -->
        </center>
      </form>
    </div>
  </div>
</div>



<!-- <div class="copyright"> -->
<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="material-icons"  style="font-size:36px;">telegram</i></a><a href="#"><i class="material-icons"  style="font-size:36px;">snapchat</i></a><a href="#"><i class="material-icons"  style="font-size:36px;">whatsapp</i></a><a href="#"><i class="material-icons"  style="font-size:36px;">facebook</i></a></div>
      <hr style="height:2px;border-width:0;width:100% ;color:gray;background-color:white">
        <ul>
            <li><a href="index.php">Home</a></li>

            <!-- <li><a href="#">About</a></li> -->
         
            <li><a href="#">Privacy Notice</a></li>
        </ul>
  <p class="copyright">roboweb &copy; 2021 Innovation.com</p>
</div>






  </body>
</html>