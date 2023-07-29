function closeNavbar() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    navbarToggler.click(); // Simula un clic en el botón del menú hamburguesa para cerrarlo
  }

  // Agregar un evento de clic a cada enlace del menú
  const navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');
  navbarLinks.forEach(link => {
    link.addEventListener('click', closeNavbar);
  });
