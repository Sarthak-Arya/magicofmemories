let showPopup = function(){
    let popup = document.querySelector('.elementor-popup');
    let background = document.querySelector('.black-screen');
    popup.style.visibility = 'visible';
    background.style.visibility ='visible';
    
}   

let hidePopup = function(){
    let popup = document.querySelector('.elementor-popup');
    let background = document.querySelector('.black-screen');
    popup.style.visibility = 'hidden';
    background.style.visibility = 'hidden';
}