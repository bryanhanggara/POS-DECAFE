// *Function for decreasing quantity on menu card Dashboard
function decreaseQuantity() {
    var quantityElement = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityElement.innerText);
    if (currentQuantity > 0) {
        quantityElement.innerText = currentQuantity - 1;
    }
}

// *Function for increasing quantity on menu card Dashboard
function increaseQuantity() {
    var quantityElement = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = currentQuantity + 1;
}





