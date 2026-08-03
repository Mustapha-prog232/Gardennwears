let currentSlideIndex = 0;

function moveSlide(direction){
const slides = document.querySelectorAll('.carousel-item');

if (slides.length  === 0) return;

slides[currentSlideIndex].classList.remove('active');

currentSlideIndex += direction;

if (currentSlideIndex >= slides.length) {

currentSlideIndex = 0;
}

if (currentSlideIndex < 0) {
currentSlideIndex = slides.length - 1;
}

slides[currentSlideIndex].classList.add('active');

}


const slideSpeed = 3000;

let autoSlideTimer = setInterval(function()
{
moveSlide(1);
},slideSpeed
);




const catalogData = {
newArrivals: [
{id:"1",name: "Suit", price:"4500", img: "/gardennwears/assets/images/suit.jpg"},
{id:"2",name: "Airforce one Shoes", price:"2800", img: "/gardennwears/assets/images/airforce_one_shoes.jpg"},
{id:"3",name: "Denim Jacket", price:"1500", img: "/gardennwears/assets/images/denim_jacket.jpg"},
{id:"4",name: "Denim Trouser", price:"2000", img: "/gardennweears/assets/images/denim_trouser.jpg"},
{id:"5",name: "Leather shoes", price:"1800", img: "/gardennwears/assets/images/leather_shoes.jpg"},
{id:"6",name: "Leather Jacket", price:"3599", img: "/gardennwears/assets/images/leather_jacket.jpg"},
{id:"7",name: "J4 Shoes", price:"3499", img: "/gardennwears/assets/images/j4_shoes.jpg"},
{id:"8",name: "Baggy Pants", price:"799", img: "/gardennwears/assets/images/baggy_pants.jpg"},
],

trending: [
{id:"9",name: "Cargo pants", price:"500", img: "/gardennwears/assets/images/cargo_pants.jpg"},
{id:"10",name: "Balaclava", price:"450", img: "/gardennwears/assets/images/balaclava.jpg"},
{id:"11",name: "Baleniciaga shoes", price:"3200", img: "/gardennwears/assets/images/balenciaga_shoes.jpg"},
{id:"12",name: "Adidas shoes", price:"3500", img: "/gardennwears/assets/images/adidas_shoes.jpg"},
{id:"13",name: "Tottenham hotspur kit", price:"1600", img: "/gardennwears/assets/images/tottenham_hotspur_kit.jpg"},
{id:"14",name: "Black Tshirt", price:"600", img: "/gardennwears/assets/images/black_tshirt.jpg"},
{id:"15",name: "White Tshirt", price:"600", img: "/gardennwears/assets/images/white_tshirt.jpg"},
],

Essentials: [
{id:"16",name: "Blue Trouser", price:"800", img: "/gardennwears/assets/images/blue_trouser.jpg"},
{id:"17",name: "White shirt", price:"500", img: "/gardennwears/assets/images/white_shirt.jpg"},
{id:"18",name: "Blue Shirt", price:"500", img: "/gardennwears/assets/images/blue_shirt.jpg"},
{id:"19",name: "Black Hoddie", price:"800", img: "/gardennwears/assets/images/black_hoodie.jpg"},
{id:"20",name: "Blue sweater", price:"700", img: "/gardennwears/assets/images/blue_sweater.jpg"},
{id:"21",name: "Red shirt", price:"599", img: "/gardennwears/assets/images/red_shirt.jpg"},
{id:"22",name: "Black cap", price:"400", img: "/gardennwears/assets/images/black_cap.jpg"},
],

Hoddiesandsweaters: [
    {id:"23",name:"Heavy hoddie",price:"1499",img:"/gardennwears/assets//images/heavy_hoddie.jpg"},
    {id:"24",name:"Hoddie pull over for women",price:"1699",img:"/gardennwears/assets/images/hoddie_pull_over_for_women.jpg"},
    {id:"25",name:"Hoddie sweat shirt",price:"999",img:"/gardennwears/assets/images/hoddie_sweat_shirt.jpg"},
    {id:"26",name:"Quality unisex hoddie",price:"1500",img:"/gardennwears/assets/images/quality_unisex_hoddie.jpg"},
    {id:"27",name:"Unisex hoddie sweater",price:"2000",img:"/gardennwears/assets/images/unisex_hoddie_sweater.jpg"},
    {id:"28",name:"Men zip up hoddie",price:"1500",img:"/gardennwears/assets/images/men_zip_up_hoddie.jpg"},
    {id:"29",name:"Women nitted hoddie",price:"1899",img:"/gardennwears/assets/images/women_nitted_hoddie.jpg"},
    {id:"30",name:"Women sweater",price:"1200",img:"/gardennwears/assets/images/women_sweater.jpg"},
    {id:"31",name:"Wool sweater",price:"2499",img:"/gardennwears/assets/images/wool_sweaters.jpg"},
    {id:"32",name:"Professional security Sweater ",price:"799",img:"/gardennwears/assets/images/professional_security_sweaters.jpg"},

],


tshirts: [
    {id:"33",name:"Men Oxford Shirt",price:"699",img:"/gardennwears/assets/images/men_oxford_shirt.jpg"},
    {id:"34",name:"Kenya shield Tshirt",price:"499",img:"/gardennwears/assets/images/kenya_shield_tshirt.jpg"},
    {id:"35",name:"Oversized Tshirt for men",price:"700",img:"/gardennwears/assets/images/oversized_tshirt_for_men.jpg"},
    {id:"36",name:"Short sleeved shirt for Men",price:"899",img:"/gardennwears/assets/images/mens_shirt_short_sleeved.jpg"},
    {id:"37",name:"Polo Shirt",price:"699",img:"/gardennwears/assets/images/polo_tshirt.jpg"},
    {id:"38",name:"Round-Neck plain tshirt",price:"599",img:"/gardennwears/assets/images/round_neck_plain_tshirt.jpg"},
    {id:"39",name:"Stripped shirt for Men",price:"799",img:"/gardennwears/assets/images/striped_shirt_for_men.jpg"},
    {id:"40",name:"Custom  cut Tshirt",price:"600",img:"/gardennwears/assets/images/custom_cut_tshirt.jpg"},
    {id:"41",name:"Corporate Shirt",price:"899",img:"/gardennwears/assets/images/corporate_shirt.jpg"},
    {id:"42",name:"Blue % Grey checked shirt",price:"700",img:"/gardennwears/assets/images/blue_grey_check_shirt.jpg"},

],



jeans: [
    {id:"43",name:"Lucia Stitched Denim baggy jeans",price:"1299",img:"/gardennwears/assets/images/lucia_stitched_denim_baggy_jeans.jpg"},
    {id:"44",name:"Oversized Pants baggy jeans",price:"1500",img:"/gardennwears/assets/images/oversized_pants_baggy_jeans.jpg"},
    {id:"45",name:"Slim fit black jeans for men",price:"899",img:"/gardennwears/assets/images/slim_fit_black_jeans_for_men.jpg"},
    {id:"46",name:"Stretch jeans",price:"999",img:"/gardennwears/assets/images/stretch_jeans.jpg"},
    {id:"47",name:"Tapered fit jeans",price:"1099",img:"/gardennwears/assets/images/tapered_fit_jeans.jpg"},
    {id:"48",name:"Long loose jeans",price:"1499",img:"/gardennwears/assets/images/long_loose_jeans.jpg"},
    {id:"49",name:"High waisted wide leg for women",price:"1500",img:"/gardennwears/assets/images/high_waisted_wide_leg_for_women.jpg"},
    {id:"50",name:"High waisted barrel jeans",price:"1500",img:"/gardennwears/assets/images/high_waisted_barrel_jeans.jpg"},
    {id:"51",name:"Donna Jeans Stream Sky Retro",price:"1399",img:"/gardennwears/assets/images/donna_jeans_stream_sky_retro.jpg"},
    {id:"52",name:"Classic jeans regular light blue",price:"1200",img:"/gardennwears/assets/images/classic_jeans_regular_light_blue.jpg"},

],


shoes: [
    {id:"53",name:"Generic boys casual shoes ",price:"1999",img:"/gardennwears/assets/images/generic_boys_casual_shoes.jpg"},
    {id:"54",name:"High milage running shoes",price:"1499",img:"/gardennwears/assets/images/high_mileage_running_shoes.jpg"},
    {id:"55",name:"Custom sneakers",price:"3500",img:"/gardennwears/assets/images/custom_sneakers-shoes.jpg"},
    {id:"56",name:"Chunky shoes",price:"2500",img:"/gardennwears/assets/images/chunky_shoes.jpg"},
    {id:"57",name:"Beginner basketball shoes",price:"2000",img:"/gardennwears/assets/images/beginner_basketball_shoes.jpg"},
    {id:"58",name:"Ladies sports shoes",price:"2000",img:"/gardennwears/assets/images/ladies_sports_shoes.jpg"},
    {id:"59",name:"Men sport sneakers",price:"2500",img:"/gardennwears/assets/images/men_sneakers-sport_shoes.jpg"},
    {id:"60",name:"Airforce one custom shoes",price:"3499",img:"/gardennwears/assets/images/airforce_one_custom_shoes.jpg"},
    {id:"61",name:"Adidas shoes",price:"3000",img:"/gardennwears/assets/images/adidas_shoes.jpg"},
    {id:"62",name:"Leather shoes",price:"2000",img:"/gardedennwears/assets/images/leather_shoes.jpg"},

],


headwear: [
    {id:"63",name:"Uflex Cap",price:"350",img:"/gardennwears/assets/images/uflex_cap-headwear.jpg"},
    {id:"64",name:"Custom hat",price:"400",img:"/gardennwears/assets/images/custom_hat-headwear.jpg"},
    {id:"65",name:"Golf hat",price:"400",img:"/gardennwears/assets/images/golf_hat-headwear.jpg"},
    {id:"66",name:"Autumn headwear",price:"500",img:"/gardennwears/assets/images/autumn_headwear.jpg"},
    {id:"67",name:"Mammoth headwear",price:"650",img:"/gardennwears/assets/images/mammoth_headwear.jpg"},
    {id:"68",name:"Winter headwear",price:"400",img:"/gardennwears/assets/images/winter_headwear.jpg"},
    {id:"69",name:"Kenya flag embroided bucket hat",price:"350",img:"/gardennwears/assets/images/kenya_flag_embroided_bucket_hat_headwear.jpg"},
    {id:"70",name:"Ceremonial top hat",price:"799",img:"/gardennwears/assets/images/ceremonial_top_hat-headwear.jpg"},
    {id:"71",name:"Odyssey headwear",price:"699",img:"/gardennwears/assets/images/odyssey_headwear.jpg"},
    {id:"72",name:"Designer headwear",price:"799",img:"/gardennwears/assets/images/designer_headwear.jpg"},

],


outwear: [
    {id:"73",name:"Engine leather jacket",price:"2500",img:"/gardennwears/assets/images/engine_leather_jacket_outwear.jpg"},
    {id:"74",name:"Women winter jacket",price:"3000",img:"/gardennwears/assets/images/women_winter_jacket_outwear.jpg"},
    {id:"75",name:"Millitary jacket",price:"3500",img:"/gardennwears/assets/images/millitary_jacket_outwear.jpg"},
    {id:"76",name:"Men's winter knitted outwear",price:"1500",img:"/gardennwears/assets/images/mens_winter_knitted_outwear.jpg"},
    {id:"77",name:"Lymio jacket",price:"2000",img:"/gardennwears/assets/images/lymio_jacket_outwear.jpg"},
    {id:"78",name:"Kid's jacket",price:"1299",img:"/gardennwears/assets/images/kids_jacket_outwear.jpg"},
    {id:"79",name:"Denim outwear",price:"2499",img:"/gardennwears/assets/images/denim_outwear.jpg"},
    {id:"80",name:"Athletic outwear",price:"2000",img:"/gardennwears/assets/images/athletic_outwear.jpg"},
    {id:"81",name:"David outwear jacket",price:"3499",img:"/gardennwears/assets/images/david_outwear_jacket.jpg"},
    {id:"82",name:"Twill jacket",price:"2000",img:"/gardennwears/assets/images/twill_jacket_outwear.jpg"},

],





}

