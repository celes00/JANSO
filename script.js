// Selección de elementos del DOM
const hamburgerMenu = document.querySelector('.hamburger-menu'); /* representa el botón de hamburguesa  */
const menu = document.querySelector('.menu'); /* representa el menú desplegable. */
const menuLinks = document.querySelectorAll('.menu a'); /* representan los enlaces del menú. */

// Función para cerrar el menú desplegable
function closeMenu() {
  menu.classList.remove('active');
}

// Control del menú desplegable al hacer clic en el botón de hamburguesa
hamburgerMenu.addEventListener('click', () => {
  menu.classList.add('active');
});

// Control del menú desplegable al hacer clic en un enlace del menú
menuLinks.forEach(link => {
  link.addEventListener('click', closeMenu);
});

/* // Control del menú desplegable al hacer clic fuera del menú*/
document.addEventListener('click', (event) => {
    const target = event.target;
    if (!menu.contains(target) && !hamburgerMenu.contains(target)) {
      closeMenu();  
    }
  });
  