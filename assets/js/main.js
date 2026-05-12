// Mobile menu toggle
const toggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

if (toggle && mobileMenu) {
    toggle.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden', isOpen);
        toggle.setAttribute('aria-expanded', String(!isOpen));
    });
}
