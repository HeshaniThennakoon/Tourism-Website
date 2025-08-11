// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Menu toggle functionality
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');

    if (menu && navbar) {
        menu.onclick = () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        };

        window.onscroll = () => {
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
        };
    }

    // Swiper slider initialization
    if (typeof Swiper !== 'undefined') {
        new Swiper(".home-slider", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    } else {
        console.error("Swiper library not loaded.");
    }

    //FAQ accordion functionality
    const faqBoxes = document.querySelectorAll('.questions .box');

    faqBoxes.forEach(box => {
        box.addEventListener('click', () => {
            box.classList.toggle('active');
        });
    });

    //Modal functionality
    function openModal(src) {
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modal-img');

        modal.style.display = "block";
        modalImg.src = src; 
    }

    function closeModal() {
        document.getElementById('modal').style.display = "none";
    }


    // Vehicle filtering using radio buttons
    const radioButtons = document.querySelectorAll('.vehicle-radio');
    const packageCards = document.querySelectorAll('.package-card');

    radioButtons.forEach(radio => {
        radio.addEventListener('change', () => {
            const selectedVehicle = radio.value.toLowerCase();

            packageCards.forEach(card => {
                const cardVehicle = card.dataset.vehicle.toLowerCase();

                if (selectedVehicle === 'all' || cardVehicle === selectedVehicle) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });


});

