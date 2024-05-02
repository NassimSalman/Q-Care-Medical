import './bootstrap';

// header scroll
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


// departments header click

const departmentsLink = document.getElementById('departments-box');
const departmentsElement = document.getElementById('departments');
let departmentsVisible = false;

departmentsLink.addEventListener('click', (event) => {
    event.preventDefault(); 
    
    if (!departmentsVisible) {
        departmentsElement.style.display = 'grid';
        departmentsVisible = true;
    } else {
        departmentsElement.style.display = 'none';
        departmentsVisible = false;
    }
});

document.body.addEventListener('click', (event) => {
    if (!departmentsElement.contains(event.target) && event.target !== departmentsLink) {
        departmentsElement.style.display = 'none';
        departmentsVisible = false;
    }
});


// country flag

var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });

    // Function to update flag when input changes
    input.addEventListener("input", function() {
        var countryCode = iti.getSelectedCountryData().iso2;
        var flagContainer = document.getElementById("flag-container");
        flagContainer.innerHTML = '<i class="flag-icon flag-icon-' + countryCode.toLowerCase() + '"></i>';
    });