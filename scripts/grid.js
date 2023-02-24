const animateGridElements = document.getElementsByClassName('grid-desktop');

const observer = new IntersectionObserver((entries, observer) => {
    for (let index = 0; index < entries.length; index++) {
        if(entries[index].isIntersecting) {
            entries[index].target.classList.add('active')
        }
    }
});
  
for (let index = 0; index < animateGridElements.length; index++) {
    const element = animateGridElements[index];
    observer.observe(element);  
}
 