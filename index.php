<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tile Masters</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles/fontawesome.min.css">
  </head>
  <body>
    <div class="spinner-container">
      <div class="circles">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <div class="container">
      <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
        <span>Close</span>
      </div>
      <header class="header">
        <div class="img-wrapper">
          <img src="images/bg.jfif" />
        </div>
        <div class="banner">
          <h1>Tile Masters</h1>
          <p>Your last stop for your tiling needs</p>
          <a href="index.html#contact-us"><button>Request Estimate</button></a>
        </div>
      </header>

      <section class="sidebar">
        <ul class="menu">
          <li class="menu-item">
            <a href="index.php" class="menu-link" data-content="Home">Home</a>
          </li>
          <li class="menu-item">
            <a href="index.html#about-us" class="menu-link" data-content="About Us">About Us</a>
          </li>
          <li class="menu-item">
            <a href="index.html#services" class="menu-link" data-content="Team">Services</a>
          </li>
          <li class="menu-item">
            <a href="index.html#projects" class="menu-link" data-content="Pricing">Projects</a>
          </li>
          <li class="menu-item">
            <a href="index.html#contact-us" class="menu-link" data-content="Contact">Contact Us</a>
          </li>
        </ul>
        <div class="social-media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </section>

      <section class="about-us" id="about-us">
        <div class="section-header">
          <h1 class="section-heading">About Us</h1>
          <div class="underline"></div>
        </div>
        <!---services-->
        <div class="services" >
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pen-nib"></i>
              <h3>Interior</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-roller"></i>
              <h3>Exterior</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pencil-alt"></i>
              <h3>Design</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-brush"></i>
              <h3>Decoration</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-ruler-combined"></i>
              <h3>Servicing</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-building"></i>
              <h3>Estimates</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img src="images/house.png" />
          </div>
        </div>
        <!--services section-->
    


      </section>

      <section class="team" id="projects">
        <div class="section-header">
          <h1 class="section-heading">Projects</h1>
          <div class="underline"></div>
        </div>
        <div class="cards-wrapper">
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/i1.jpeg" alt="CEO" />
            </div>
            <div class="card-info">
              <h2>Kitchen</h2>
              <h3>Tiles</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>
              <button>Read More</button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/i2.jpeg" alt="Designer" />
            </div>
            <div class="card-info">
              <h2>Interior</h2>
              <h3>Tiles</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>
              <button>Read More</button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/i3.jpeg" alt="Architect" />
            </div>
            <div class="card-info">
              <h2>Bathroom</h2>
              <h3>Tiles</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>
              <button>Read More</button>
            </div>
          </div>
        </div>
      </section>

      <section class="team" id="projects">
        <div class="section-header">
          <h1 class="section-heading">Tile Samples</h1>
          <div class="underline"></div>
        </div>
        <div class="cards-wrapper">
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/WhatsApp Image 2021-08-10 at 10.37.56 AM (2).jpeg" alt="CEO" />
            </div>

          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/iii.jfif" alt="Designer" />
            </div>

          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/ii.jfif" alt="Architect" />
            </div>
            
          </div>
        </div>
      </section>

      <section class="contact" id="contact-us">
        <div class="contact-wrapper">
          <div class="contact-left"></div>
          <div class="contact-right">
            <h1 class="contact-heading">Request Free Estimate</h1>
            <form>
              <div class="input-group">
                <input type="text" class="field" />
                <label class="input-label">Full Name</label>
              </div>
              
              <div class="input-group">
                <input type="phone" class="field" />
                <label class="input-label">Number</label>
              </div>

              <div class="input-group">
                <input type="location" class="field" />
                <label class="input-label">Location</label>
              </div>

              <div class="input-group">
                <textarea class="field"></textarea>
                <label class="message">Message</label>
              </div>
              <input type="submit" class="submit-btn" value="Submit" />
            </form>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="footer-content">
          <p class="copyright">
            Copyright &copy; 2021, Newd Inc - All Rights Reserved
          </p>
          <p><i class="fas fa-location copyright">Koforidua</i></p>
          <p><i class="fas-fa-phone copyright">0594015209</i></p>
          <div class="social-list">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </footer>
      <a href="#" class="scroll-btn">
        <i class="fas fa-arrow-up"></i>
      </a>
    </div>

    <script src="script.js"></script>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/all.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="./js/fontawesome.min.js"></script>
    <script src="tilt.js"></script>
  </body>
</html>
