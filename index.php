<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suchana Mondal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 <link rel="stylesheet" href="new.css">
</head>

<body>
 


  <header class="bg-primary text-white position-relative overflow-hidden" style="background-image: url('background.gif'); background-size: cover; background-position: center; height: 500px;" id="home">
  <nav class="navbar navbar-expand-lg navbar-light " id="navbar" style="background-color: transparent; border-bottom: none;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: orangered; font-size:30px">SUCHANA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#home" style="color: black; font-size:20px"> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#about" style="color: black; font-size:20px">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#work" style="color: black; font-size:20px">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#academics" style="color: black; font-size:20px">Academics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#abilities" style="color: black; font-size:20px">Abilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience" style="color: black; font-size:20px">Experience
          </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Adjusted the height to 500px -->
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-md-8 text-center mx-0 mt-2">
          <div class="name">
            <h1> Hi!! There,<br>
              I am <span class="name"> Suchana <span style="color: orangered;">Mondal</span></span></h1>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container">
            <div class="card" id="card2" style="width: 290px; height: 290px; border: none; background: none;">
              <!-- Set card size to match image size and remove border -->
              <img src="me2.jpg" alt="Profile picture" style="width: 100%; height: 100%; object-fit: cover;"> <!-- Set image size to fill card and maintain aspect ratio -->
            </div>

          </div>

        </div>
      </div>
  </header>



  <main>
    <!-- ABOUT -->
    <div class="card py-4" style="border-color: white;" id="about">
      <div class="card px-4 my-3 text-center" style="border-color: white;">
        <div class="name display-5 title">About Me</div>
        <p class="lead" style="color: orangered;">I am a WEB DEVELOPER.</p>
        <div class="row px-4 py-4">
          <div class="col-md-8 px-4 py-3 text-center ">
            <div class="right">
              <p>Hello! My name is Suchana Mondal. I recently completed my BCA degree, and I'm excited to embark on my professional journey. During my studies, I had the opportunity to undertake an internship as a web developer, where I gained practical experience in PHP and worked on live projects. This internship not only provided me with hands-on experience but also helped me develop a deeper understanding of web development concepts. I'm now eager to utilize the skills I've acquired to contribute to an organization where I can both apply my knowledge and continue to learn and grow. I am enthusiastic about the prospect of working collaboratively with a team to achieve shared goals and make a positive impact.</p>
              <div class="arrow-container">
                <div class="arrow arrow-left"></div>
                <p class="para"><a href="resume.pdf" target="_blank" style="color: orangered; font-size: 25px; text-decoration: none;">My Resume</a></p>
                <!-- <div class="arrow arrow-right"></div> -->
              </div>

            </div>
          </div>
          <div class="col-md-4 px-4">
            <div class="left">
              <div class="left-img">
                <img src="me3.jpg" style="width: 80%; height: 50%; object-fit: cover;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Worked On -->
    <div class="work py-4" id="work">
      <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-12">
            <div class="title-heading">
              Worked On
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12  py-4">
            <div class="card2">
              <div class="card2-body">
                <h4 class="card2-title">Planet of Appetite</h4>

                <p class="card2-text px-4">It's a website of a restaurant(Planet of Appetite). In this website we can see many different dishes & about of this resturent which makes this resturent unique and reliable.Tech stack of this website : HTML,CSS,JAVASCRIPT.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12  py-4">
            <div class="card2">
              <div class="card2-body">
                <h4 class="card2-title">Digital Clock using Arduino</h4>

                <p class="card2-text px-4">Digital clocks are mostly used as they are compact in size, more accurate and less power consuming. To understand the working of the digital clock we have created a digital clock using Arduino Uno in Tinkercad</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12  py-4">
            <div class="card2">
              <div class="card2-body">
                <h4 class="card2-title">FoodChat App with Chatbot</h4>

                <p class="card2-text px-4">In this project, we merging tech and food seamlessly. Our stack includes HTML/CSS frontend, Python/FastAPI backend, and a Dialogflow chatbot for effortless ordering.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 py-4">
            <div class="card2">
              <div class="card2-body">
                <h4 class="card2-title">Garg foundation portal</h4>

                <p class="card2-text px-4">During my internship, I worked on this project using PHP CodeIgniter and connected the portal interface to the database through the model component. I gained proficiency in PHP CodeIgniter and through this project.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 py-4">
            <div class="card2">
              <div class="card2-body">
                <h4 class="card2-title">Infovue website</h4>

                <p class="card2-text px-4">During my internship, I created the UI development part for this project that utilized PHP CodeIgniter. I tried to ensure that the UI was responsive and highly interactive, thereby enhancing the overall user experience.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 py-4">
            <div class="card2">
              <div class="card2-body">
                <h4 class="card2-title">Microservices</h4>

                <p class="card2-text px-4">During my internship, I worked on this project using Laravel it was a license management system to securely store the license data like the license issued date expiration date validity checking. I created the APIs to check the software license data.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Academics -->
    <div class="container" style="margin-top:30px" id="academics">
      <div class="row">
        <div class="col-12">
          <div class="title-heading">
            Academics
          </div>
        </div>
      </div>
      <div class="row px-4 py-4">
        <div class="col-md-12 px-4 py-3 text-center ">
          <div class="right">
            <p>I am pleased to inform you that I have successfully completed my Class X from Christ Church Girls' High School in 2019, followed by Class XII from Motijheel Girls' High School in 2021. I then pursued a Bachelor of Computer Application (BCA) from the esteemed University of Engineering & Management Kolkata (UEMK), which I completed in 2024. My academic journey has been a profound one, and I have gained new experiences and knowledge every day. I am confident that my academic background and skills will enable me to make significant contributions to any project or task assigned to me.</p>

          </div>
        </div>
      </div>
    </div>
    <!-- skills -->
    <div class="container" id="abilities">

      <div class="row">
        <div class="col-12">
          <div class="title-heading">
            Technical Abilities
          </div>
        </div>
      </div>
      <div class="skills">
        <p class="skl sklLine">_________</p>
        <div class="htmlProg ProgWidth">
          <div class="p">
            <p>HTML</p>
            <p>89%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar htmlBar"></span>
            </div>
          </div>
        </div>
        <div class="cssProg ProgWidth">
          <div class="p">
            <p>Css</p>
            <p>70%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar cssBar"></span>
            </div>
          </div>
        </div>
        <div class="jsProg ProgWidth">
          <div class="p">
            <p>JavaScript</p>
            <p>65%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar jsBar"></span>
            </div>
          </div>
        </div>
        <div class="javaProg ProgWidth">
          <div class="p">
            <p>Java</p>
            <p>55%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar javaBar"></span>
            </div>
          </div>
        </div>
        <div class="cProg ProgWidth">
          <div class="p">
            <p>C</p>
            <p>70%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar ccpBar"></span>
            </div>
          </div>
        </div>
        <div class="phpProg ProgWidth">
          <div class="p">
            <p>PHP</p>
            <p>60%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar phpBar"></span>
            </div>
          </div>
        </div>
        <div class="ci ProgWidth">
          <div class="p">
            <p>CodeIgniter</p>
            <p>85%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar ciBar"></span>
            </div>
          </div>
        </div>
        <div class="sqlProg ProgWidth">
          <div class="p">
            <p>SQL</p>
            <p>65%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar sqlBar"></span>
            </div>
          </div>
        </div>
        <div class="laravel ProgWidth">
          <div class="p">
            <p>Laravel</p>
            <p>55%</p>
          </div>
          <div class="pp">
            <div class="skillDiv">
              <span class="skillBar laravelBar"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Industry Experience -->
    <div class="container" style="margin-top:30px" id="experience">
      <div class="row">
        <div class="col-12">
          <div class="title-heading">
            Industry Experience
          </div>
        </div>
      </div>
      <div class="row px-4 py-4">
        <div class="col-md-12 px-4 py-3 text-center ">
          <div class="right">
            <p>I did an offline internship at Infovue Solutions, I gained extensive experience as a PHP full-stack developer. I developed my PHP skills by working on real-life projects, and I became proficient in CodeIgniter, a popular PHP framework, by working on both the frontend of websites and the backend of a portal. I also learned Laravel, a powerful PHP framework, and successfully completed a microservices project, which involved developing a software license management system.

              In addition to technical skills, I developed my soft skills in communication, presentation, and teamwork. My experience at Infovue Solutions gave me a deep understanding of work culture and professionalism, which has helped me become more confident and productive in my role as a developer. Overall, the internship was an invaluable learning opportunity that equipped me with the skills and knowledge necessary to excel in the industry.</p>
            <p class="para"><a href="cert.jpeg" target="_blank" style="color: orangered; font-size: 25px; text-decoration: none;">Certificate of the Internship</a></p>
          </div>
        </div>
      </div>
    </div>

  </main>
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="footer-col">
          <h2 class="name" style="color: orangered;">SUCHANA</h2>
          <p>Hello there! I hope you're doing well today. My name is Suchana Mondal, and I'm a full-stack developer. If you have any questions or concerns, please feel free to reach out to me. I'd be happy to assist you in any way I can. </p>
        </div>

        <div class="footer-col">
          <h4>Contact Me</h4>
          <ul>
            <li>
              <h6>Mail -</h6><a href="mailto:suchanamondal305@gmail.com">suchanamondal305@gmail.com</a>
            </li>
            <li>
              <h6>Address -</h6>Tegharia, Kolkata, West Bengal, India
            </li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>Navigate</h4>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About myself</a></li>
            <li><a href="#work">Worked On</a></li>
            <li><a href="#academics">Academics</a></li>
            <li><a href="#abilities">My Abilities</a></li>
            <li><a href="#experience">Experience I gain</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Let's Connect</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/suchana.mondal.142"><i class="fab fa-facebook-f"></i></a>
            <a href="https://github.com/suchanamondal"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/suchana_mondal_?utm_source=qr&igsh=dmxseHQ0czB3YXpv"><i class="fab fa-instagram"></i></a>
            <a href="www.linkedin.com/in/suchana-mondal-072242225"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p class="text-center">&copy; <?php echo date("Y"); ?> SUCHANA MONDAL</p>
    </div>
  </footer>

  
      </body>

      </html>