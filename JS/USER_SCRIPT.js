//user box section
const userBtn = document.querySelector('#user-btn');
const userBox = document.querySelector('.profile'); 
userBtn.addEventListener('click', function(){
    userBox.classList.toggle('active');
});


//navbar section
const toggle = document.querySelector('#menu-btn');
toggle.addEventListener('click', function(){
    const navbar = document.querySelector('.navbar');
    navbar.classList.toggle('active');
});

//search section
let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = ()=>{
    searchForm.classList.toggle('active');
    userBox.classList.remove('active'); 
}

//slider sectin
let sliderItems = document.querySelectorAll('.slider-item');
let currentIndex = 0;

function nextSlide() {
    sliderItems[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % sliderItems.length;
    sliderItems[currentIndex].classList.add('active');
}

function prevSlide() {
    sliderItems[currentIndex].classList.remove('active');
    currentIndex = (currentIndex - 1 + sliderItems.length) % sliderItems.length;
    sliderItems[currentIndex].classList.add('active');
}

