arr_slides = document.getElementsByClassName("slide");
dots = document.getElementsByClassName("dot");

index = 1;
function currentSlide(index){
    slideShow(index);
}

function slideShow(index){
    var i;
    /* IFs needed to cycle through the slide images */
    if( index > arr_slides.length)
        index = 1;
    if( index < 1)
        index = arr_slides.length;

    /*All the slides are set invisible*/ 
    for( i = 0 ; i < arr_slides.length; i++ )
        arr_slides[i].style.display="none"
    /*All the dots are set inactive */
    for( i = 0 ; i < dots.length ; i++ )
        dots[i].className = dots[i].className.replace(" activated", "");

    arr_slides[index-1].style.display="block";
    dots[index-1].className += " activated";
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
  }