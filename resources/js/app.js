import '../css/header.css';
import '../css/comic-details.css';
import '../css/home.css';
import '../css/comics-list.css';
import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            const confirmed = confirm('Sei sicuro di voler cancellare questo fumetto?');
            if (confirmed) {
                form.submit();
            }
        });
    });
});
