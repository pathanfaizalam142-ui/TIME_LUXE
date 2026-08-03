<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contacts (name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Message Sent Successfully!');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact| TIME LUXE</title>
    <meta name="description" content="Explore our premium Luxury watch Collection.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">
                <i class="fa-solid fa-clock"></i>
                <h2>TIME LUXE</h2>
            </div>

            <ul class="nav-links">
                <li>
                    <a href="index.php">Home</a>
                </li>
                 <li>
                    <a href="collection.php">Collection</a>
                </li>
                 <li>
                    <a href="about.php">About</a>
                </li>
                 <li>
                    <a class="active" href="contect.php">Contact</a>
                </li>
            </ul>

            <div class="nav-icons">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-regular fa-heart"></i>
                <a href="card.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <i class="fa-solid fa-moon" id="themeToggle"></i>
            </div>

        </nav>
    </header>
   <section class="page-banner">
    <div class="banner-contect">
        <h1>
            Contact TIME LUXE
        </h1>
        <P>
            We'd love to hear from you.
        </P>
    </div>
   </section>
   
   <section class="contact-section">
    <div class="Contact-form">
        <h2>Send Us A Message</h2>
        <form id="contactForm" method="POST" action="">
            <input type="text" id="name" name="name" placeholder="Your Name" required><br>
            <input type="email" id="email"name="email" placeholder="Your Email" required><br>
            <input type="text" id="subject" name="subject" placeholder="subject" required><br>
            <input type="text" id="phone" name="phone" placeholder="Your Phone Number" required><br>
            <textarea id="message" rows="6"name="message" placeholder="Write Your Message..."></textarea><br>
            <button type="submit" name="submit">Send Message</button><br>
        </form>
    </div>
    <div class="contact-info">
    <h2>Contact Information</h2>
        <p><i class="fa-solid fa-phone"></i>
            +91 9106770230
            </p>
            <P>
                <i class="fa-solid fa-envelope"></i>
                info@timeluxe.com
            </P>
            <P>
                <i class="fa-solid fa-location-dot"></i>
                Ahmedabad, Gujarat, India
            </P>
            <P>
                <i class="fa-solid fa-clock"></i>
                Monday - Saturday
                <br>
                10:00 AM -8:00 PM
            </P>
    </div>
    <div class="contact-buttons">
        <a href="tel:+9106770230" class="call-btn"><i class="fa-solid fa-phone"></i> Call Now</a>
        <a href="https://wa.me/919106770230" target="_blank" class="whatsapp-btn"><i class="fa-brands fa-whatsapp"></i> Message Now</a>

    </div>
   </section>

   <section class="map-section">
    <h2>Visit Our Store</h2>
    <div class="map-container">
        <iframe src="https://www.google.com/maps?q=Ahmedabad,Gujarat&output=embed"
         width="100%"
         height="450"
         style="border: 0;"
         loading="lazy"
         referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
   </section>

   <section class="social-section">
    <h2>Follow Us</h2>
    <P>Stay connected with TIME LUXE on social media.</P>
      <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/faizkp00/" target="_blank" <i class="fa-brands fa-instagram"></i>
                </a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
   </section>
    <section class="newsletter">
        <h2>Stay Updated</h2>
        <P>Subscribe to receive exclusive offers , new arrivals and luxury watch collection</P>

         <form id="newsletterForm" method="POST" action="newsletter.php">
        <input
        type="email"
        name="email"
        id="newsletterEmail"
        placeholder="Enter your Email" required>
        <button type="submit" name="subscribe">Subscribe</button>
    </form>

    </section>

<footer class="footer">

    <div class="footer-content">

        <div class="footer-box">
            <h3>TIME LUXE</h3>
            <p>Luxury Watch Store</p>
            <p>Premium watches from the world's most trusted brands.</p>
        </div>

        <div class="footer-box">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="collection.php">Collection</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contect.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer-box">
            <h3>Contact</h3>
            <p><i class="fa-solid fa-phone"></i> +91 9106770230</p>
            <p><i class="fa-solid fa-envelope"></i> info@timeluxe.com</p>
            <p><i class="fa-solid fa-location-dot"></i> Ahmedabad, Gujarat</p>
        </div>

        <div class="footer-box">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/faizkp00/" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                </a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

    </div>

    <p class="copyright">
        © 2026 TIME LUXE. All Rights Reserved.
    </p>

</footer>
<a href="#" class="back-top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
<script src="js/script.js"></script>
    </body>
    </html>