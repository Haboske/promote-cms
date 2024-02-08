let stripe = Stripe('pk_test_51Og4vpCjUYekZZuEQ2tsycyLVnX1Pu9ORYaMpnHL3pkfaHCAEHkM9B8e4n22ZFm5HgmoAFz1mE5cFbwNR74dOPvI00o5btwjka');
let elements = stripe.elements();

let card = elements.create('card');
card.mount('#card-element');

card.addEventListener('change', function(event){
    let displayErrors = document.getElementById("card-errors")
    if(event.error){
        displayErrors.textContent = event.error.message;
    }
    else {
        displayErrors.textContent = '';
    }
});

let form = document.querySelector("#payment-form");
form.addEventListener('submit', function(event){
    event.preventDefault();
    stripe.createToken(card).then(function(result){
        if(result.error){
            let errorElement = document.querySelector('#card-errors')
            errorElement.textContent = result.error.message;
        }
        else{
            stripeTokenHandler(result.token)
        }
    })
});

function stripeTokenHandler(token){
    let form = document.querySelector("#payment-form");
    let hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type','hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    form.submit();
}