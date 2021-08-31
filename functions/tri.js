var SORT_DESC = 0;
var SORT_ASC = 1;

var orderSort = SORT_DESC

function triAsc() {
    var products = document.getElementsByClassName('products');
    if (orderSort != SORT_ASC) {
        orderSort = SORT_ASC;
        parentDiv = document.getElementById('parentCard');
        products = [].slice.call(products, 0).reverse();
        products.forEach(card => {
            // card.remove();
            parentDiv.appendChild(card)
        });

        
    }

}

function triDesc() {
    var products = document.getElementsByClassName('products');
    if (orderSort != SORT_DESC) {
        orderSort = SORT_DESC;
        parentDiv = document.getElementById('parentCard');
        products = [].slice.call(products, 0).reverse();
        products.forEach(card => {
            // card.remove();
            parentDiv.appendChild(card)
        });

        
    }

}

var indic = 0;
var monBouton = document.getElementById('bouton');

function change() {
    if (indic == 0) {
        monBouton.style.backgroundColor = "blue";
        indic = 1;
    }
    else {
        monBouton.style.backgroundColor = "red";
        indic = 0;
    }
}