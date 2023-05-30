import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteBtn = document.getElementById('delete-btn');

deleteBtn.addEventListener('click', (e) => {
    e.preventDefault();

    const deleteModal = document.getElementById('delete-modal'); //prendo la modale
    const bootstrapModal = new bootstrap.Modal(deleteModal); //creo la modale di bootstrap
     bootstrapModal.show();
    const btnDelete = document.getElementById('modal-btn'); //prendo il bottone della modale
    btnDelete.addEventListener('click', () => { //aggiungo e.listener
        deleteBtn.parentElement.submit(); //aggiungo evento al form
    });
})
