<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Changa+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Avestan&display=swap" rel="stylesheet">
</head>

<body>
  <!-- navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light py-sm-0 ">
    <div class="container-fluid">
      <div class="d-flex">
        <img src="Image/2x2.png">
        <p class="my-auto">RENIEL TIMOLA</p>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarColor03">
        <ul class="navbar-nav mr-auto nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">PROJECTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Showcase -->
  <div id="home" class="container-fluid g-0 ">
    <div class="accounts d-none d-lg-block ">
      <a href="https://www.facebook.com/timolareniel10"> <img class="fb" src="Image/facebook.svg"> </a>
      <a href="https://www.instagram.com/itsmeniel10/"> <img class="insta" src="Image/instagram.svg"> </a>
      <a href="https://github.com/Reniel-102921"> <img class="github" src="Image/github.svg"> </a>
    </div>
    <div class="row row-cols-md-1 row-cols-lg-1">
      <!-- Header -->
      <div class="header">
        <h1 class="mx-auto name">HEY, I'M RENIEL TIMOLA</h1>
        <p class="mt-5 desc">A Junior Web Developer creates the frontend of websites and web applications, which contributes to the overall success of the product.</p>
        <a href="#project"> <button type="button" name="button">PROJECTS</button> </a>
        <img class="d-none d-sm-block mx-auto" src="Image/scroll-down.gif">
      </div>

      <!-- About -->
      <div id="about" class="about-me text-sm-start">
        <h1 class="about">ABOUT ME</h1>
        <div class="line mx-auto mt-4 "></div>
        <p class="mb-5">You can learn more about me, what I do, and my current qualifications—mostly in the areas of technology and programming.</p>
        <div class=" container d-sm-flex justify-content-center">
          <div class="col-xs-12 col-md-5 about-div1" style="padding: 30px 20px 30px 30px;">
            <h3>Get to know me!</h3> <br>
            <div>
              I'm a <b>Junior Web Developer</b> building the Front-end of Websites and Web Applications that leads to the success of the overall product. Check out some of my work in the Projects section.
            </div> <br>
            <div>
              I also enjoy providing knowledge relevant to <b>Web Development</b> that I have learnt over the years in order to assist other members of the Dev Community. Please connect or follow me on Linkedin, where I offer relevant stuff about Web Development.
            </div> <br>
            <div class="">
              I'm open to <b>Job</b> opportunities where I can contribute, learn and grow. If you have a good opportunity that matches my skills and experience then don't hesitate to <b>contact</b> me.
            </div> <br>
            <a href="#contact"> <button type="button" name="button">CONTACT</button></a>
          </div>
          <div class="col-xs-12 col-md-5 about-div1 " style="padding: 30px 0px 30px 30px;">
            <h3 class="mx-auto mb-3">My Skills</h3>
            <div class="skills-1">
              <div class="html">HTML</div>
              <div class="css">CSS</div>
              <div class="js">JavaScript</div>
              <div class="sass">SASS</div>
              <div class="php">PHP</div>
              <div class="jquery">JQUERY</div>
              <div class="sql">MySQL</div>
              <div class="java">JAVA</div>
              <div class="git">GIT</div>
            </div>
            <h4 class="mx-auto mb-4">Others</h4>
            <div class="skills-1">
              <div class="html">PHOTOSHOP</div>
              <div class="css">FIGMA</div>
              <div class="js">CANVA</div>
            </div>
          </div>
        </div>
      </div>

      <!-- PROJECTS -->
      <div id="project" class="Projects">
        <h1>PROJECTS</h1>
        <div class="line mx-auto mt-4 "></div>
        <p class="mb-5">Here are some of the personal and School projects that I have worked on, each with its own case study.</p>

        <div class=" container d-sm-flex justify-content-center">
          <div class="col-xs-12 col-md-5 " style="padding: 30px 20px 30px 30px;">
            <img class="project-1" src="Image/Pasig Vacccination and covid-19 Information Desk.png">
          </div>
          <!-- Project 1 -->
          <div class="col-xs-12 col-md-5 Project-list  " style="padding: 30px 0px 30px 50px;">
            <h3 class="my-4">Pasig Vacccination and <br> covid-19 Information Desk</h3>
            <div class=" mt-3">
              Pasig Vacccination and covid-19 Information Desk is Web Application that has a registration and covid information desk where people can have an appointment for their vaccine and there is a chat-bot where they can ask frequently-asked-questions.
            </div>
            <button class="description-button mt-4" type="button" name="button" onclick="document.location='case study.php'">CASE STUDY </button>
          </div>
        </div>
        <!-- Project 2 -->
        <div class=" container d-sm-flex justify-content-center">
          <div class="col-xs-12 col-md-5 " style="padding: 30px 20px 30px 30px;">
            <img class="project-1" src="Image/Pasig Vacccination and covid-19 Information Desk.png">
          </div>

          <div class="col-xs-12 col-md-5 Project-list " style="padding: 30px 0px 30px 30px;">
            <h3 class="my-4">Pasig Vacccination and <br> covid-19 Information Desk</h3>
            <div class=" mt-3">
              Pasig Vacccination and covid-19 Information Desk is Web Application that has a registration and covid information desk where people can have an appointment for their vaccine and there is a chat-bot where they can ask frequently-asked-questions.
            </div>
            <button class="description-button mt-4" type="button" name="button">CASE STUDY </button>
          </div>
        </div>
        <!-- Project 3 -->
        <div class=" container d-sm-flex justify-content-center">
          <div class="col-xs-12 col-md-5 " style="padding: 30px 20px 30px 30px;">
            <img class="project-1" src="Image/Pasig Vacccination and covid-19 Information Desk.png">
          </div>

          <div class="col-xs-12 col-md-5 Project-list " style="padding: 30px 0px 30px 30px;">
            <h3 class="my-4">Pasig Vacccination and <br> covid-19 Information Desk</h3>
            <div class=" mt-3">
              Pasig Vacccination and covid-19 Information Desk is Web Application that has a registration and covid information desk where people can have an appointment for their vaccine and there is a chat-bot where they can ask frequently-asked-questions.
            </div>
            <button class="description-button mt-4" type="button" name="button">CASE STUDY </button>
          </div>
        </div>
      </div>

      <!-- CONTACT -->
      <div id="contact" class="Contacts center-block">
        <h1>CONTACT</h1>
        <div class="line mx-auto mt-4 "></div>
        <p class="mb-5">Feel free to Contact me by submitting the form below and I will get back to you as soon as possible.</p>
        <!-- Form -->
        <div class="outer-container">
          <div class="bg-light col-xs-12 p-5" style="border-radius: 8px; box-shadow: 0px 3px 3px 3px rgba(125, 125, 125, 30%);">
            <form action="My Portfolio.php" method="post">
              <div class="fname">
                <input type="text" class="form-control" placeholder="First Name*" name="cust_fname" value="" required />
              </div>
              <div class="lname">
                <input type="text" class="form-control" placeholder="Last Name*" name="cust_lname" value="" required />
              </div>
              <div class="phone-number">
                <input type="text" class="form-control" placeholder="Phone*" name="cust_pnumber" value="" required />
              </div>
              <div class="email">
                <input type="email" class="form-control" placeholder="Email*" name="cust_email" value="" required />
              </div>
              <div class="message">
                <textarea class="form-control" rows="4" placeholder="Message*" name="cust_message"></textarea>
              </div><br>
              <div class="send-message">
                <input class="mx-auto" type="submit" name="submitMessage" value="SUBMIT">
              </div>
            </form>
          </div>

          <?php
          include('db.php');

          if (isset($_POST['submitMessage'])) {

            if (!empty($_POST['cust_fname']) && !empty($_POST['cust_lname']) && !empty($_POST['cust_pnumber']) && !empty($_POST['cust_email']) && !empty($_POST['cust_message'])) {
              $cName = $_POST['cust_fname'];
              $clName = $_POST['cust_lname'];
              $cpnumber = $_POST['cust_pnumber'];
              $cEmail = $_POST['cust_email'];
              $cMessage = $_POST['cust_message'];

              $sqlInsert = "INSERT INTO contact (cust_fname, cust_lname, cust_pnumber, cust_email, cust_message)
                  VALUES ('$cName', '$clName', '$cpnumber', '$cEmail', '$cMessage')";

              $resultInsert = $conn->query($sqlInsert);

              if ($resultInsert == TRUE) {
                echo ("Successfully Sent");
                echo '<script> swal("Success", "Successfully Sent", "success").then(function()
                      {
                        window.location = "My Portfolio.php";
                        });</script>';
              } else {
                $message = "Error: " . $sqlInsert . "<br>" . $conn->error;
              }
            } else {
              $required =  "<script>alert('All fields are required');</script>";
              echo $required;
            }
            $conn->close();
          }
          ?>
        </div>
      </div>

      <!-- Footer -->
      <div class="footer text-sm-start">
        <div class=" container d-sm-flex justify-content-center">
          <div class="col-xs-12 col-md-6 p-5 footer-div1" style="padding: 30px 20px 30px 30px;">
            <h6>RENIEL TIMOLA</h6>
            <p>A Junior Web Developer creates the frontend of websites and web applications, which contributes to the overall success of the product.</p>
          </div>
          <div class="col-xs-12 col-md-6 p-5 footer-div2 text-end" style="padding: 30px 0px 30px 30px;">
            <h6 class="social">SOCIAL</h6>
            <a href="https://www.facebook.com/timolareniel10"><img class="footer-fb" src="Image/facebook-footer.png"></a>
            <a href="https://www.instagram.com/itsmeniel10/"><img class="footer-insta" src="Image/instagram.svg"></a>
            <a href="https://github.com/Reniel-102921"> <img class="footer-github" src="Image/github-footer.png"></a>
          </div>
        </div>
        <div class="footer-line"> </div>
        <!-- <div class="col-md-2 Copyright" style="color: white;">
          © Copyright 2022. Made by <b>Reniel Timola</b>.
        </div> -->
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>