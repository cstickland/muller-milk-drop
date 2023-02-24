const testimonialSections = document.querySelectorAll('.testimonials');

testimonialSections.forEach((section) => {
    const slides = section.querySelectorAll('.testimonial');
    const previousButton = section.querySelector('.prev-btn');
    const nextButton = section.querySelector('.next-btn');

    let activeSlide = 0;
    
    previousButton.addEventListener('click', () => {
        incrementSlide(true);
    })

    nextButton.addEventListener('click', () => {
        incrementSlide(false);
    })

    incrementSlide = (prev) => {
        slides.forEach((slide, interval) => {
            if(activeSlide == interval && slide.classList.contains('active')) { 
                slide.classList.remove('active');
            }
        })

        if(prev && activeSlide > 0) {
            activeSlide--
        } else if(prev && activeSlide == 0) {
            activeSlide = slides.length - 1
        }

        if(!prev && activeSlide < slides.length - 1) {
            activeSlide++
        } else if(!prev && activeSlide == slides.length -1) {
            activeSlide = 0
        }

        slides[activeSlide].classList.add('active');
    }
})


