require('./bootstrap');
import 'bootstrap';

const confirmationOverlay = document.getElementById('confirmation-overlay');
const confirmationForm = confirmationOverlay.querySelector('form');

document.querySelectorAll('.btn-delete').forEach(element=> {
    element.addEventListener('click', function(){
        confirmationOverlay.classList.remove('d-none');
        confirmationForm.action = confirmationForm.dataset.base + '/' + this.dataset.id;
    });
});

document.querySelector('.body').addEventListener('click', function() {
    confirmationForm.action = '';
    confirmationOverlay.classList.add('d-none');
});