let cart = document.getElementById('cart');
let cartPopup = document.getElementById('cart-popup');

cart.addEventListener('click', (e) => {
    cartPopup.classList.add('cart-popup-target');
})