
<?php
 /*   $con = mysqli_connect('localhost','root','','cs');
    if ($con){
        echo "connected";
    }else{
        echo "not connect";
    }

    mysqli_select_db($con,'cs');    //database name
    $name = $_POST['name'];         //name atribute name
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $text = $_POST['text'];

        //table name "user_information"//
    $query = "insert into user_information (name, lastname, contact, email, text)   
    values ('$name', '$lastname', '$contact', '$email', '$text',) ";

    echo "$query";  
    
    mysqli_query($con,$query);
    header('location:user.html');  //redrect index page after submition  */
?>

<?php
            $con=mysqli_connect('localhost','root','','cs');
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
            header('location:success.html');

          ?>
		  