  
<?php
header('location : resume.php');
/*include "resume.php";
session_start();
    if (isset($_POST['submit'])){
       if(isset($_POST['name']) && isset($_POST['phone']) 
       && isset($_POST['email']) && isset($_POST['message']))

         //assign variables 
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //mail('jasperobed@gmail.com','Alert!', 'someone launched your app');
        if(mail('jasperobed@gmail.com','Alert! from'. $name , $message )){
           
            echo 'Error encountered, try again!'; 
        }else{
            echo "Message sent successfully!";
        }
    }

$conn = mysqli_connect('localhost', 'root','', 'contactpage');

if (!$conn){
    die("Connection error :".mysqli_connect_error());
}else{

    session_start();
    if (isset($_POST['submit'])){
        if(isset($_POST['name']) && isset($_POST['phone']) 
        && isset($_POST['email']) && isset($_POST['message']))

         //assign variables 
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

            //inserts the contact into database using prepared statement
        $sql = "INSERT INTO resumecontact(name, phone, email, message) VALUES(?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, 'siss', $name, $phone, $email, $message);
        $result = mysqli_stmt_execute($stmt);
      // $sql = "INSERT INTO resumecontact(name, phone, email, message) VALUES('$name', '$phone', '$email', '$message')";
      // $result = mysqli_query($conn, $sql);

            //check
        if ($result){
            echo "Successfully submitted";
        } else{
            echo "Error encountered";
        }

    }
} 
  session_start();
    if (isset($_POST['submit'])){
       if(isset($_POST['name']) && isset($_POST['phone']) 
       && isset($_POST['email']) && isset($_POST['message']))

         //assign variables 
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //mail('jasperobed@gmail.com','Alert!', 'someone launched your app');
        if(mail('jasperobed@gmail.com','Alert! from'. $name , $message )){
           
            echo "Message sent successfully!";
        }else{
            echo 'Error encountered, try again!'; 
        }
    }*/
?>
   

    


