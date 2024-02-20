//GESTION DES FILTRES

// identification des sliders
let sliderOne = document.getElementById("slider1");
let sliderTwo = document.getElementById("slider2");
let sliderThree = document.getElementById("slider3");
let sliderFour = document.getElementById("slider4");
let sliderFive= document.getElementById("slider5");
let sliderSix = document.getElementById("slider6");

// identification des encarts valeur
let displayValOne = document.getElementById("range1");
let displayValTwo = document.getElementById("range2");
let displayValThree = document.getElementById("range3");
let displayValFour = document.getElementById("range4");
let displayValFive = document.getElementById("range5");
let displayValSix = document.getElementById("range6");

// écart minimum entre les sliders
let minGapKm = 10;
let minGapPrice = 100;
let minGapYear = 1;


// création objet filtres
const filters = {
    km : {
        min: 0, max:250000
    },
    price: {
        min:500, max:77500
    },
    year: {
        min:1955, max:2023
    }
}

// Gestion des sliders :

function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGapKm)
    {
        sliderOne.value = parseInt(sliderTwo.value) - minGapKm;
    }
    displayValOne.innerHTML = sliderOne.value;
    filters.km.min = Number(sliderOne.value);
    filterCars(filters);
};

function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGapKm)
    {
        sliderTwo.value = parseInt(sliderOne.value) + minGapKm;
    }
    displayValTwo.innerHTML = sliderTwo.value;
    filters.km.max = Number(sliderTwo.value);
    filterCars(filters);
}

function slideThree() {
    if (parseInt(sliderFour.value) - parseInt(sliderThree.value) <= minGapPrice)
    {
        sliderThree.value = parseInt(sliderFour.value) - minGapPrice;
    }
    displayValThree.innerHTML = sliderThree.value;
    filters.price.min = Number(sliderThree.value);
    filterCars(filters);
};

function slideFour() {
    if (parseInt(sliderFour.value) - parseInt(sliderThree.value) <= minGapPrice)
    {
        sliderFour.value = parseInt(sliderThree.value) + minGapPrice;
    }
    displayValFour.innerHTML = sliderFour.value;
    filters.price.max = Number(sliderFour.value);
    filterCars(filters);
};

function slideFive() {
    if (parseInt(sliderSix.value) - parseInt(sliderFive.value) <= minGapYear)
    {
        sliderFive.value = parseInt(sliderSix.value) - minGapYear;
    }
    displayValFive.innerHTML = sliderFive.value;
    filters.year.min = Number(sliderFive.value);
    filterCars(filters);
};

function slideSix() {
    if (parseInt(sliderSix.value) - parseInt(sliderFive.value) <= minGapYear)
    {
        sliderSix.value = parseInt(sliderFive.value) + minGapYear;
    }
    displayValSix.innerHTML = sliderSix.value;
    filters.year.max = Number(sliderSix.value);
    filterCars(filters);
}



// Gestion de l'affichage des voitures:

function filterCars(filterdata) {
    var divs = document.querySelectorAll('.card'), i;

    for (i=0; i < divs.length; i++) {
        let display = true;

        // filtre km
        const km = divs[i].getAttribute("data-km");
        if (km < filterdata.km.min|| km> filterdata.km.max)
            {display = false;}

        //filtre price
        const price = divs[i].getAttribute("data-price");
        if (price <filterdata.price.min || price > filterdata.price.max)
        {display = false;}

        // filtre year
        const year = divs[i].getAttribute("data-year");
        if (year <filterdata.year.min || year > filterdata.year.max)
        {display = false;}

    if (display) {
        divs[i].style.display = 'grid';
    } else {
        divs[i].style.display = 'none';
    }
}

}

// réinitialisation


function resetKm(){ 
    sliderOne.value = filters.km.min;
    displayValTOne.innerHTML = sliderOne.value;
    sliderTwo.value = filters.km.max;
    displayValTwo.innerHTML = sliderTwo.value;
}

function resetPrice(){ 
    sliderThree.value = filters.price.min;
    displayValThree.innerHTML = sliderThree.value;
    sliderFour.value = filters.price.max;
    displayValFour.innerHTML = sliderFour.value;
}

function resetYear(){ 
    sliderFive.value = filters.year.min;
    displayValFive.innerHTML = sliderFive.value;
    sliderSix.value = filters.year.max;
    displayValSix.innerHTML = sliderSix.value;
}
    



