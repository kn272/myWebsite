<!DOCTYPE html>
<html lang="en">

<head>
  <title>My webpage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body 
    {
      position: relative;
    }
    ul.nav-pills
    {
      width: 300px;
      height: 100%;
      font-size: 14px;
    }

    div.col-lg-9 div
    {
      height: 600px;
      font-size: 14px;
      margin-left: 10px;
    }
    div.fixed
    {
      position: fixed;
    }
    img
    {
      padding-top: 20px;
      padding-bottom: 20px;
    }
    h2
    {
      padding-top: 10px;
      text-align: center;
      text-decoration: underline;
    }
    h3
    {
      margin-top: 30px;
      margin-left: 30px;
    }
    p
    {
      margin-top: 30px;
      margin-left: 30px;
      font-size: 20px;
    }
    #ul1, #ul2
    {
      margin-top: 30px;
      margin-left: 30px;
      font-size: 20px;    
    }
    my
    {
      margin-top: 30px;
      margin-left: 30px;
      font-size: 20px;    
    }
    #aboutme {color: #000; background-color: #ffe0cc;}
    #academic {color: #000; background-color: #f2f2f2;}
    #keycourses {color: #000; background-color: #ffe0cc;}
    #techskills {color: #000; background-color: #f2f2f2;}
    #acadprojects {color: #000; background-color: #ffe0cc;}
    #internexp {color: #000; background-color: #f2f2f2;}
    #workshops {color: #000; background-color: #ffe0cc;}
    #publications {color: #000; background-color: #f2f2f2;}
    
    @media screen and (max-width: 810px) 
    {
      #aboutme, #academic, #keycourses, #techskills, #acadprojects, #internexp, #workshops, #publications
      {
        margin-left:10px;
      }
      ul.nav-pills
      {
        visibility: hidden;
      }
      div.col-lg-3 div
      {
        visibility: hidden;
      }
    }
  </style>
