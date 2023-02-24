const contactForm = document.getElementById('contact-form');

if(contactForm) {

    const contactMessage = document.getElementById('response');
    const submitContactButton = document.getElementById('wp-submit');
    
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
    
        let data = new FormData(contactForm);
    
        fetch(`${adminUrl}`, {
            method: 'POST',
            body: data,
        }).then(function (response) {
            return response.text();
        }).then(function (data) {
            console.log(data);
            contactMessage.innerHTML = data;
            submitContactButton.setAttribute('disabled', true);
            submitContactButton.value = "Thanks for your message!"
        }).catch(function (error) {
            console.warn(error);
        });
        // contactForm.submit();
    });
}