function generateProductHTML(product) {
    return `
        <div class="product-card">
            <img src="${product.img}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p class="price">Ksh.${product.price}</p>
            <button class="add-to-cart"data-id="${product.id}">Add to Cart</button>
        </div>
    `;
}



function displayCatalog(){
const newArrivalsContainer= document.getElementById('new-arrivals-list');
const trendingContainer= document.getElementById('trending-list');
const essentialsContainer= document.getElementById('essentials-list');
const HoddiesandsweatersContainer=document.getElementById('hoddies-and-sweaters-list');
const tshirtsContainer=document.getElementById('tshirts-list');
const jeansContainer=document.getElementById('jeans-list');
const shoesContainer=document.getElementById('shoes-list');
const headwearContainer=document.getElementById('headwear-list');
const outwearContainer=document.getElementById('outwear-list');




if (newArrivalsContainer){
newArrivalsContainer.innerHTML = catalogData.newArrivals.map(generateProductHTML).join('');
    // catalogData.newArrivals.map((product)=>{
        
    //     return `<div class="product-card">
    //         <img src="${product.img}" alt="${product.name}">
    //         <h3>${product.name}</h3>
    //         <p class="price">${product.price}</p>
    //         <button class="add-to-cart">Add to Cart</button>
    //     </div>`
    // });
}

if(trendingContainer) {
trendingContainer.innerHTML = catalogData.trending.map(generateProductHTML).join('');

}

if(essentialsContainer) {
essentialsContainer.innerHTML = catalogData.Essentials.map(generateProductHTML).join ('');

}


if(HoddiesandsweatersContainer){
HoddiesandsweatersContainer.innerHTML = catalogData.Hoddiesandsweaters.map(generateProductHTML).join('');

}



if(tshirtsContainer){
    tshirtsContainer.innerHTML = catalogData.tshirts.map(generateProductHTML).join('');
    
    }

    if(jeansContainer){
        jeansContainer.innerHTML = catalogData.jeans.map(generateProductHTML).join('');
        
        }


 if(shoesContainer){
      shoesContainer.innerHTML = catalogData.shoes.map(generateProductHTML).join('');
            
     }


 if(headwearContainer){
     headwearContainer.innerHTML = catalogData.headwear.map(generateProductHTML).join('');
                
                }

     if(outwearContainer){
         outwearContainer.innerHTML = catalogData.outwear.map(generateProductHTML).join('');
                    
                    }







}

