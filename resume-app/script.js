const btn = document.getElementById("fcf-button");
const inputs = document.getElementById("fcf-form-id");
btn.addEventListener('click', () => {
    Email.send({
        Host:"smtp.mailtrap.io",
        Username: "8a438fe3a2dbc6",
        Password: "4ec26f6ee47714",
        To: "persiebrown285@gmail.com",
        From: inputs.elements['Email'].value,
        Subject: "Zuri Training",
        Body: inputs.elements['Message'].value + "<br>" + "From " + inputs.elements['Name'].value


    }).then(msg=>alert("Message successfully sent"))
})
inputs.reset()