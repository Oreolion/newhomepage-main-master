

function sendMail () {

    var params = {
        question1 : document.getElementById("q1").value,
        answer1: document.getElementById("a1").value,
        question2 : document.getElementById("q2").value,
        answer2: document.getElementById("a2").value,
        question3 : document.getElementById("q3").value,
        answer3: document.getElementById("a3").value,
        question4 : document.getElementById("q4").value,
        answer4: document.getElementById("a4").value,
    }
    const serviceID = "service_91ylxms";
    const templateID = "template_jat6x2s"
    
    emailjs
        .send(serviceID, templateID, params)
        .then((res) => {
            window.location.href = "page.html"
            console.log(res)
        })
        .catch((err) => console.log(err))
}
