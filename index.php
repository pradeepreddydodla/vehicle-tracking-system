<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search | Your Vehicle</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #24B7A4;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
  </head>
  

 
 
  

  
  
  <body>
 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div class="rto" align="right"><a href="rtohome.html"><button type="submit"  >Know RTO Details</button> </a></div>
    <div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
          <div class="logo text-center">
            <img src="img/logo.png" alt="logo" width="150">
            <h2>Lost Your Vehicle &nbsp;?</h2>
          </div>

          
          <h2 class="subs-title text-center">We Are Here To Help You &nbsp;!!!</h2>
		  <br>
          <div class="subcription-info text-center">
            <form class="subscribe_form" action="search.php" method="post" >
              <input  placeholder="Enter Vehicle Number..."  id="number" name="number" >
			 
              <input class="subscribe"  value="Search" type="submit">
            </form>
           
          </div>
        </div>
      </div>
	  <br><br><br>
      <section>
        <div class="container">
          <div class="row bort text-center">
            <div class="social">
              <ul>
                <li>
                  <a href=""><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="about" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="about-title">
                <h2>About Us</h2>
                <p>Scroll down to know more</p>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s">
                <div class="img">
                  <i class="fa fa-refresh"></i>
                </div>
                <h3 class="abt-hd">Our process</h3>
                <p>Our process includes the prediction of vehicle location based on the number provided</p>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                <div class="img">
                  <i class="fa fa-eye"></i>
                </div>
                <h3 class="abt-hd">Our Vision</h3>
                <p>Our vision is to produce the perfect output with high reliability and usability</p>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s">
                <div class="img">
                  <i class="fa fa-cogs"></i>
                </div>
                <h3 class="abt-hd">Our Approach</h3>
                <p>Our approach is to help the user in knowing their lost vehicle details,location and time details</p>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s">
                <div class="img">
                  <i class="fa fa-dot-circle-o"></i>
                </div>
                <h3 class="abt-hd">Our Objective</h3>
                <p>Our objective is to know the location of lost vehicle using our vehicle number plate recognition system</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div id="contact-info">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="contact-title">
                <i class="fa fa-envelope"></i>
                <h2>Register Here</h2>
                <p>To get updates of your lost vehicle !!</p>
              </div>
            </div>
            <div class="contact col-md-6 wow fadeIn delay-08s">
              <div class="col-md-10 col-md-offset-1">
              <div id="note"></div>
                  <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="vehicle" class="form-control" id="vehicle" placeholder="Your Vehicle No" data-rule="minlen:4" data-msg="Please enter a valid vehicle number" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile" data-rule="minlen:4" data-msg="Please enter a valid mobile no" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="details" rows="5" data-rule="required" data-msg="Please write something for proper enquiry" placeholder="Give some details on where it is lost..."></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="contact-submit">Send Message</button></div>
                    </form>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
         <div class="row bort">

           <div class="copyright">
                
                <div class="credits">
                    
                    Designed by <a href="https://facebook.com/pradeepreddy0003">Pradeep Reddy</a>
                </div>
           </div>

         </div>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
	<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
    
  </body>
</html>











<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

//database connection


$servername = "mysql.hostinger.in";
$username = "u248795239_user";
$password = "u248795239";
$dbname = "u248795239_vnrs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$var1 = mysqli_real_escape_string($conn, $_POST['vehicle']);
$var2 = mysqli_real_escape_string($conn, $_POST['email']);
$var3 = mysqli_real_escape_string($conn, $_POST['mobile']);
$var4 = mysqli_real_escape_string($conn, $_POST['details']);


$sql = "INSERT INTO register (vehicle,email,mobile,details)
VALUES ('$var1','$var2','$var3','$var4')";

if (mysqli_query($conn, $sql)) 
{
echo '<script language="javascript">';
echo 'alert("Successfully Registered. Thank You !!")';
echo '</script>';
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>







<?php
require "test.php";
?>


<?php
require "notification.php";
?>

