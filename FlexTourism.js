
// Sign Up Page and Sign In Data Page


let firstName = document.getElementById("firstname");
let lastName = document.getElementById("lastname");
let email = document.getElementById("email");
let password = document.getElementById("password");
let repassword = document.getElementById("repassword");
let signUpButton = document.getElementById("sign-up");


let isFirstName = false;
let isLastName = false;
let isEmailValid = false;
let isPasswordValid = false;
let isRePasswordValid = false;
let passwordValue = '';


firstName.addEventListener('change',(event) => {
    let value = event.target.value;
    isFirstName = value.length > 2;
    if (isFirstName) {
        document.getElementById('firstname-error').innerHTML = '';
    }else {
        document.getElementById('firstname-error').innerHTML = 'Invalid First Name'
    }
    enableSignUpButton();
})


lastName.addEventListener('change',(event) => {
    let value = event.target.value;
    isLastName = value.length > 2;
    if (isLastName) {
        document.getElementById('lastname-error').innerHTML = '';
    }else {
        document.getElementById('lastname-error').innerHTML = 'Invalid Last Name'
    }
    enableSignUpButton();
})

let validateEmail = (email) => {
    var regex = /\S+@\S+\.\S+/;
    return regex.test(email);
 };    

email.addEventListener('change',(event) => {
    console.log(event);     
    
    isEmailValid = validateEmail(event.target.value);
    
	if (isEmailValid) {
        document.getElementById('email-error').innerHTML = '';
    }else {
        document.getElementById('email-error').innerHTML = 'Invalid E-mail'
    }
    enableSignUpButton();
})

password.addEventListener('change',(event) => {
    let value = event.target.value;
    isPasswordValid = value.length > 6;
    passwordValue = value;
    if (isPasswordValid) {
        document.getElementById('password-error').innerHTML = '';
    }else {
        document.getElementById('password-error').innerHTML = 'Invalid Password'
    }
    enableSignUpButton();
})

repassword.addEventListener('change',(event) => {
    let value = event.target.value;
    isRePasswordValid = value.length > 6 && value === passwordValue;
    if (isRePasswordValid) {
        document.getElementById('repassword-error').innerHTML = '';
    }else {
        document.getElementById('repassword-error').innerHTML = 'Invalid Password'
    }
    enableSignUpButton();
})

function enableSignUpButton() {
    if(isFirstName && isLastName && isEmailValid && isPasswordValid && isRePasswordValid){
        signUpButton.removeAttribute('disabled');
    }else{
        signUpButton.setAttribute('disabled', '');
    }
}


   
