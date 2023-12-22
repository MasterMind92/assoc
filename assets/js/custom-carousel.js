const wrapper = document.querySelector(".custom-wrapper");
const carousel = document.querySelector(".custom-carousel");
const arrowBtns = document.querySelectorAll(".custom-wrapper i");
const firstCardWidth = carousel.querySelector(".custom-card").offsetWidth;
const carouselChildrens = [... carousel.children];

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

//insert copies of the last few cards to end of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin",card.outerHTML)
});

//insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0,cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend",card.outerHTML)
});
let isDragging = false, startX, startScrollLeft,timeoutId;
//Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn =>{
    btn.addEventListener("click", ()=>{
        carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    })
});

const dragStart = (e)=>{
    isDragging = true;
    carousel.classList.add("dragging");
    //Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft ;
}

const dragging = (e)=>{
    // console.log(e.pageX);
    if (isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = ()=>{
    isDragging = false;
    carousel.classList.remove("dragging");
}

const autoPlay = () => {
    if (window.innerWidth < 800) return; //Return if window is smaller than 800
    timeoutId = setTimeout(() => {
        // Autoplay the carousel after every 2500ms
        carousel.scrollLeft += firstCardWidth
    }, 2500);
}

autoPlay();

const infiniteScroll = () =>{
    // if the carousel is at the begining, scroll to the end
    if (carousel.scrollLeft === 0 ) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft =  carousel.scrollWidth - ( 2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
        console.log("you've reached left end of carousel");
    }
    // if the carousel is at the end, scroll to the begining
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth){
        console.log("you've reached right end of carousel");
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if (!wrapper.matches(":hover")) autoPlay();
}

// carousel.addEventListener("mousedown",dragStart);
// carousel.addEventListener("mousemove",dragging);
// document.addEventListener("mouseup",dragStop);
carousel.addEventListener("scroll",infiniteScroll);