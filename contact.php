<!DOCTYPE html>
<html lang="en">
<head>
  <title>CS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/rensponsiv.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CS AUTOMATION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
        </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">ABOUT</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">SERVICES</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">ELECRICAL</a></li>
        <li><a class="dropdown-item" href="#">ELECTRONICS</a></li>
        <li><a class="dropdown-item" href="#">MECATRONICS</a></li>
        <li><a class="dropdown-item" href="#">PLC</a></li>
        <li><a class="dropdown-item" href="#">MECANICAL WORKS</a></li>
        <li><a class="dropdown-item" href="#">CNC SERVICES</a></li>
      </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="contact.php">CONTACT US</a>
      </li>
     </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="main-contact">
  <!--first row-->
<div class="container-fluid contact-page text-center">
  <div class="contact-page2">
    <h2>CONTACTS</h2>
    <h5><a href="index.php"><strong>Home</strong></a> / Contact</h5>
  </div>
</div>

<!--second row map wala-->
<div class="container-fluid">
  <div class="container">
    <div class="row second pt-5">
      <div class="col-sm-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.7662342512726!2d75.9041936149953!3d30.921157683578283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a9df59eb5dcaf%3A0xc0c5c0b8140734e5!2sCS%20Automation!5e0!3m2!1sen!2sin!4v1651750077123!5m2!1sen!2sin" <!--width="100%" height="450"--> style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-sm-6 border rounded second-right">
        <div class="contant">
          <h2>Any Query Contact me !</h2>
          <P>If you have any issue related to our services, then you can contact us. <b>CS AUTOMATION</b> will help you completely from its side.</P>
         <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled d-flex">
              <li><i class="fa fa-map-marker"></i></li>
              <li><h3>Address</h3>
                <ul class="list-unstyled">
                  <li>Noor Market, Mahavir jain Colony, Tajpur Rd, near Central Jail, Ludhiana, Punjab 141014</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 ">
            <ul class="list-unstyled d-flex">
              <li><i class="fa fa-phone"></i></li>
              <li><h3>Contact</h3>
                <ul class="list-unstyled">
                  <li>+91 62807-32576</li>
                  <li>+91 78373-61592</li>
                  <li>kumarvinay783736@gmail.com</li>
                </ul>
              </li>
            </ul>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--3rd contact form-->
<div class="contact-three">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 left">
        <div class="container mt-5 mar">
          <h2>Contact Us</h2>
          <p>Fill the form carefully. we can contact you for service. CS AUTOMATION never share your data with any one.</p>
        </div>
      </div>
      <div class="col-sm-6 right">
        <div class="container shadow-lg bg-body rounded mt-5">
          <form  action="userinfo.php" method="post" required>    <!-- Form-->
            <div class="row mb-3 mt-3">
              <div class="col mt-3">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
              </div>
              <div class="col mt-3">
                <label for="lname" class="form-label">Surname:</label>
                <input type="text" class="form-control" placeholder="Enter your surname" name="lastname" required>
              </div>
            </div>
              <div class="mb-3 mt-3">
                <label for="contact" class="form-label">Contact No:</label>
                <input type="number" minlength="10" maxlength="10" class="form-control" placeholder="Enter mobile number" name="contact" required>
              </div>
              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" placeholder="Enter Email id" name="email" required>
              </div>
              <div class="mb-3 mt-3">
                <label for="text" class="form-label">Message:</label>
                <textarea class="form-control" rows="5" placeholder="Enter your Qvery" name="comment"></textarea>
              </div>
              <div class="text-center">
              <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button> 
              </div>
          </form>
           <?php
          /* $con=mysqli_connect('localhost','root','','cs');
            if(isset($_POST['submit']))
           {
              $name = $_POST['name'];         
              $lastname = $_POST['lastname'];         
              $contact = $_POST['contact'];
              $email = $_POST['email'];
              $comment = $_POST['comment'];
             $query = "insert into register (name, lastname, contact, email, comment)   
              values ('$name','$lastname','$contact','$email','$comment') ";
              $run=mysqli_query($con,$query);
            } */
          ?>
        </div>
      </div>
    </div>
  </div>
</div>




</div>
</body>
<!--footer----------------------------footer-->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row mt-5 mb-5">
        <div class="col-sm-4 mb-5">
          <h2>Address</h2><hr>
          <p>Noor Market, Mahavir jain Colony, Tajpur Rd, near<br>Central Jail, Ludhiana, Punjab 141014</p>
        </div>
        <div class="col-sm-4 mb-5">
          <h2>Contact</h2><hr>
          <ul class="list-unstyled">
            <li>+91 62807-32576, +91 78373-61592</li>
            <li>kumarvinay783736@gmail.com</li>
          </ul>
        </div>
        <div class="col-sm-4 mb-5">
          <h2>Whatsapp me</h2><hr>
          <p>Type Messege for need service</p>
          <form>
          <div class="text">
            <input class="message" type="text" class="form-control" placeholder="Whatsapp Message" name="Lastname">
            <input class="btn-submite" type="submit" class="form-control" name="Lastname">
          </div>
          </form>
		  
        </div>
		<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<p class="text-info">Design by Balmiki kumar / 1919616</p>
			</div>
			<div class="col-sm-6">
				<p class="text-info text-end">© Ludhiana Collage of Engineering & Technology</p>
			</div>
		</div>
		</div>
      </div>
    </div>
  </div>
</footer>
</html>