window.addEventListener('DOMContentLoaded',() => {
    displayCatalog();
});





const proceedBtn = document.getElementById("proceed-btn");


if (proceedBtn) {
    proceedBtn.addEventListener("click", () => {
      const currentMethod = document.querySelector('input[name="pay-choice"]:checked').value;
  
      if (currentMethod === "mpesa") {
        const phoneNum = document.getElementById("checkout-phone").value.trim();
  
        if (!phoneNum) {
          alert("Please enter your M-Pesa phone number to proceed.");
          return;
        }
  
        alert(`Sending M-Pesa STK Prompt request to ${phoneNum}...`);
      } 
      else if (currentMethod === "card") {
        const num = document.getElementById("card-num").value.trim();
        const exp = document.getElementById("card-expiry").value.trim();
        const cvv = document.getElementById("card-cvv").value.trim();
  
        if (!num || !exp || !cvv) {
          alert("Please complete all Credit Card details to process payment.");
          return;
        }
  
        alert("Redirecting securely to secure card validation gateway...");
      }
    });
  }


 // document.addEventListener("click", (e) => {
   // if (e.target.classList.contains("add-to-cart")) {
  
   //   const id = e.target.dataset.id;
  
      // Find product from your catalog
  //    let selectedProduct;
  
    //  for (let category in catalogData) {
     //   const found = catalogData[category].find(p => p.id == id);
    //    if (found) {
    //      selectedProduct = found;
    //      break;
    //    }
   //   }
  
      // Get cart
    //  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  
    //  cart.push(selectedProduct);
  
     // localStorage.setItem("cart", JSON.stringify(cart));
  
   //   alert(selectedProduct.name + " added to cart");
   // }
 // });






