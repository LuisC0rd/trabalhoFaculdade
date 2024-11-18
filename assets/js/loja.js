if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

var totalAmount = "0,00";

function ready() {
    // Botão remover produto
    const removeCartProductButtons = document.getElementsByClassName("remove-product-button");
    for (var i = 0; i < removeCartProductButtons.length; i++) {
        removeCartProductButtons[i].addEventListener("click", removeProduct);
    }

    // Botão add produto ao carrinho
    const addToCartButtons = document.getElementsByClassName("button-hover-background");
    for (var i = 0; i < addToCartButtons.length; i++) {
        addToCartButtons[i].addEventListener("click", addProductToCart);
    }
}

function removeProduct(event) {
    const productRow = event.target.parentElement.parentElement;
    const productName = productRow.getElementsByClassName("cart-product-title")[0].innerText;

    let productsCart = JSON.parse(localStorage.getItem('cartProducts')) || [];
    productsCart = productsCart.filter(product => product.name !== productName);

    localStorage.setItem('cartProducts', JSON.stringify(productsCart));

    productRow.remove();
    updateTotal();
}

function addProductToCart(event) {
    const button = event.target;
    const productInfos = button.parentElement.parentElement;
    const productName = productInfos.getElementsByClassName("product-title")[0].innerText;
    const productPrice = productInfos.getElementsByClassName("product-price")[0].innerText;

    const productsCart = JSON.parse(localStorage.getItem('cartProducts')) || [];

    const existingProduct = productsCart.find(product => product.name === productName);
    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        productsCart.push({
            name: productName,
            price: productPrice,
            quantity: 1
        });
    }

    // Atualiza o produto no localStorage
    localStorage.setItem('cartProducts', JSON.stringify(productsCart));

    // Redireciona para a página do carrinho
    setTimeout(function () {
        window.location.href = "carrinho.html";
    }, 500);
}