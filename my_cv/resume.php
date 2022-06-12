<?php
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

<html>
<head>
    <title>Chima Obed, Enyeribe's cv</title>
</head>
<body> 
    <div align = center>
    <h1 > HNG INTERNSHIP </h1> 
    <p> <b> Links: </b>
    <p> <a href = "https://zuri.team">https://zuri.team</a> </p>
    <p> <a href = "https://training.zuri.team">https://training.zuri.team</a> </p>
    <p> <a href = "https://internship.zuri.team">https://internship.zuri.team</a> </p>
    
        <img src = 'jasper.jpg' width = '80' height ='100'> <br><br>
        <p> <h2> CHIMA OBED, ENYERIBE </h2> </p>
        <p> <h3> Software Developer in the process </h3> </p>
        <p> <b>Experience:</b> Less than 6 months  </p>
        <p> <b>Location:</b>  Kaduna, Nigeria </p>
        <p> <b> Phone:</b> +2348169953309 </p>
        <p> <b>Email:</b>  <a href ='jasperobed@gmail.com'> jasperobed@gmail.com</a> 
       
<hr>
    
        <h2> ABOUT </h2>
        <p> I am a newbie software developer trying to find my foot in this ever expanding tech world. 
            His experience involves building webpages with html, contact and registration forms with
            the necessary functionalities using php and mysql database. Built a madlib game using python
            and working with python libraries such as numpy and panda.
            I'm an autodidact ENTP as I love abstraction, philosophy and logic. My hobbies involves singing(RnB),
            playing the piano, reading, travelling and most importantly eating. I 
            look forward for work/project collaboration.
        </p>
    
<hr>

        <h2> EXPERIENCE </h2>
        <p> Architected and developed the frontend for turbotax and won
             award for the finance category. (hype)</p>
        <p> Led critical and complex projects that involved highly custom PHP
            implementation for scale, match healthcare standards and integrate it with JAVA EE. (hype)</p>
        <p> Works as content creator @ <a href='avalondigitalinitiative.com' >AVALON DIGITAL INITIATIVE</a> 
    
 <hr>
    
        <h2> SKILLS </h2>
        <p> Content creation, Data structures, Data visualization, 
            Data analysis, Data wrangling, </p>
        <p> <b>Language skills:</b> Python, PHP, HTML </p>
        <p> <b> Framework:</b> numpy, panda </p> 
        <p> Database design and storage (MYSQL) </p> 

<hr>
        <h2> EDUCATION </h2>
            <p> University of the People| Distance education, Pasadena, California (online)
                | Computer science | 2021- present </p>
            <p> Cambridge Advanced Level Programme (A'Level) | Calabar |2013 - 2014 </p>
            <p> New Bethel Secondary school | Imo state | 2002 -2008 </p>
    <br>
<hr>

        <h2> PROJECT/PORTFOLIO</h2>
        <p><b> My Portfolio:</b> https </p>
        <p> <b>Github:</b> <a href ='https://www.github.com/jasperobed'>https://www.github.com/jasperobed</a></p>
        <p><b>Medium:</b> <a href ='https://www.medium.com/@jasperobed'>https://www.medium.com/@jasperobed</a> </p>
        <p><b>LinkedIn:</b> <a href='https://www.linkedin.com/in/chima-obed-jasper'> https://www.linkedin.com/in/chima-obed-jasper</a></p>
        <p> <b>Website:</b> <a href ='https://www.avalondigitalinitiative.com'>https://www.avalondigitalinitiative.com</a></p>
<hr>
<br>  


    <h3> CONTACT CHIMA </h3> 
        <form action = 'resume.php' method ='post'>
            <input type='text' name='name' placeholder='Name' required />
                <br><br>
            <input type="number" name="phone" placeholder='PhoneNumber' pattern ="[0-9]+" required />
            <br><br>
            <input type="email" name="email" placeholder="Email" required />
                <br><br>
            <textarea id = 'text' name ='message' rows= '6' cols = '40' placeholder="Enter your message" pattern ='[a-zA-Z0-9]+' required /> </textarea>
            <br><br>
            
            <button type ="submit" name = "submit" value ="submit"> Send Message </button>
        </form> 
    </div>   
</body>
</html>

?>

