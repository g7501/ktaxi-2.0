<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book for a taxi now, no book fee needed!">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../favicon/favicon.ico">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="../styles.css">
    <title>St Andrews taxi booking</title>
  </head>
  <body>
    <header class="header" id="home">
      <nav>
        <div class="nav__bar">
          <div class="logo nav__logo">
            <button aria-label="K Taxi logo" class="btn none">K taxi</button>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-3-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="../index.html">HOME</a></li>
          <li><a href="#location">Location</a></li>
          <li><a href="#reviews">Reviews</a></li>
          <li><a href="#booking">Booking</a></li>
          <li><button aria-label="07537985977" onclick="window.location.href='tel:+447537985977'" class="btn">📞07537985977</button></li>
        </ul>
      </nav>
      <div class="section__container header__container">
        <div class="header__content">
          <h1 class="chocolate">We Are Qualified & Professional</h1>
        </div>
      </div>
    </header>

    

    <section class="section__container experience__container" id="location">
      <div class="experience__content">

        <p class="section__subheader" id="booking">Booking</p>
        <h2 class="section__header">
          Online Taxi service
        </h2>
        <p class="section__description">
            You are not required to make a payment for your booking.
        </p>

        <div class="section__booking card">
            <form method="post" action="">
                    <label class="required" for="text">Name</label>
                    <input required type="text" id="name" name="name" placeholder="Your name">
                    <label class="required" for="text">Phone number</label>
                    <input required type="text" id="phoneNumber" name="phoneNumber"  placeholder="Phone number">
                    <!-- <label class="required" for="text">Numper of guests</label>
                    <input type="number" placeholder="Pick up address"> -->
                    <!-- <label class="required" for="text">Pick up address</label>
                    <input type="text" placeholder="Pick up address"> -->
                    <!-- <label class="required" for="text">Destination</label>
                    <input type="text" placeholder="Pick up address">
                    <label class="required" for="text">Destination</label>
                    <input type="text" placeholder="Pick up address"> -->
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <input class="" type="submit" value="Book now">
                </div>

            </form>
          </div>

    

        <!-- <button class="btn">Read More</button> -->
      </div>
    </section>


    <footer class="footer">
        <div class="footer__container custom__container">
        <div class="footer__custom">
          <h3>Contact Info</h3>
          <ul class="footer__links">
            <li>
              <p>
                Taxi service available 24/7 call us anytime in St Andrews.
              </p>
            </li>
            <li>
              <div class="oneRow">
                <p>Phone: <span><a href="tel:+447537985977" id="phoneNumber" value="+447537985977">+44 7537985977</a></span></p>              </div>
            </li>
            <li>
              <div class="oneRow">
                <p>Email: <span><a href="mailto:khaldoon.taxi@gmail.com" id="email">khaldoon.taxi@gmail.com</a></span></p>              </div>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $phoneNumber = $_POST["phoneNumber"];
        $message = $_POST["message"];

        $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
        $to = "khaldoon.taxi@gmail.com";
        $subject = "New contact form submission from $name";
        $headers = "From: My website ";
    
        if (mail($to, $subject, $txt, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Message sending failed.";
        }
      }
  ?>


    <div class="footer__bar">
      Copyright © 2023 K-Taxi. All rights reserved.
    </div>
    <script src="main.js" defer></script>
  </body>
</html>
