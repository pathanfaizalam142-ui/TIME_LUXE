<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection | TIME LUXE</title>
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
                    <a class="active" href="collection.php">Collection</a>
                </li>
                 <li>
                    <a href="about.php">About</a>
                </li>
                 <li>
                    <a href="contect.php">Contact</a>
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
            <h1>Luxury watch Store</h1>
            <P>Discover timeless elegance from the world's finest luxury watch brands</P>
        </div>
    </section>

    <section class="collection-controls">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Search Luxury Watch..">
            <button>
             <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <div class="filter-box">
            <select id="brandFilter">
                <option value="all">All</option>
                <option value="Rolex">Rolex</option>
                <option value="Omega">Omega</option>
                <option value="TAG Heuer">TAG Heuer</option>
                <option value="Tissot">Tissot</option>
                <option value="Seiko">Seiko</option>
                <option value="Citizen">Citizen</option>
                <option value="Casio Edifice">Casio Edifice</option>
                <option value="Titan Neo">Titan Neo</option>
                <option value="Timex Expedition">Timex Expedition</option>
                <option value="Fastrack Stunners">Fastrack Stunners</option>
                <option value="Sonta Poze">Sonta Poze</option>
                <option value="Maxima Attivo">Maxima Attivo</option>
                <option value="Casio Kids Digital">Casio Kids Digital</option>
                <option value="Timex Kids Fun">Timex Kids Fun</option>
                <option value="Sonata Kids Sports">Sonata Kids Sports</option>
                <option value="Fastrack Kids">Fastrack Kids</option>
                <option value="Zoop by Titan">Zoop by Titan</option>
                <option value="Disney Kids Watch">Disney Kids Watch</option>
            </select>
        </div>
    </section>

    <section class="watch-gallery">
        <div class="gallery-container">
            
            <div class="watch-card">
                <div class="watch-images">
                    <img src="images/rolex.jpg" alt="Rolex submariner">
                    <span class="badge">Best Seller</span>
                </div>
                <div class="watch-info">
                    <h3>Rolex submariner</h3>
                     <P class="price">&#8377;9,99,999</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>5.0</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>

                    <P><i class="fa-solid fa-shield-halved"></i>2 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                        <button
                         class="addToCart"
                         data-id="1"
                         data-name="Rolex Submariner"
                         data-price="999999"
                         data-image="images/rolex.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Rolex+Submariner" target="_blank" class="buy-btn">Buy Now</a>

                    </div>
                </div>
            </div>
            
                 <div class="watch-card">
                <div class="watch-images">
                    <img src="images/omega.jpg" alt="Omega Seamaster">
                    <span class="badge">Luxury</span>
                </div>
                <div class="watch-info">
                    <h3>Omega Seamaster</h3>
                     <P class="price">&#8377; 5,49,999</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.9</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>2 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="2"
                         data-name="omega Seamaster"
                         data-price="549999"
                         data-image="images/omega.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Omega+Seamaster" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/tagheuer.jpg" alt="TAG Heuer Carrera">
                    <span class="badge">Premium</span>
                </div>
                <div class="watch-info">
                    <h3>TAG Heuer Carrera</h3>
                     <P class="price">&#8377; 3,89,000</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.8</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>2 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="3"
                         data-name="TAG Heuer Carrera"
                         data-price="389000"
                         data-image="images/tagheuer.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=TAG+Heuer+Carrera" target="_blank" class="buy-btn">Buy Now</a>
                     
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/tissot.jpg" alt="Tissot PRX">
                    <span class="badge">Premium</span>
                </div>
                <div class="watch-info">
                    <h3>Tissot PRX</h3>
                     <P class="price">&#8377; 74,999</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.8</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>2 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="4"
                         data-name="Tissot PRX"
                         data-price="74999"
                         data-image="images/tissot.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Tissot+PRX" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/seiko.jpg" alt="seiko presage">
                    <span class="badge">import</span>
                </div>
                <div class="watch-info">
                    <h3>Seiko Presage</h3>
                     <P class="price">&#8377; 54,999</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.8</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>2 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="5"
                         data-name="sekio presage"
                         data-price="54999"
                         data-image="images/sekio.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Seiko+Presage" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/citizen.jpg" alt="Citizen Eco Drive">
                    <span class="badge">New</span>
                </div>
                <div class="watch-info">
                    <h3>Citizen Eco Drive</h3>
                     <P class="price">&#8377; 42,999</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.8</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>2 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="6"
                         data-name="Citizen Eco Drive"
                         data-price="42999"
                         data-image="images/citizen.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Citizen+Eco+Drive" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div><br>
        <div class="section-title">
            <h2>Normal Collection</h2>
            <P>Affordable stylish warches for everyday use.</P>
        </div><br><br>
          <div class="watch-card">
                <div class="watch-images">
                    <img src="images/edifice.jpg" alt="Casio Edifice">
                    <span class="badge">popular</span>
                </div>
                <div class="watch-info">
                    <h3>Casio Edifice</h3>
                     <P class="price">&#8377; 6,999</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.8</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="7"
                         data-name="Casio Edifice"
                         data-price="6999"
                         data-image="images/edifice.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Casio+Edifice" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/titan.jpg" alt="Titan Neo">
                    <span class="badge">Best Value</span>
                </div>
                <div class="watch-info">
                    <h3>Titan Neo</h3>
                     <P class="price">&#8377; 5,499</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.7</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="8"
                         data-name="Titan Neo"
                         data-price="5499"
                         data-image="images/titan.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Titan+Neo" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

            <div class="watch-card">
                <div class="watch-images">
                    <img src="images/timex.jpg" alt="Timex Expedition">
                    <span class="badge">Trending</span>
                </div>
                <div class="watch-info">
                    <h3>Timex Expedition</h3>
                     <P class="price">&#8377; 4,499</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.7</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="9"
                         data-name="Timex Expedition"
                         data-price="4499"
                         data-image="images/timex.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Timex+Expedition" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

            
            <div class="watch-card">
                <div class="watch-images">
                    <img src="images/stunners.jpg" alt="Fastrack Stunners">
                    <span class="badge">New</span>
                </div>
                <div class="watch-info">
                    <h3>Fastrack Stunners</h3>
                     <P class="price">&#8377; 4,499</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.6</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="10"
                         data-name="Fastrack Stunners"
                         data-price="4499"
                         data-image="images/stunners.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Fastrack+Stunners" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

            <div class="watch-card">
                <div class="watch-images">
                    <img src="images/poze.jpg" alt=SonataPoze">
                    <span class="badge">Budget</span>
                </div>
                <div class="watch-info">
                    <h3>Sonta Poze</h3>
                     <P class="price">&#8377; 2,499</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.5</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="11"
                         data-name="Sonatapoze"
                         data-price="2499"
                         data-image="images/poze.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Sonta+poze" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

            <div class="watch-card">
                <div class="watch-images">
                    <img src="images/attivo.jpg" alt="Maxima Attivo">
                    <span class="badge">Claasic</span>
                </div>
                <div class="watch-info">
                    <h3>Maxima Attivo</h3>
                     <P class="price">&#8377; 4,499</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.7</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="12"
                         data-name="Maxima Attivo"
                         data-price="4499"
                         data-image="images/attivo.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Maxima+Attivo" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div><br>
            <div style="grid-column: 1/-1; margin-top: 50px;"
             <div class="section-title">
            <h2>Kids Collection</h2>
            <P>Colorful, durable and stylish watches specially designed for kids..</P>
             </div>
            <div class="watch-card">
                <div class="watch-images">
                    <img src="images/digital.jpg" alt="Casio Kids Digital">
                    <span class="badge">Kids</span>
                </div>
                <div class="watch-info">
                    <h3>Casio Kids Digital</h3>
                     <P class="price">&#8377; 1,199</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.8</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="13"
                         data-name="Casio Kids Digital"
                         data-price="1199"
                         data-image="images/digital.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Casio+Kids+Digital" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>
           
             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/timex ironmen.jpg" alt="Timex Kids Fun">
                    <span class="badge">Famous</span>
                </div>
                <div class="watch-info">
                    <h3>Timex Kids Fun</h3>
                     <P class="price">&#8377; 1,499</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.7</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="14"
                         data-name="Timex Kids Fun"
                         data-price="1499"
                         data-image="images/timex ironmen.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Timex+kids+Fun" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/sonata sports.jpg" alt="Sonata Kids Sports">
                    <span class="badge">look</span>
                </div>
                <div class="watch-info">
                    <h3>Sonata Kids Sports</h3>
                     <P class="price">&#8377;1,799</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.9</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="15"
                         data-name="Sonta Kids Sports"
                         data-price="1799"
                         data-image="images/sonata sports.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Sonta+Kids+Sports" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/fastruck kids.jpg" alt="Fastrack Kids">
                    <span class="badge">Choice</span>
                </div>
                <div class="watch-info">
                    <h3>Fastrack Kids</h3>
                     <P class="price">&#8377; 2,199</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.6</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="16"
                         data-name="Fastruck Kids"
                         data-price="2199"
                         data-image="images/fastruck kids.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Fastrack+Kids" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/zoop.jpg" alt="Zoop by Titan">
                    <span class="badge">Popular</span>
                </div>
                <div class="watch-info">
                    <h3>Zoop by Titan</h3>
                     <P class="price">&#8377; 2,499</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>5.0</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="17"
                         data-name="Zoop by Titan"
                         data-price="2499"
                         data-image="images/zoop.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Zoop+by+Titan" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>

             <div class="watch-card">
                <div class="watch-images">
                    <img src="images/disney.jpg" alt="Disney Kids Watch">
                    <span class="badge">Claasic</span>
                </div>
                <div class="watch-info">
                    <h3>Disney Kids Watch</h3>
                     <P class="price">&#8377; 2,999</P>
                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;
                    <span>4.9</span>
                    </div>
                    <P><i class="fa-solid fa-truck-fast"></i>Free Shipping</P>
                    <P><i class="fa-solid fa-shield-halved"></i>1 Years Warranty</P>
                    <div class="card-buttons">
                        <button class="detailsbtn">View Details</button>
                         <button
                         class="addToCart"
                         data-id="18"
                         data-name="Disney Kids Watch"
                         data-price="2999"
                         data-image="images/disney.jpg">
                         Add To Cart
                        </button>
                        <a href="https://www.amazon.in/s?k=Disney+Kids+watch" target="_blank" class="buy-btn">Buy Now</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <h2>Stay Updated</h2>
        <P>Subscribe to receive exclusive offers , new arrivals and luxury watch collection</P>

         <form id="newsletterForm">
        <input
        type="email"
        id="newsletterEmail"
        placeholder="Enter your Email" required>
        <button type="submit">Subscribe</button>
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