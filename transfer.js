/* Variables of the form fields in the CV page - initially empty */
const first_name = document.getElementById("first");
const middle_name = document.getElementById("middle");
const last_name = document.getElementById("last");
const my_gender = document.getElementById("gender");
const phone_number = document.getElementById("phone");
const email_address = document.getElementById("mail");
const region = document.getElementById("address");

/* Gets the form data from tthe window's local storage and fills the profile section of the CV */
first_name.innerHTML = localStorage.getItem("f");
middle_name.innerHTML = localStorage.getItem("m");
last_name.innerHTML = localStorage.getItem("l");
my_gender.innerHTML = localStorage.getItem("g");
phone_number.innerHTML = localStorage.getItem("p");
email_address.innerHTML = localStorage.getItem("e");
region.innerHTML = localStorage.getItem("a");

