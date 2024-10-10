import './bootstrap';
import './theme';
import GLightbox from 'glightbox';

document.addEventListener('DOMContentLoaded', function () {
    const lightbox = GLightbox({
        selector: '[data-glightbox]',
        keyboardNavigation: true
    });
});