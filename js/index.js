const slides = document.querySelector('.slides');
const dots = document.querySelectorAll('.dot');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentSlide = 0;

// Update slide and pagination
function updateSlide(index) {
    currentSlide = index;

    // Move the slider
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;

    // Update dots
    dots.forEach((dot, i) => {
        if (i === currentSlide) {
            dot.classList.add('active');
            dot.textContent = i + 1; // Show slide number
        } else {
            dot.classList.remove('active');
            // dot.textContent = ''; // Remove content for inactive dots
        }
    });

    // Disable/Enable Arrow Buttons
    prevBtn.disabled = currentSlide === 0;
    nextBtn.disabled = currentSlide === dots.length - 1;
}

// Initialize the slider
updateSlide(currentSlide);

// Event Listeners for Buttons
prevBtn.addEventListener('click', () => {
    if (currentSlide > 0) updateSlide(currentSlide - 1);
});

nextBtn.addEventListener('click', () => {
    if (currentSlide < dots.length - 1) updateSlide(currentSlide + 1);
});

// Event Listeners for Pagination Buttons
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => updateSlide(index));
});


function toggleMenu() {
    const sidebarMenu = document.getElementById("sidebarMenu");
    sidebarMenu.classList.toggle("open");
}
