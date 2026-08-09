             // dark /light mode //

const themeToggle=document.getElementById("themeToggle");
  if (themeToggle){
    if
    (localStorage.getItem("theme")=== "light"){
        document.body.classList.add("light-mode");
        themeToggle.classList.remove("fa-moon");
        themeToggle.classList.add("fa-sun");
    }

  themeToggle.addEventListener("click",()=>{
    document.body.classList.toggle("light-mode");
    if(document.body.classList.contains("light-mode")){
        localStorage.setItem("theme","light");
        themeToggle.classList.remove("fa-moon");
        themeToggle.classList.add("fa-sun");
    }else{
        localStorage.setItem("theme","dark");
        themeToggle.classList.remove("fa-sun");
        themeToggle.classList.add("fa-moon");
    }
  });
}
// ======================
// VIEW DETAILS
// ======================

document.querySelectorAll(".detailsbtn").forEach(function(btn) {

    btn.addEventListener("click", function() {

        const card = this.closest(".watch-card");

        const name = card.querySelector("h3").textContent.trim();
        const price = card.querySelector(".price").textContent.trim();
        const rating = card.querySelector(".rating span").textContent.trim();

        const paragraphs = card.querySelectorAll(".watch-info > p");

        const shipping = paragraphs[0].textContent.trim();
        const warranty = paragraphs[1].textContent.trim();

        alert(
            "⌚ " + name + "\n\n" +
            "💰 " + price + "\n" +
            "⭐ Rating: " + rating + "/5\n" +
            "🚚 " + shipping + "\n" +
            "🛡️ " + warranty
        );

    });

});
             // Collection search  //

const searchInput=document.getElementById("searchInput");
const watchCards=document.querySelectorAll(".watch-card");
    if(searchInput){
        searchInput.addEventListener("input",()=>{
        const value=searchInput.value.toLowerCase();
        watchCards.forEach(card=>{
            const title =card.querySelector("h3").textContent.toLowerCase();
            if(title.includes(value)){
                card.style.display="flex";
            }else{
                card.style.display="none";
            }
        });
    });
    }

             //  Brand Filter  //
const brandFilter =document.getElementById("brandFilter");
    if (brandFilter){
        brandFilter.addEventListener("change",()=>{
            const selected=brandFilter.value.toLowerCase();
            watchCards.forEach(card=>{
                const title=card.querySelector("h3").textContent.toLocaleLowerCase();
                if(
                    selected ==="all" ||
                    title.includes(selected)
                    ){
                        card.style.display="flex";
                    }else{
                        card.style.display="none";
                    }
                    
         });
            });
    }

// Contact Form
const contactForm = document.getElementById("contactForm");

if (contactForm) {
    contactForm.addEventListener("submit", function (e) {

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        if (
            name === "" ||
            email === "" ||
            phone === "" ||
            subject === "" ||
            message === ""
        ) {
            e.preventDefault(); // Sirf validation fail hone par form roko
            alert("Please fill all fields.");
        }
    });
}

  // Newsletter Form
const newsletterForm = document.querySelector("#newsletterForm");

if (newsletterForm) {
    newsletterForm.addEventListener("submit", function (e) {

         const email = newsletterForm.querySelector('input[name="email"]').value.trim();
        if (email === "") {
            e.preventDefault();
            alert("Please enter your email.");
            return;
        }

        // Yahan preventDefault() nahi hai,
        // isliye form newsletter.php me submit hoga.
    });
}
    // back to top//
const backtop=document.querySelector(".back-top");
window.addEventListener("scroll",()=>{
    if(!backtop) return;
    if(window.scrollY>300){
        backtop.style.display="flex";
    }else{
        backtop.style.display="none";
    }
});

// ===== Mobile Menu =====

const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");
const navItems = document.querySelectorAll(".nav-links a");

if (menuBtn && navLinks) {

    menuBtn.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });

    navItems.forEach(item => {
        item.addEventListener("click", () => {
            navLinks.classList.remove("active");
        });
    });


}

// ======================
// ADD TO CART
// ======================

const cartButtons = document.querySelectorAll(".addToCart");

cartButtons.forEach(button => {

    button.addEventListener("click", function () {

        const product = {
            id: this.dataset.id,
            name: this.dataset.name,
            price: parseInt(this.dataset.price.replace(/,/g, "")),
            image: this.dataset.image
        };

        let cart = JSON.parse(localStorage.getItem("cart")) || [];

        cart.push(product);

        localStorage.setItem("cart", JSON.stringify(cart));

        alert(product.name + " Added To Cart Successfully!");

    });

});


// ======================
// SHOW CART
// ======================

let cart = JSON.parse(localStorage.getItem("cart")) || [];

const cartItems = document.getElementById("cartItems");
const totalPrice = document.getElementById("totalPrice");

if (cartItems && totalPrice) {

    cartItems.innerHTML = "";

    let total = 0;

    cart.forEach((item, index) => {

        total += item.price;

        cartItems.innerHTML += `
        <div class="cart-item">

            <img src="${item.image}" width="100">

            <div>
                <h3>${item.name}</h3>
                <p>₹${item.price.toLocaleString()}</p>
            </div>

            <button class="removeBtn" onclick="removeItem(${index})">
    Remove
</button>

        </div>
        `;
    });

    totalPrice.innerHTML = `Total : ₹${total.toLocaleString()}`;
}


// ======================
// REMOVE ITEM
// ======================

function removeItem(index){

    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    cart.splice(index,1);

    localStorage.setItem("cart",JSON.stringify(cart));

    location.reload();

}