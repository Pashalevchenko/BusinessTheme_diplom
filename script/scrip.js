let button = document.querySelector('.banner__request_btn')
button.addEventListener('click', sendRequest)


function sendRequest(){
    let name = userName.value;
    let email = inputEmail.value;
    let number = phoneNumber.value;
    console.log('Имя: ' + name)
    console.log('Email: ' + email)
    console.log('Телефон: ' + number)
    }
   

let footerButton = document.querySelector('.newsletter__subscribr_btn')
footerButton.addEventListener('click', footerBtn)

function footerBtn(){
    let name1 = name.value;
    let email1 = email.value;
    console.log('Имя: ' + name1)
    console.log('Email: ' + email1)
}