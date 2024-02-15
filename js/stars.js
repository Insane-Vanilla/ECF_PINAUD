const allStars = document.querySelectorAll(".star-note");
const highlightedStars = [];
const rating = document.querySelector(".rating");

//fonction d'initialisation
init();

function init(){
    allStars.forEach (star => {
        star.addEventListener("click", saveRating);
        star.addEventListener("mouseover", addCSS);
        star.addEventListener("mouseleave", removeCSS);
    })
}

function saveRating(e){
    removeEventListenerToAllStars();
    rating.innerText = e.target.dataset.value;
}

function removeEventListenerToAllStars(){
    allStars.forEach(star => {
        star.removeEventListener("click", saveRating);
        star.removeEventListener("mouseover", addCSS);
        star.removeEventListener("mouseleave", removeCSS);
    })
}

function addCSS(e, css="checked"){
    const hoveredStar = e.target;
    hoveredStar.classList.add(css);
    const previousSibling = getPreviousSiblings(hoveredStar);
    previousSibling.forEach((elem) => elem.classList.add(css));
}

function removeCSS(e, css="checked"){
    const hoveredStar = e.target;
    hoveredStar.classList.remove(css);
    const previousSibling = getPreviousSiblings(hoveredStar);
    previousSibling.forEach((elem) => elem.classList.remove(css));
}

function getPreviousSiblings(elem){
    let siblings = [];
    const imgNodeType = 1;
    while ((elem = elem.getPreviousSiblings)){
        if (elem.nodeType === imgNodeType){
            siblings=[elem, ...sibs];
        }
    } return siblings;
}





