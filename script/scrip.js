let button = document.querySelector('.banner__request_btn')
let userName = document.querySelector('.banner__input_username')
button.addEventListener('click', sendRequest)


function sendRequest(){
    let name = userName.value;
    let email = inputEmail.value;
    let number = phoneNumber.value;
    console.log('Имя: ' + name)
    console.log('Email: ' + email)
    console.log('Телефон: ' + number)
    }
   

