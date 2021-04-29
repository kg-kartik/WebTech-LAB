var fname = document.getElementById("fname");
var address = document.getElementById("address-one");
var emailid = document.getElementById("email");
var phone = document.getElementById("phone");
var submit = document.getElementById("submit");
var form = document.getElementById("form");
var error = document.getElementById("error-messages");

var errorMessages = [];

form.addEventListener("submit", (e) => {
    e.preventDefault();
    if (fname.value === "") {
        errorMessages.push("First name is required");
        fname.classList.add("error");
    }

    if (address.value === "") {
        errorMessages.push("Adress is required");
        address.classList.add("error");
    }

    if (emailid.value === "") {
        errorMessages.push("Email address is required");
        email.classList.add("error");
    }

    if (phone.value === "") {
        errorMessages.push("Phone is required");
        phone.classList.add("error");
    }

    //Check for error messages
    if (errorMessages.length > 0) {
        error.innerText = errorMessages.join("\n");
        window.scrollTo(0, 0);
        errorMessages = [];
    } else {
        error.innerText = "";
        window.alert("form submitted successfully");
        form.reset();
    }
});

//When the user tries to change the input , remove error class
fname.addEventListener("change", () => {
    fname.classList.remove("error");
});

address.addEventListener("change", () => {
    address.classList.remove("error");
});

emailid.addEventListener("change", () => {
    emailid.classList.remove("error");
});

phone.addEventListener("change", () => {
    phone.classList.remove("error");
});
