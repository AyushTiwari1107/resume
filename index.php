<?php

include("config.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $project_details = $_POST['project_details'];
    

    $sql = "INSERT INTO `user`( `name`, `email`, `subject`,`project_details`) VALUES ('$name','$email','$subject','$project_details')";

    $query = mysqli_query($con, $sql);


    if ($query) {

        header("location:index.php");
    }
}

?>






<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>AYUSH TIWARI</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <!-- Move to up button -->
    <div class="scroll-button">
      <a href="#home"><i class="fas fa-arrow-up"></i></a>
    </div>
    <!-- navgaition menu -->
    <nav>
      <div class="navbar">
        <div class="logo"><a href="#">Portfolio.</a></div>
        <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
        </ul>
        <div class="media-icons">
          <a href="https://www.linkedin.com/in/ayushrtiwari11/"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </nav>

    <!-- Home Section Start -->
    <section class="home" id="home">
      <div class="home-content">
        <div class="text">
          <div class="text-one">Hello,</div>
          <div class="text-two">I'm AYUSH TIWARI</div>
          <div class="text-three">Software Developer</div>
        </div>
       
      </div>
    </section>

    <!-- About Section Start -->
    <section class="about" id="about">
      <div class="content">
        <div class="title"><span>About Me</span></div>
        <div class="about-details">
          <div class="left">
            <img src="images/about.gif" alt="" />
          </div>
          <div class="right">
            <div class="topic">Developing is my Passion</div>
            <p>
                My journey in the tech world has been a dynamic one, with a background in technical end-user support and a diverse project portfolio that spans various domains. I've cultivated a deep passion for technology and an enthusiasm for the DevOps approach, which I've put into practice in various projects.
</p><br><p>
                What sets me apart is my ability to collaborate effectively with people from all walks of life. I'm known for being adaptable, a fast learner, and someone who thrives in different environments. While I may be considered a fresher in terms of formal experience, my dedication to continuous learning and improvement drives me to excel.
                
            
            </p>
            <div class="button">
  <a href="https://chocolate-trudi-2.tiiny.site/">
    <button>RESUME</button>
  </a>
</div>

          </div>
        </div>
      </div>
    </section>

    <!-- My Skill Section Start -->
    <!-- Section Tag and Other Div will same where we need to put same CSS -->
    <section class="skills" id="skills">
      <div class="content">
        <div class="title"><span>My Skills</span></div>
        <div class="skills-details">
          <div class="text">
            <div class="topic">Skills Reflects Our Knowledge</div>
            <div class="aboutline">
           Languages: Java, Python, C, Javascript, PHP, HTML, CSS <br>
            Cloud Computing : Azure & AWS <br>
               Database : MySQL <br>
                   Devops tools : Selenium, Jenkins, Ansible ,Docker ,Jira <br>
                       Others: Mobile Development, Backend Development, Web Frontend, UI Design <br>
                    </div>
          </div>
          <div class="boxes">
            <div class="box">
              <div class="topic">JAVA</div>
              <div class="per">90%</div>
            </div>
            <div class="box">
              <div class="topic">DEVOPS</div>
              <div class="per">80%</div>
            </div>
            <div class="box">
              <div class="topic">JavaScript</div>
              <div class="per">70%</div>
            </div>
            <div class="box">
              <div class="topic">SQL</div>
              <div class="per">60%</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- My Services Section Start -->
    <section class="services" id="services">
      <div class="content">
        <div class="title"><span>My Projects</span></div>
        <div class="boxes">
          <div class="box">
            <div class="icon">
              <i class="fas fa-desktop"></i>
            </div>
            <div class="topic">Virtual Debate System</div>
            <p>Developed an online platform enabling users to schedule, participate-in, and watch real time debates.</p>
        
            <p>Designed and developed a User Dashboard for personalized user experiences.</p>
            <p>Implemented Virtual Debate Scheduling with Agaro.io for efficient management.</p>
            <p>Enabled Real-time Video Streaming through WebRTC technology.</p>
          
          </div>
          <div class="box">
            <div class="icon">
                <i class="fas fa-comment"></i>

            </div>
            <div class="topic">Chatting Application</div>
            <p>Designed and implemented user-friendly interfaces, integrated multimedia sharing, and ensured data
                encryption for security.</p>
            <p>Demonstrated strong problem-solving, teamwork, and software development skills in delivering a user-centric
                communication tool.</p>
          </div>
          <div class="box">
            <div class="icon">
                <i class="fas fa-university"></i>
            </div>
            <div class="topic">Bank Management System</div>
            <p>Online Platform to run and manage all the bank functionalities.</p>
            <p> Designed and deployed user-friendly interfaces for account management, transaction processing, and
                customer interactions.
            </p><p> Showcased proficiency in software development, significantly enhancing the bank's operational efficiency and
                customer service quality.</p>
          </div>
          <div class="box">
            <div class="icon">
                <i class="fas fa-train"></i>

            </div>
            <div class="topic">Railway Ticket Booking System</div>
            <p>Designed and implemented user-friendly interfaces for ticket reservations, cancellations, and inquiries.</p>
        <p> Integrated payment gateways for seamless transactions. </p> 
        <p>Developed a secure authentication system for user accounts and profiles.</p>
    <p> Engineered a real-time ticket availability checker using database technologies (e.g. SQL)</p>
          </div>
          <div class="box">
            <div class="icon">
                <i class="fas fa-heart"></i>

            </div>
            <div class="topic">Health and Fitness Application</div>
            <p>Empowers users to track their physical activities, monitor nutrition, and set personalized health goals. </p> <p>It provides a comprehensive platform for improving overall well-being through workout plans, nutrition tracking, and community support, all easily accessible on mobile devices.</p>
          </div>
          <div class="box">
            <div class="icon">
                <i class="fas fa-music"></i>
            </div>
            <div class="topic">Music Player GUI</div>
            <p>Provides users an intuitive interface for users to play, organize, and control their music library. </p> <p> It typically features playback controls, a playlist view, and options for searching and categorizing songs, enhancing the user's music listening experience.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Me section Start -->
    <section class="contact" id="contact">
      <div class="content">
        <div class="title"><span>Contact Me</span></div>
       
         
           
        <div class="row mt-4">
           

            <div class="col-lg-6">
             
            <form action="#" method="post">
                    <input type="text" name="name" class="form-control mt-3" placeholder="Name">
                    <input type="email" name="email" class="form-control mt-3" placeholder="Email">
                    <input type="text" name="subject" class="form-control mt-3" placeholder="Subject">
                    <div class="mb-3 mt-3">
                        <textarea class="form-control" rows="5" id="comment" name="project_details" placeholder="Project Details"></textarea>
                    </div>
                
                <button name="submit" type="submit" class="btn btn-success mt-3">Contact Me</button>
                </form>
                
            </div>

        </div>

        </div>
      </div>
    </section>

    <!-- Footer Section Start -->
    <footer>
      <div class="text">
        <span>Created By AYUSH TIWARI</a> | &#169; 2023 All Rights Reserved</span>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
