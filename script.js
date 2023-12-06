const name = document.getElementById('name');
const address = document.getElementById('address');
const phone = document.getElementById('phone');
const form = document.getElementById('form'); 
const errorDiv = document.getElementById('error');

function test(){
    document.getElementById('name').innerHTML = "TESTing DOM...";
}

function ajax(){
    alert('your roder has been confirmed'); }
    

form.addEventListener('submit', (e) => {
    let messages = [];

    if (name.value === '' || name.value == null) {
        alert('You must enter your name');
       // messages.push('You must enter your name');
    }

    if(address.value.length <= 15){
        alert('Must be more than 15 character');
       // messages.push('Must be more than 15 character ');

    }

    if (messages.length > 0) {
        e.preventDefault(); 
        errorDiv.innerHTML = messages.join('<br>');
    }
});

function ajax() {
    let cart = document.getElementById('cart').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'component.php', true); // Update the PHP file here
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('b1').innerHTML = this.responseText;
        }
    }

    xhttp.send('cart=' + cart);
}