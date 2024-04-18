const contactForm =document.getElementById('contactForm'),
contactMessage = document.getElementById('contact-message')

const sendEmail = (e) =>{
e.preventDefault()
emailjs.sendForm('service_t8bpqti','template_as4p1rg','#contactForm','lCplR3ch0HjEgDVfL')
.then(()=>{
    contactMessage.textContent='Message sent successfully ✅'

    setTimeout(()=>{
        contactMessage.textContent=''
    },5000)

    contactForm.reset()
},()=>{
    contactMessage.textContent='Message not sent (service error) ❌' 
})
}

contactForm.addEventListener('submit',sendEmail)