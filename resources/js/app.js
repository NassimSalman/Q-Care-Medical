import './bootstrap';


window.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('header');
    var scrollImage = document.getElementById('scroll-image');

    // Initial check when the page loads
    toggleHeaderClass();

    window.addEventListener('scroll', function () {
        // Check during scrolling
        toggleHeaderClass();
    });

    function toggleHeaderClass() {
        var scrollPosition = window.scrollY;
        if (scrollPosition > 50) {
            header.classList.add('scrolled');
            scrollImage.src = '/images/colored-logo.svg';
        } else {
            header.classList.remove('scrolled');
            scrollImage.src = '/images/white-logo.svg';
        }
    }
});
