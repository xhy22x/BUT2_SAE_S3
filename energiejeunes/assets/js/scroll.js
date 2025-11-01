let ul = document.querySelector('.item-slide ul');
let lis = document.querySelectorAll('.item-slide li');
let btns = document.querySelectorAll('.btn-s');

// Duplique le contenu
ul.innerHTML = ul.innerHTML + ul.innerHTML;
lis = document.querySelectorAll('.item-slide li');

let speed = -1.5;
let currentPosition = 0;

function move() {
    currentPosition += speed;

    const singleSetWidth = ul.scrollWidth / 2;
    if (currentPosition <= -singleSetWidth) {
        currentPosition = 0;
    }
    if (currentPosition > 0) {
        currentPosition = -singleSetWidth;
    }
    ul.style.left = currentPosition + 'px';
}

let timer = setInterval(move,40);

ul.addEventListener('mouseenter',()=> clearInterval(timer));
ul.addEventListener('mouseleave',()=> timer = setInterval(move, 16));
btns[1].addEventListener('click',()=> speed = -1.5);
btns[0].addEventListener('click',() => speed = 1.5);
