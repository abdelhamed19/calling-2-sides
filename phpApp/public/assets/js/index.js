
let increase = document.getElementById("increase");
let amount = document.getElementById("amount");
let decrease = document.getElementById("decrease");
let badgeAmount = document.getElementById('badge-amount')
badgeAmount.textContent = 0;

increase.addEventListener("click", function () {
  let num = Number(amount.textContent);
  num++;
  amount.textContent = num;

});

decrease.addEventListener("click", function () {
  let num = Number(amount.textContent);
  if (num === 0) {
    return; 
  }
  num--;
  amount.textContent = num;
});



let addToCart = document.getElementById('addToCart')

addToCart.addEventListener('click',function(){
  // check if th Mount Grater Than Zero 
  if(Number(amount.textContent) >= 1){
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Add To Cart Succesfully",
      showConfirmButton: false,
      timer: 2000
      });
    }  else{
      Swal.fire({
        position: "top-end",
        icon: "error",
        title: "You Can't Add Zero Amount",
        showConfirmButton: false,
        timer: 1500
        });
    }
    badgeAmount.textContent = amount.textContent
})

let productFeatures  = document.getElementById('product-features')

let currentYear = document.getElementById("currentYear");
currentYear.textContent = new Date().getFullYear();

window.addEventListener("load", () => {
  const images = document.querySelectorAll(".description .animation-img img");
  images.forEach((image) => {
    image.classList.add("loaded");
  });
});




