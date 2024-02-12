window.onload = function() {
    slideOne();
    slideTwo();
}

let sliderOne = document.getElementById("slider1");
let sliderTwo = document.getElementById("slider2");

let displayValOne = document.getElementById("range1");
let displayValTwo = document.getElementById("range2");

let minGap = 1000;
let sliderTrack = document.querySelector(".slider-track");
let sliderMaxValue = document.getElementById("slider1").max;



function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap)
    {
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    displayValOne.innerHTML = slideOne.value;
    fillColor();
};


function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap)
    {
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    displayValTwo.innerHTML = slideTwo.value;
    fillColor();
}

function fillColor(){
    percent1 = (sliderOne.value - sliderMinValue) / (sliderMaxValue - sliderMinValue) * 100;
    percent2 = (sliderTwo.value - sliderMinValue) / (sliderMaxValue - sliderMinValue) * 100;
    sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% ,
        #3264fe ${percent1}%, #3264fe ${percent2}%, #dadae5 ${percent2}% )`;
}


/*let km = document.getElementById("slider1");
let res = document.getElementById("range1");

km.addEventListener("input", function() {
    res.innerHTML = km.value + "km";
}, false);

console.log(km);*/