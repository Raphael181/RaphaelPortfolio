
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <meta http-equiv="X-UA-Compatible" content = "IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--Font awesome css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!--Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--Fontstyle 1 -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Portfolio Website</title>
</head>
<body>
  <div class = "container-fluid">
    <header class="site-header pb-5">
        <nav class="navbar navbar-expand-md bg-dark navbar-light justify-content-center fixed-top">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggle">
              <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="#introduction">About</a>
                <a class="nav-item nav-link" href="#services">Services</a>
                <a class="nav-item nav-link" href="#languages">Languages I Speak</a>
                <a class="nav-item nav-link" href="#projects">Portfolio</a>
                <a class="nav-item nav-link" href="#contact-id">Contact</a>
              </div>
              <!-- Navbar Right Side -->
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="#"><span class = "fa fa-facebook-f"></span></a>
                 
              </div>

             
            </div>
          </nav>

      </header>

      <section id = "introduction" class = "p-5">
        <div class = "row">
          <div class = "col-sm-6">
            <div class = "fade-in">
              <h2>Hey There!</h2>
              <h2>I am <span class = "different"> Raphael Madu </span></h2>
              <h3 class = "">Front-End Designer and Python Developer</h3>
              <p class = "cv-btn"><a href="#">Check out my LinkedIn Profile</a></p>
            </div>
          </div>
        </div>
      </section>

      <section id = "about-me" class = "p-5">
        <div class = "row">
          <div class = "col-md-6">
            <h1 class = "different text-center"> About Me </h1>
            <h2>Freelancing Front-End Designer and Django App Developer</h2>
            <p>Hey there! I am Raphael Madu. I am a beginner Bootstrap Front-End Designer and Django App Developer. I am currently looking for new opportunities where I can further develop my skillset as well as aid in the growth of the company/ business.</p>
          </div>

          <div class = "col-md-6 mypic">
            <img class = "ml-5 img-fluid" src="images/mypic.jpg">
          </div>

        </div>
      </section>

      <section id = "services" class = "pb-3">
        <div class = "text-center">
          <h2 class = "different">Services</h2>
            <p class = "pb-2">Services I Provide</p>
        </div>
          <div class = "row">

            <!--Card 1 -->
            <div class = "col-md-4">
              <div class = "p-4">
                <div class = "card" >
                  <div class = "s-b-img">
                    <img class="card-img-top pt-2"  src="images/front-end.jpg" alt="Card image">
                  </div>
                      <div class="card-body">
                        <div class = "text-center">
                          <h2>Front-End Design</h2>
                          <p class="card-text">With the help of Web Frameworks and my extensive Knowledge in Html, CSS and Javascript, I have been able to create and design functional websites and web applications</p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

            <!--Card 2 -->
            <div class = "col-md-4">
              <div class = "p-4">
                <div class = "card" >
                    <img class="card-img-top mx-auto d-block pt-2"  src="images/python.png" alt="Card image">
                      <div class="card-body">
                        <div class = "text-center">
                          <h2>Python Web Developer</h2>
                          <p class="card-text">With the help of bootstrap and other front end languages and the django web framework, i have been able to build, design and deploy a django web application.</p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

            <!--Card 3 -->
            <div class = "col-md-4">
              <div class = "p-4">
                <div class = "card" >
                    <img class="card-img-top mx-auto d-block pt-2"  src="images/bootstrap.png" alt="Card image">
                      <div class="card-body no-design">
                        <div class = "text-center">
                          <h2>Bootstrap Web Designer</h2>
                          <p class="card-text">I have been able to create responsive Websites and designs.</p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

          </div>
      </section>


      <section id = "languages" class = "pt-3">
        <h1 class = "p-2 text-center different">Languages I speak</h1>

          <div class = "row">

            <div class="col-sm-4">
              <div class = "text-center">
                <h3 class="">Front-End Languages</h3>
                <ul class="p-2">
                  <li class="mb-1">Javascript</li>
                  <li class="mb-1">Vanilla CSS</li>
                  <li class="mb-1">Html</li>
                </ul>
              </div>
            </div>

            <div class="col-sm-4">
              <div class = "text-center">
                <h3 class = "">Back-End Languages</h3>
                <ul class="p-2">
                  <li class="mb-1">PHP</li>
                  <li class = "mb-1">MYSQL</li>
                  <li class = "mb-1">Python</li>
                  <li class="mb-1">Ruby on rails</li>
                </ul>
              </div>
            </div>

            <div class="col-sm-4">
              <div class = "text-center">
                <h3 class="">Web Frame Works</h3>
                <ul class = "p-2">
                  <li class="mb-1">Bootstrap 4</li>
                  <li class = "mb-1">Django Web Framework</li>
                  <li class="mb-1">Flask</li>
                </ul>
              </div>
            </div>

          </div>
      </section>

      <section id = "projects" class = "p-5">
        <div class = "text-center">
          <h2 class="different">Projects</h2>
        </div>

        <div class = "row">

          <div class = "col-lg-6">
              <div class = "p-4">
                <div class = "card">
                    <img class="card-img-top mx-auto d-block pt-2"  src="images/blog.png" alt="Card image">
                      <div class="card-body">
                        <div class = "text-center">
                          <p class="card-text"><a href="#">Django blogsite</a></p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class = "col-sm-6">
              <div class = "p-4">
                <div class = "card" >
                    <img class="card-img-top mx-auto d-block pt-2"  src="images/quotegenerator.png" alt="Card image">
                      <div class="card-body">
                        <div class = "text-center">
                          <p class="card-text"><a href = "https://aqueous-crag-20948.herokuapp.com/">Splurty App: Quote Generator</a></p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class = "col-sm-6">
              <div class = "p-4">
                <div class = "card" >
                    <img class="card-img-top mx-auto d-block pt-2"  src="images/restaurant.png" alt="Card image">
                      <div class="card-body">
                        <div class = "text-center">
                          <p class="card-text"><a href = "#">Restaurant Landing Page</a></p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

        </div>

      </section>

      <section id = "contact-id" class = "p-5">
        <div class = "text-center">
          <h2 class="different">Contact Me</h2>
        </div>
        <div class = "row">

          <div class = "col-md-6">
            <form action="action.php" method="post">
              <div class="form-group">
                <label for = "email">Email:</label>
                <input type = "text" class = "form-control mb-3" id = "email" placeholder="Enter your email here">

                <label for = "name">Name:</label>
                <input type = "text" class = "form-control mb-3" id = "name" placeholder="Enter your name here">

                <label for = "subject">Subject:</label>
                <input type = "text" class = "form-control mb-3" id = "subject">

                <label for = "comment">Message</label>
                <textarea class = "form-control" rows = "5" id = "comment" placeholder="Leave a message"></textarea>

              </div>

              <button type = "submit" class = "btn btn-primary mb-2">Submit</button>
            </form>
          </div>

          <div class = "col-lg-6">
            <div class="text-center p-2">
              <h2>This website was made using:</h2>
              <div class = "small">
                <img src="images/bootstrap.png" class = "img-fluid">
                <img src="images/css.jpg" class = "img-fluid">
                <img src="images/html.png" class = "img-fluid">
                <img src="images/php.png" class = "img-fluid">
              </div>
            </div>
          </div>

      </div>
      </section>



  <!--Bootstrap javascript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</div>
</body>
</html>
