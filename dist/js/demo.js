function toggleDarkMode(aktif) {
    document.body.classList.toggle('dark-mode', aktif);

    let navbar = document.querySelector('.main-header');

    if (navbar) {
        navbar.classList.toggle('navbar-dark', aktif);
        navbar.classList.toggle('navbar-light', !aktif);
        navbar.classList.toggle('navbar-dark', aktif);
        navbar.classList.toggle('bg-dark', aktif);
        navbar.classList.toggle('bg-white', !aktif);
    }

    localStorage.setItem('darkMode', aktif ? 'aktif' : 'nonaktif');
}

document.addEventListener('DOMContentLoaded', function () {
    let aktif = localStorage.getItem('darkMode') === 'aktif';

    toggleDarkMode(aktif);
});