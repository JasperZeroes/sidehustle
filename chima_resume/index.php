<?php

//$conn = mysqli_connect('localhost', 'root','', 'contactpage');

//if (!$conn){
    //die("Connection error :".mysqli_connect_error());
//}else{
    //cbqvtspbixxlxhqd
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


?>
    
<html>
<head>
    <title>Chima Obed, Enyeribe's cv</title>
</head>
<style>
    table, th, td {
        border : 1px solid black;
    }
</style>

<body> 
    <div align = center>
    <!-- <h1 > HNG INTERNSHIP </h1> 
    <p> <b> Links: </b>
    <p> <a href = "https://zuri.team">https://zuri.team</a> </p>
    <p> <a href = "https://training.zuri.team">https://training.zuri.team</a> </p>
    
    --!>
        <img src = 'jasper.jpg' width = '200' height ='200'> <br><br>
        <p> <h2> CHIMA OBED, ENYERIBE </h2> </p>
        <p> <h3> Software Developer in the process </h3> </p>
        <p> <b>Experience:</b> 1 year  </p>
        <p> <b>Location:</b>  Kaduna, Nigeria </p>
        <p> <b> Phone:</b> +2348169953309 </p>
        <p> <b>Email:</b>  <a href ='jasperobed@gmail.com'> jasperobed@gmail.com</a> 
       
<hr>
    
        <h2> ABOUT </h2>
        <p> I am a software developer trying to find my foot in this ever expanding tech world. With over 7 years 
            in the teaching industry as a science teacher, I started my software career in October of 2020. 
            Always looking out for opportunities to learn and grow.
            I'm autodidact ENTP as I love abstraction, philosophy and logic. My hobbies involves singing(RnB),
            playing the piano, reading, travelling and most importantly eating. I 
            look forward for work/project collaboration.
        </p>
    
<hr>

        <h2> EXPERIENCE </h2>
        <p> My experience in the tech-space so far involves building webpages with html, contact forms with
            the necessary functionalities using php and mysql database, login/signup form, resume portfolio, 
            a fully functional website with wordpress. Built a madlib game using python
            and working with python libraries such as numpy and panda.</p>
        <p> HNG internship Cohort 8 <a href = "https://internship.zuri.team"> Zuri Team </a> </p>
        <p> Works as content creator for <a href="https://www.avalondigitalinitiative.com" >Avalon Digital Initiative</a> </p>
        <p> Sidehustle internship programme  <a href= 'https://internship.sidehustle.ng'> Sidehustle programming internship Cohort 3 </a></p>
        <p> Jobberman Softskill/Entreprenuership program, 2021</p>
        <p> Participated in Tony Elumelu Entreprenuership Programme (TEEP), Cohort 6th and 7th, 2021<a href= 'https://www.tefconnect.net'> TEEP </a> </p>
 <hr>
    
        <h2> SKILLS </h2>
        <p> Content creation, Data structures, Data visualization, 
            Data analysis, Data wrangling, </p>
        <p> <b>Language skills:</b> Python, PHP, HTML5 </p>
        <p> <b> Framework:</b> numpy, Mysql, Laravel</p> 
        <p> Database design and storage (MYSQLi) </p> 
        <p> <b> CMS :</b> Wordpress </p>
<hr>
        <h2> EDUCATION </h2>
            <p> University of the People| Distance education, Pasadena, California (online)
                | Computer science | 2021- present </p>
            <p> Cambridge Advanced Level Programme (A'Level) | Calabar |2013 - 2014 </p>
            <p> New Bethel Secondary school | Imo state | 2002 -2008 </p>
    <br>
<hr>

        <h2> PROJECT/PORTFOLIO</h2>
        <p><b> My Portfolio:</b> <a href = "https://chima-resume.herokuapp.com"> Chima's Portfolio </a> </p>
        <p> <b>Github:</b> <a href ='https://www.github.com/jasperobed'>  Github Profile </a></p> 
        <p><b>Medium:</b> <a href ='https://www.medium.com/@jasperobed'> Medium Profile</a> </p>
        <p><b>LinkedIn:</b> <a href='https://www.linkedin.com/in/chima-obed-jasper'> LinkedIn Profile </a></p> 
        <p> <b>Website:</b> <a href ='https://www.avalondigitalinitiative.com'>Avalon Digital Initiative </a></p>
<hr>
<br>  


    <h3> CONTACT CHIMA </h3> 
        <form action = 'index.php' method ='post'>
            <input type='text' name='name' placeholder='FullName' required />
                <br><br>
            <input type="number" name="phone" placeholder='PhoneNumber' pattern ="[0-9]+" required />
            <br><br>
            <input type="email" name="email" placeholder="Email" required />
                <br><br>
            <textarea name ='message' rows= '6' cols = '40' placeholder="Enter your message" pattern ='[a-zA-Z0-9]+' required /></textarea>
            <br><br>
            
            <button type ="submit" name = "submit" value ="submit"> Send Message </button>
        </form> 



