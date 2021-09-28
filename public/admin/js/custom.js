// document.body.className += ' theme-dark';




// if (localStorage.getItem('theme-mode')) {
//     darkMode = localStorage.getItem('theme-mode');
// }

// localStorage.setItem('dark-mode', darkMode);


const themeSwitch = document.querySelector('.switch-theme');
themeSwitch.addEventListener('click', () => {
    if (localStorage.getItem('theme-mode') === 'theme-dark'){
        localStorage.removeItem('theme-mode');
        document.body.classList.remove('theme-dark');
    }else {
        document.body.classList.add('theme-dark');
        localStorage.setItem('theme-mode', 'theme-dark');
    }
});
