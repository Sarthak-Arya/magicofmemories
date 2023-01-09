let showPopup = function(){
    let popup = document.querySelector('.elementor-popup');
    let background = document.querySelector('.overlay');
    popup.style.display = 'block';
    background.style.display = 'block';
    
}   

let hidePopup = function(){
    let popup = document.querySelector('.elementor-popup');
    let background = document.querySelector('.overlay');
    popup.style.display = 'none';
    background.style.display = 'none';
}

let something = function(){
    let productForm = document.querySelector('.product-details');
    productForm.onsubmit(showPopup());
}

let submitFormProduct = function(){
    document.querySelector('.product-details').submit();

}


let submitForms = function(){
    document.querySelector('.customer-details').submit();

}