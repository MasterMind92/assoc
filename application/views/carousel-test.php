<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* regle css slideshow manuel */
        body{
            font-family: 'Open Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 0 50px;
            background: linear-gradient(to left top, #031A9A, #8b53ff);
        }

        .wrapper{
            max-width: 1100px;
            width: 100%;
            position: relative;
        }

        .wrapper i {
            height: 50px;
            width: 50px;
            background: #fff;
            text-align: center;
            line-height: 50px;
            border-radius:50%;
            cursor: pointer;
            position: absolute;
            font-size: 1.25rem;
            top:50%;
            transform: translateY(-50%);
            box-shadow: 0 3px 6px rgba(0,0,0,0.23);
        }

        .wrapper i:first-child{
            left: -22px;
        }

        .wrapper i:last-child{
            right: -22px;
        }

        .wrapper .carousel{
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100%/3) - 12px);
            gap: 16px;
            overflow-x:auto;
            /* overflow-y:auto; */
            padding-left:0;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            scrollbar-width: 15px;
        }

        .carousel::-webkit-scrollbar{
            display: none;
        }

        .card .img{
            background: #8b53ff;
            width: 148px;
            height: 148px;
            border-radius: 50%;
        }

        .card .img img{
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius:50%;
            border: 4px solid #fff;
        }

        .card h2{
            font-weight: 500;
            font-size: 1.56rem;
            margin: 30px 0 5px;
        }

        .card span{
            color: #6a6d78;
            font-size: 1.31rem;
        }

        .carousel.no-transition{
            scroll-behavior: auto;
        }

        .carousel.dragging{
            scroll-snap-type: none;
            scroll-behavior: auto;
        }

        .carousel :where(.card, .img){
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        
        .carousel.dragging .card{
            cursor:grab;
            user-select:none;
        }

        .carousel .card{
            scroll-snap-align:start;
            height: 342px;
            list-style: none;
            background: #fff;
            border-radius:8px;
            display: flex;
            cursor:pointer;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding-bottom: 15px;
        }

        @media screen and (max-width:900px) {
            .wrapper .carousel{
                grid-auto-columns: calc((100%/2) - 9px);
            }
        }

        @media screen and (max-width:600px) {
            .wrapper .carousel{
                grid-auto-columns: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper-carousel">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="custom-carousel">
            <li class="custom-card">
                <div class="img"> <img src="<?php echo base_url();?>assets/img/child_funny.jpg" alt="" draggable="false"></div>
                <h2>Malika Gohe</h2>
                <span>Foster child</span>
            </li>
            <li class="custom-card">
                <div class="img"> <img src="<?php echo base_url();?>assets/img/child_funny.jpg" alt="" draggable="false"></div>
                <h2>Malika Gohe</h2>
                <span>Foster child</span>
            </li>
            <li class="custom-card">
                <div class="img"> <img src="<?php echo base_url();?>assets/img/child_funny.jpg" alt="" draggable="false"></div>
                <h2>Malika Gohe</h2>
                <span>Foster child</span>
            </li>
            <li class="custom-card">
                <div class="img"> <img src="<?php echo base_url();?>assets/img/child_funny.jpg" alt="" draggable="false"></div>
                <h2>Malika Gohe</h2>
                <span>Foster child</span>
            </li>
            <li class="custom-card">
                <div class="img"> <img src="<?php echo base_url();?>assets/img/child_funny.jpg" alt="" draggable="false"></div>
                <h2>Malika Gohe</h2>
                <span>Foster child</span>
            </li>
            <li class="custom-card">
                <div class="img"> <img src="<?php echo base_url();?>assets/img/child_funny.jpg" alt="" draggable="false"></div>
                <h2>Malika Gohe</h2>
                <span>Foster child</span>
            </li>
            <li class="custom-card">
                <div class="img"> <img src="<?php echo base_url();?>assets/img/child_funny.jpg" alt="" draggable="false"></div>
                <h2>Malika Gohe</h2>
                <span>Foster child</span>
            </li>
            <li class="custom-card">
                <div class="img"> <img src="<?php echo base_url();?>assets/img/child_funny.jpg" alt="" draggable="false"></div>
                <h2>Malika Gohe</h2>
                <span>Foster child</span>
            </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <script type="text/javascript">
        const wrapper = document.querySelector(".wrapper");
        const carousel = document.querySelector(".carousel");
        const arrowBtns = document.querySelectorAll(".wrapper i");
        const firstCardWidth = carousel.querySelector(".card").offsetWidth;
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
    </script>
</body>
</html>

<div class="row">
    <div class="col-12 col-md-6 col-lg-3 px-0">
        <div class="theme-hover">
            <img class="img-fluid" src="<?php #echo base_url();?>assets/img/donation-2.jpg" alt="">
        </div>
        <div class="bg-mauve p-3">
            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
            <div class="d-flex justify-content-between text-white pb-3">
                <span>Donation</span><span>8%</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-fuschia text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="pt-3 text-white">
                <span> 1.500.000 FCFA restant</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 px-0">
        <div class="theme-hover">
            <img class="img-fluid" src="<?php #echo base_url();?>assets/img/donation-3.jpg" alt="">
        </div>
        <div class="bg-fuschia p-3">
            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
            <div class="d-flex justify-content-between text-white pb-3">
                <span>Donation</span><span>8%</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-jaune text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="pt-3 text-white">
                <span> 1.500.000 FCFA restant</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 px-0">
        <div class="theme-hover">
            <img class="img-fluid" src="<?php #echo base_url();?>assets/img/donation-4.jpg" alt="">
        </div>
        <div class="bg-jaune p-3">
            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
            <div class="d-flex justify-content-between text-white pb-3">
                <span>Donation</span><span>8%</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-mauve text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="pt-3 text-white">
                <span> 1.500.000 FCFA restant</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 px-0">
        <div class="theme-hover">
            <img class="img-fluid" src="<?php #echo base_url();?>assets/img/donation-5.jpg" alt="">
        </div>
        <div class="bg-mauve p-3">
            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
            <div class="d-flex justify-content-between text-white pb-3">
                <span>Donation</span><span>8%</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-fuschia text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="pt-3 text-white">
                <span> 1.500.000 FCFA restant</span>
            </div>
        </div>
    </div>
</div>



<?php #$this->load->view('partials/footer')?>
<?php #$this->load->view('partials/foot')?>