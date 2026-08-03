
document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("dedicated-cart-container");
  
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
  
    if (cart.length === 0) {
      container.innerHTML = "<p> Your cart is empty</p>";
      return;
    }
  
    let total = 0;
    container.innerHTML = "";
  
    cart.forEach((item, index) => {
      total += Number(item.price);
  
      const div = document.createElement("div");
      div.innerHTML = `
      <img src="${item.img}" alt="${item.name}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px; margin-right: 10px;">
        <p>${item.name} - Ksh ${item.price}</p>
        <button onclick="removeItem(${index})"
        style="background-color: #f39c12; color: white; border: none; padding: 6px 14px; border-radius: 20px; cursor: pointer;"
        >Remove</button>
      `;
  
      container.appendChild(div);
    });


    document.getElementById("summary-total").innerText=`Ksh.${total}`;
});


function removeItem(index) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  cart.splice(index, 1);

  localStorage.setItem("cart", JSON.stringify(cart));

  location.reload();
}


document.getElementById('checkout-btn').addEventListener('click', function (){
  fetch('/gardennwears/check-auth.php')
      .then(response=>response.json())
      .then ( data=> {
        if(data.loggedIn){

          window.location.href='/gardennwears/pages/checkout.php';
      }else{
          window.location.href='/gardennwears/pages/login.php';

      }   
      })
        .catch(error=>{
            console.error('Auth check failed:' , error);
        });
});






