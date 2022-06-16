<?php
	$con = new mysqli("localhost","root","");
			if($con->connect_errno > 0){
			die('Unable to connect to database [' . $con->connect_error . ']');  } 
     
	$con->query("CREATE DATABASE IF NOT EXISTS cs_automation");
	 
             mysqli_select_db($con,"cs_automation");

             $balmiki="CREATE TABLE IF NOT EXISTS register (
            id int(11) NOT NULL auto_increment,
             name varchar(300)NOT NULL,
             lastname varchar(300)NOT NULL,
             contact varchar(100)NOT NULL,
             email varchar(300)NOT NULL,
             comment varchar(255)NOT NULL,
             PRIMARY KEY(id) )";
           $con->query($balmiki);


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
}

$mydb = "insert into register (name,lastname,contact,email,comment)
 value('$name','$lastname','$contact','$email','$comment')";

 $query = mysqli_query ($con,$mydb);
 echo "success";
 header('location:success.html');
 
?>



<?php
     /*       $con=mysqli_connect('localhost','root','','cs');
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
            }
			echo "success";

            // extra add Balmiki
            header('location:success.html'); */

          ?>
		  

  
