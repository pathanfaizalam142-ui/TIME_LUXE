<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | TIME LUXE</title>

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
            <li><a href="index.php">Home</a></li>
            <li><a href="collection.php">Collection</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="nav-icons">
            <i class="fa-regular fa-heart"></i>

            <a href="cart.php">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

            <i class="fa-solid fa-moon" id="themeToggle"></i>
        </div>

    </nav>
</header>

<section class="page-banner">
    <div class="banner-content">
        <h1>Shopping Cart</h1>
        <p>Your Selected Watches</p>
    </div>
</section>

<div class="cart-container">

    <div id="cartItems"></div>

    <h2 id="totalPrice">
        Total : ₹0
    </h2>

</div>

<script src="js/script.js"></script>

</body>
</html>