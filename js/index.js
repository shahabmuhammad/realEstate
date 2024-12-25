function toggleMenu() {
    const sidebarMenu = document.getElementById("sidebarMenu");
    sidebarMenu.classList.toggle("open");
}


// Scroll to All News Section
window.addEventListener('load', () => {
    const allNewsSection = document.getElementById('all-news');
    if (allNewsSection) {
        allNewsSection.scrollIntoView({ behavior: 'smooth' });
    }
});