//signup form validation
function validateForm() {
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

        if (fullname === "" || email === "" || password === "") {
            alert("Please fill in all fields.");
            return false;
        } 

        if(password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        }
        return true;

 }       

//redirect cart button to cart page
 function goToCart() {
  window.location.href = "/gardennwears/pages/cart.php";
}







//localStorage.setItem("loggedIn", "true");

//const signupBtn = document.getElementById("signup-btn");
//if(localStorage.getItem("loggedIn") === "true") {
  //if(signupBtn)signupBtn.style.display = "none";
//}

//function handleLogin() {
 // if(loginSucceess) {
   // localStorage.setItem("loggedIn", "true");
//window.location.href = "/gardennwears/index.php";
 // }
//}




//function updateAuthUI() {
 // const isLoggedIn = localStorage.getItem("loggedIn") === "true";
 // const fullname = localStorage.getItem("fullname");
//  const userDisplay = document.getElementById("user-display");
 // const signupBtn = document.getElementById("signup-btn");

  //if (isLoggedIn) {
//if(userDisplay) {
 // userDisplay.innerHTML = `👤${fullname} | <a href="/gardennwears/includes/db/logout.php/"style="cursor:pointer; color:black;">Logout</a>`;
 // userDisplay.style.display = "block";

//}

  //  if (signupBtn) signupBtn.style.display = "none";
//} else {
  //  if (userDisplay) userDisplay.style.display = "none";
  //  if (signupBtn) signupBtn.style.display = "";
 //   }
 // }




function logout() {
alert("Logging out...")
  // Clear storage
  localStorage.clear();
  sessionStorage.clear();

  window.location.href = "/gardennwears/pages/login.php";
}







// Only run checkout button code if the button exists on this page
const checkoutBtn = document.getElementById('checkout-btn');
if (checkoutBtn) {
    checkoutBtn.addEventListener('click', function () {
        fetch('/gardennwears/includes/db/check-auth.php')
            .then(response => response.json())
            .then(data => {
                if (data.loggedIn) {
                    window.location.href = '/gardennwears/pages/checkout.php';
                } else {
                    window.location.href = '/gardennwears/pages/login.php';
                }
            })
            .catch(error => {
                console.error('Auth check failed:', error);
            });
       });
}