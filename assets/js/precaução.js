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

    // Mudança valor dos inputs
    const quantityInputs = document.getElementsByClassName("product-qtd-input");
    for (var i = 0; i < quantityInputs.length; i++) {
        quantityInputs[i].addEventListener("change", checkIfInputIsNull);
    }

    // Botão add produto ao carrinho
    const addToCartButtons = document.getElementsByClassName("button-hover-background");
    for (var i = 0; i < addToCartButtons.length; i++) {
        addToCartButtons[i].addEventListener("click", addProductToCart);
    }

    // Botão comprar
    const purchaseButton = document.getElementsByClassName("purchase-button")[0];
    purchaseButton.addEventListener("click", makePurchase);
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

function checkIfInputIsNull(event) {
    if (event.target.value === "0") {
        removeProduct(event);
    } else {
        const productName = event.target.parentElement.parentElement.getElementsByClassName("cart-product-title")[0].innerText;
        let productsCart = JSON.parse(localStorage.getItem('cartProducts')) || [];

        const product = productsCart.find(product => product.name === productName);
        if (product) {
            product.quantity = event.target.value;
        }

        localStorage.setItem('cartProducts', JSON.stringify(productsCart));
    }

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

    // Atualiza o carrinho no localStorage
    localStorage.setItem('cartProducts', JSON.stringify(productsCart));

    // Redireciona para a página do carrinho
    setTimeout(function () {
        window.location.href = "carrinho.html";
    }, 500);
}

function makePurchase() {
    if (totalAmount === "0,00") {
        alert("Seu carrinho está vazio!");
    } else {
        alert(
            `
            Obrigado pela sua compra!
            Valor do pedido: R$${totalAmount}\n
            Volte sempre :)
            `
        );
        document.querySelector(".cart-table tbody").innerHTML = "";
        localStorage.removeItem('cartProducts');
        updateTotal();
    }
}

// Atualizar o valor total do carrinho
function updateTotal() {
    const cartProducts = document.getElementsByClassName("cart-product");
    totalAmount = 0;

    for (var i = 0; i < cartProducts.length; i++) {
        const productPrice = cartProducts[i].getElementsByClassName("cart-product-price")[0].innerText.replace("R$", "").replace(",", ".");
        const productQuantity = cartProducts[i].getElementsByClassName("product-qtd-input")[0].value;

        totalAmount += productPrice * productQuantity;
    }

    totalAmount = totalAmount.toFixed(2);
    totalAmount = totalAmount.replace(".", ",");
    document.querySelector(".cart-total-container span").innerText = "R$" + totalAmount;
}
