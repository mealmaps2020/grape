<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MealMap </title>
    <!--- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--- Scroll reveal CDN ---->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav">   
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="index.html" class="logo1"><img src="logo.png" alt=""> </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="browse.html" class="nav-link">Browse</a>
                    </li>
                    <li class="nav-item">
                        <a href="nearme.html" class="nav-link">Near Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="res.html" class="nav-link">My Reservations</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>







    <!---Header ends--->
    <section class="hero" id="hero">


      <div class="container">


<form action="/action_page.php">
  <div class="container7">

        <label for="email"><h1>Username</h1></label>
     <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>
   

    <label for="email"><h1>Email</h1></label>
      <i class="fa fa-envelope icon"></i>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><h1>Password</h1></label>
    <i class="fa fa-key icon"></i>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><h1>Repeat Password</h1></label>
     <i class="fa fa-key icon"></i>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

      </div>
  </section>








 

  <footer>
        <div class="container">
           <div class="back-to-top">
               <a href="#hero"><i class="fas fa-chevron-up"></i></a>
           </div>
           <div class="footer-content">
               <div class="footer-content-about animate-top">
                <h4>About MealMap</h4>
                   <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                   <p>  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
               </div>
               <div class="footer-content-divider animate-bottom">
                   <div class="social-media">
                       <h4>Follow Along</h4>
                          <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                             </li>
                          </ul>
                      </div>
                      <div class="newsletter-container">
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <input type="text" class="newsletter-input" placeholder="Your email address ...">

                            <button class="newsletter-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                      </form>
                  </div>
              </div>
          </div>
    </footer>
    <!---footer ends--->
 <script src="main.js"></script>
</body>
</html>


















	