</head>
<body data-spy="scroll" data-target="#scrollSpy" data-offset="20">
<div class="container">
  <div class="row">   
    <div class="col-lg-3" style="background-color: #333333">
    <div class="fixed">
    <nav id="scrollSpy" style="background-color: #000000">
    <ul class="nav nav-pills nav-stacked" style="background-color: #333333">
      <li><center><img src="resources/images/profile_pic.jpg" class="img-rounded" alt="profile pic"></center></li>
      <li class="active"><a href="#aboutme">About me</a></li>
      <li><a href="#academic">Academic qualifications</a></li>
      <li><a href="#keycourses">Key courses</a></li>
      <li><a href="#techskills">Technical skills</a></li>
      <li><a href="#acadprojects">Academic projects</a></li>
      <li><a href="#internexp">Internship experience</a></li>
      <li><a href="#workshops">Workshops</a></li>
      <li><a href="#publications">Publications</a></li>
    </ul>
    </nav>
    </div>
    </div>
    <div class="col-lg-9" style="background-color: #333333">
      <div id="aboutme">
        <h2>About me</h2>
        <h3>Kishore Gajendran</h3>
        <p>Research Assistant, NJIT<br>
        I am an aspiring full-stack software developer and My goal is to involve myself with organisations which strive to implement bleeding-edge technologies thereby pioneering the digital front for the years to come</p>
        
      </div>
      <div id="academic">
        <h2>Academic qualifications</h2>
        <p>
          New Jersey Institute of Technology (NJIT), Newark, NJ <br> M.S., Information Systems<br>Expected Graduation: May 2019<br>GPA: 4.00
          <br><br>
          Anna University, Chennai, India<br> B.Tech., Information Technology, June 2017<br>GPA: 3.53        
        </p> 
      </div>
      <div id="keycourses">
        <h2>Key courses</h2>
        <p>
          <ul id="ul1">
            <li>Information System Principles</li>
            <li>Web Systems Development</li>
            <li>System Analysis and Design</li>
            <li> User Experience Design</li> 
            <li>Enterprise Database Management</li> 
            <li>Data Analytics for Information Systems</li> 
          </ul>  
        </p> 
      </div>
      <div id="techskills">
        <h2>Technical skills</h2>
        <p>
          <ul id="ul2">
          <li><u>Languages:</u> C#, Java, PHP, JavaScript, HTML, CSS. </li> 
          <li><u>Platforms:</u> Windows, Linux, Android and iOS.</li>
          <li><u>Analytic tools:</u> Tableau, RapidMiner, Weka, Python</li> 
          <li><u>Technologies:</u> Bootstrapping, AWS, Virtual Box, Axure, Rational Rose, AFS. </li>
          <li><u>Database:</u> MySQL, SQLite, Oracle DB. </li>
          <li><u>Concepts:</u> SOLID, LAMP, ACID, MVC and All Basic Computer Algorithms.</li> 
          </ul>     
        </p> 
      </div>
      <div id="acadprojects">
        <h2>Academic projects</h2>
        <p>
          <h3>Todo Task Manager:</h3> 
          Created and programmed a web application to manage day to day tasks developed with PHP, MySQL, and Bootstrapping. <br>
          Link: https://web.njit.edu/~kn272/finalProject/mvc/ <br>
          GitHub: https://github.com/kn272/finalProject <br>

          <h3>Centralized Travel Management System(CTMS):</h3> 
          Designed UI for a system that helps travel companies with their online business.<br>

          <h3>Reputation System:</h3> 
          Developed and coded a mobile application that enables students to rate and review professors and their peers.<br>

          <h3>Data Visualization:</h3> 
          Using a wide range of datasets, mined interesting association rules using tools like Tableau, RapidMiner and Python.<br>       
        </p> 
      </div>
      <div id="internexp">
        <h2>Internship experience</h2>
        <p>
        <h3>Support Business Analyst Intern:</h3>
        <my>RRT Electro Powwer, India | Aug - Oct 2016<br>
        Influenced the management wing of the firm with the help of tools like MS Visio, Rational Rose, Tableau and MS Office. <br></my>
        <h3>Social Media Marketing Intern - CRM:</h3>
        Olympia Infratech, India | Jan - Feb 2016<br> 
        Trained in product advertising using social media platform and involved in tracking and reporting website statistics using tools like Google Analytics, Tableau and MySQL.<br> 

        <h3>Assistant Infrastructure Coordinator Intern:</h3>
        AIESEC, India | June - Aug 2015 <br>
        Modernized their system's network, hardware, and software.<br> 
        Involved in technical support and troubleshooting along with database management using tools like SSMS and Oracle.<br>
 
        <h3>Android Application Developer Intern:</h3>
        Uniq Technologies, India | May - June 2015<br> 
        Studied about SCRUM methodology for developing applications using Eclipse IDE. <br>        
        </p> 
      </div>
      <div id="workshops">
        <h2>Workshops</h2>
        <p>
1.Attended technical workshops in Parallel Programming, .Net, Python and Ethical Hacking.<br>
2.Attended workshops in Entrepreneurship Development, Development of Agricultural Systems and Role of ICT for Agriculture and Rural Development. <br>       
        </p> 
      </div>
      <div id="publications">
        <h2>Publications</h2>
        <p>
1.Rain Inspired Sprinkler Irrigation System Using Sensors, Presented in IEEE TIAR 2015<br> 
2.Estimation of durability of rice grains using sensors and mobile technology, Published in IEEE TIAR 2016<br>
3.Interactive clothes based on IOT using NFC and Mobile Application (USA), Published in IEEE CCWC 2017<br>
4.Ensuring fishermen safety through a range-based system by trizonal localization using low power RSSI, Published in IEEE ICSCN 2017<br>  
        </p> 
      </div>
  </div>
</div>

</body>

</html>
