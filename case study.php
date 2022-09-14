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
            <a class="nav-link" href="http://localhost/Portfolio/My%20Portfolio.php#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Portfolio/My%20Portfolio.php#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Portfolio/My%20Portfolio.php#project">PROJECTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Portfolio/My%20Portfolio.php#contact">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Showcase -->
  <div id="home" class="container-fluid g-0 ">
    <div class="row row-cols-md-1 row-cols-lg-1">
      <!-- Header -->
      <div class="header-casestudy">
        <h1 class="mx-auto name">Pasig Vacccination and covid-19 Information Desk</h1>
        <p class="mt-5 desc">Pasig Vacccination and covid-19 Information Desk is Web Application that has a registration and covid information desk where people can have an appointment for their vaccine and there is a chat-bot where they can ask frequently-asked-questions.</p>
        <a href="#project"> <button  class="mb-5" type="button" name="button">Test Live</button> </a> <br> <br> <br> <br> <br> <br>
      </div>

      <!-- Overview -->
      <div class="pb-5" style="background-color: #ededed;">
        <div class="overview col-xs-12 col-lg-8 p-5 mx-auto ">
            <img src="Image/Pasig Vacccination and covid-19 Information Desk.png" >
        </div>
        <div class="project-overview col-xs-12 col-lg-7 mx-auto ">
          <h3>Project Overview</h3> <br>
          <p >This case study is about the registration and covid information desk where people can have an appointment for their vaccine and
            there is a chat-bot where they can ask frequently-asked-questions. Some netizens are hesitating to register for the vaccine
            because they were confused on how vaccination works like; where they can have a dose, is there any fee, is it safe to have a
            vaccine, etc.</p>
          <p> For those people who’s knowledgeable on searching they can easily search for some information though it is still
            a hassle to browse different websites just to get an answer. To avoid misleading the people and providing convenience, this
            case study offers a chat-bot where they can ask questions related to vaccines and other related health protocols about the
            COVID. To limit the number of people on the vaccination site, the system will collect the information of the number of people
            who want to have a vaccine. After collecting the data, it will be easy for the admin to sort out all the data and make a
            schedule based on the category(priority) they belong to.</p>
          <p>Feel free to check out the Project by visiting the Live Link.</p> <br>

          <h3>Tool Used</h3>
          <div class="skills-1">
            <div class="html">HTML</div>
            <div class="css">CSS</div>
            <div class="js">JavaScript</div>
            <div class="php">PHP</div>
            <div class="jquery">JQUERY</div>
            <div class="sql">MySQL</div>
          </div> <br> <br>

          <h3>Test Live</h3> <br>
          <a href="#"> <button type="button" name="button">Test Live</button> </a>
          <button type="button" name="button" onclick="document.location='My Portfolio.php'">Go Back</button> </a>
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
              <a href="https://www.instagram.com/itsmeniel10/"><img class="footer-insta" src="Image/instagram.svg" ></a>
              <a href="https://github.com/Reniel-102921"> <img class="footer-github" src="Image/github-footer.png" ></a>
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
