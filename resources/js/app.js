import './bootstrap';
import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.css';

document.addEventListener('DOMContentLoaded', function () {
    const lightbox = GLightbox({
        selector: '[data-glightbox]',
        keyboardNavigation: true
    });
});