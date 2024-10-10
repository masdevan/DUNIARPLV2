import './bootstrap';
import './theme';
import './codebase.app.min';
import './chart.min';
import './be_pages_dashboard.min';
import GLightbox from 'glightbox';

document.addEventListener('DOMContentLoaded', function () {
    const lightbox = GLightbox({
        selector: '[data-glightbox]',
        keyboardNavigation: true
    });
});