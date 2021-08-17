/* function to focus directly on the first name when the form page loads */
function defaultFocus(){
    document.getElementById("first").focus();
    return true;
}

/* First name validation - Required */
function validateFirstName(inputTxt){
    const first = document.getElementById("first");
    const expression = /^[a-zA-Z]+(([' -][a-zA-Z ])?[a-zA-Z]*)*$/;
    const message = document.getElementById("fstatus");
    if(inputTxt.value !=""){
        if(inputTxt.value.match(expression)){
            message.textContent = ""; //green
        }
        else{
            message.textContent = "Invalid input!"; //red
            first.focus();
        }
    }
    else{
        message.textContent = "required!";
        first.focus();
    }
}

/* Middle name validation - Middle name is not compulsory */
function validateMiddleName(inputTxt){
    const middle = document.getElementById("middle");
    const expression = /^[a-zA-Z]+(([' -][a-zA-Z ])?[a-zA-Z]*)*$/;
    const message = document.getElementById("mstatus");
    if(inputTxt.value !=""){
        if(!inputTxt.value.match(expression)){
            message.textContent = "Invalid input!"; //red
            middle.focus();
        }
        else{
            message.textContent = "";
        }
    }
}

/* Last name - required */
function validateLastName(inputTxt){
    const last = document.getElementById("last");
    const expression = /^[a-zA-Z]+(([' -][a-zA-Z ])?[a-zA-Z]*)*$/;
    const message = document.getElementById("lstatus");
    if(inputTxt.value !=""){
        if(!inputTxt.value.match(expression)){
            message.textContent = "Invalid input!"; //red
            last.focus();
        }
        else{
            message.textContent = "";
        }
    }
    else{
        message.textContent = "required!";
        last.focus();
    }
}

/* Phone number validation */
function validatePhone(txt){
    const phone = document.getElementById("phone");
    const message = document.getElementById("pstatus");
    const expression = /^\+?([0-9]{1,3})\)?([0-9]{9,14})$/;
    if(txt.value != ""){
        if(!txt.value.match(expression)){
            message.textContent = "invalid!";  //red
            phone.focus();
        }
        else{
            message.textContent = "" ;
        }
    }
    else{
        message.textContent = "required!";    //red
        phone.focus();
    }
    
}

/* email validation */
function validateEmail(inputTxt){
    const email = document.getElementById("email");
    const message = document.getElementById("estatus");
    const standard = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(inputTxt.value !=""){
        if(!standard.test(inputTxt.value)){
            message.textContent = "Invalid input!"; //red
            email.focus();
        }
        else{
            message.textContent = "";
        }
    }
    else{
        message.textContent = "required!";
    }   
}

/* address location validation */
function validateAddress(txt){
    const address = document.getElementById("address");
    const message = document.getElementById("astatus");
    const expression = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z].*)*$/;
    if(txt.value !=""){
        if(!txt.value.match(expression)){
            message.textContent = "Invalid input!"; //red
            address.focus();
        }
        else{
            message.textContent = "";
        }
    }
    else {
        message.textContent = "required!";   //red
        address.focus();
    }

}

const form = document.getElementById("cv");

/* Function to call upon submission of form */
function onSubmit(event) {
    event.preventDefault();
    
    /* form fields are retrieved */
    const firstname= document.getElementById("cv").elements["f_name"].value;
    const lastname= document.getElementById("cv").elements["l_name"].value;
    const middlename= document.getElementById("cv").elements["m_name"].value;
    const phone= document.getElementById("cv").elements["phone"].value;
    const email= document.getElementById("cv").elements["email"].value;
    const address= document.getElementById("cv").elements["address"].value;
    const gender = document.getElementById("cv").elements["gender"].value;

    /* Stored within the local storage in the window */
    localStorage.setItem("f", firstname);
    localStorage.setItem("l", lastname);
    localStorage.setItem("m", middlename);
    localStorage.setItem("g", gender);
    localStorage.setItem("p", phone);
    localStorage.setItem("e", email);
    localStorage.setItem("a", address);

    /* redirects the page to the CV template page */
    window.location.href="cv.html";

    /* Reset form when the user gies back to the forms page */
    form.reset();
}
form.addEventListener('submit',onSubmit);